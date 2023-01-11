<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "purchases";
        $purchases = Purchase::get();
        return view('purchases',compact(
            'title','purchases'
        ));
    }

    /**
     * Display a create page of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "add Purhase";
        $suppliers = Supplier::get();
        return view('add-purchase',compact(
            'title','suppliers'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ano'=>'required',
            'mode'=>'required',
            'capacidade'=>'required',
            'comprimento'=>'required',
            'largura'=>'required',
            'angola'=>'required',
            'abas'=>'required',
           
        ]);
        Purchase::insert($request->all());
        $notifications = array(
            'message'=>"Purchase has been added",
            'alert-type'=>'success',
        );
        return redirect()->route('purchases')->with($notifications);
    }

    /**
     * Display the specified resource.
     *@param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $title = "Edit Purchase";
        $purchase = Purchase::find($id);
        return view('edit-purchase',compact(
            'title','purchase'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        $this->validate($request,[
            'ano'=>'required',
            'mode'=>'required',
            'capacidade'=>'required',
            'comprimento'=>'required',
            'largura'=>'required',
            'angola'=>'required',
            'abas'=>'required',
        ]);
      
        $purchase->update($request->all());
        $notifications = array(
            'message'=>"Purchase has been updated",
            'alert-type'=>'success',
        );
        
        return redirect()->route('purchases')->with($notifications);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $purchase = Purchase::find($request->id);
        $purchase->delete();
        $notification =array(
            'message'=>"Purchase has been deleted",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}

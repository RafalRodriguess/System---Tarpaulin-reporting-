<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Sales;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Events\PurchaseOutStock;
use App\Notifications\StockAlert;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "sales";
        $sales = Sales::get();
                
        return view('sales',compact(
            'title','sales'
        ));
    }

    public function create()
    {
        $title = "Adicionar OS";
        return view('add-sale',compact(
            'title',
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
            'service_order'=>'required',
            'bucket_model'=>'required',
            'measurements'=>'required',
            'front_bucket_crank'=>'required',
            'rear_bucket_crank'=>'required',
        ]);
        Sales::create([
            'service_order'=>$request->service_order,
            'service_order_t'=>$request->service_order_t,
            'bucket_model'=>$request->bucket_model,
            'bucket_model_t'=>$request->bucket_model_t,
            'bucket_model_d'=>$request->bucket_model_d,
            'measurements'=>$request->measurements,
            'measurements_t'=>$request->measurements_t,
            'front_bucket_crank'=>$request->front_bucket_crank,
            'front_bucket_crank_t'=>$request->front_bucket_crank_t,
            'rear_bucket_crank'=>$request->rear_bucket_crank,
            'rear_bucket_crank_t'=>$request->rear_bucket_crank_t,
        ]);
        $notification = array(
            'message'=>"OS adicionado",
            'alert-type'=>'success',
        );
        return redirect()->route('sale')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Editar OS";
        $sales = Supplier::find($id);
        return view('edit-sale',compact(
            'title','sales'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'service_order'=>'required',
            'bucket_model'=>'required',
            'measurements'=>'required',
            'front_bucket_crank'=>'required',
            'rear_bucket_crank'=>'required',
        ]);

        $sales->update($request->all());
        $notification = array(
            'message'=>"OS modificado",
            'alert-type'=>'success',
        );
        return redirect()->route('sale')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $sale = Sales::find($request->id);
        $sale->delete();
        $notification = array(
            'message'=>"OS deletada",
            'alert-type'=>'success'
        );
        return back()->with($notification);
    }
}

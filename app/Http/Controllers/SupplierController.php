<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ="Suppliers";
        $suppliers = Supplier::get();
        return view('suppliers',compact('title','suppliers'));
    }

    /**
     * Display a form for adding the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Adicionar Motorista";
        $products = Product::get();
        return view('add-supplier',compact(
            'title','products'
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
            'name'=>'required',
            'email'=>'email|string',
            'phone'=>'max:13',
            'rg'=>'required',
            'cpf'=>'required',
            'address'=>'required|max:200',
        ]);
        Supplier::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'rg'=>$request->rg,
            'address'=>$request->address,
            'cpf'=>$request->cpf,
        ]);
        $notification = array(
            'message'=>"Motorista adicionado",
            'alert-type'=>'success',
        );
        return redirect()->route('suppliers')->with($notification);
    }

    /**
     * Display the specified resource.
     *@param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $title = "Editar Motorista";
        $products = Product::get();
        $supplier = Supplier::find($id);
        return view('edit-supplier',compact(
            'title','products','supplier'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email|string',
            'phone'=>'max:13',
            'rg'=>'required',
            'cpf'=>'required',
            'address'=>'required|max:200',
        ]);

        $this->validate($request,[
            'name'=>'required|max:100',
            'email'=>'required|email',
            'password'=>'required|confirmed|max:200',
            'avatar'=>'file|image|mimes:jpg,jpeg,gif,png',
        ]);


        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'cep'=>$request->cep,
            'cnpj'=>$request->cnpj,
            'address'=>$request->address,
            'province'=>$request->province,
            'city'=>$request->city,
            'payment'=>$request->payment,
            'password'=>Hash::make($request->password),
            'avatar'=>$imageName
        ]);

        $supplier->update($request->all());
        $notification = array(
            'message'=>"Motorista modificado",
            'alert-type'=>'success',
        );
        return redirect()->route('suppliers')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $supplier = Supplier::find($request->id);
        $supplier->delete();
        $notification = array(
            'message'=>"Motorista deletado",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}

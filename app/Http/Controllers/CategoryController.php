<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Sales;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\StockAlert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "laudos";
        $categories = Category::get();
        $sales = Sales::get();
        $supplier = Supplier::get();
        $purchase = Purchase::get();
        $users = User::get();
        return view('categories',compact(
            'title','categories','sales','supplier','purchase','users'
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
      

        $user = User::insertGetId([
            'name_em'=>$request->input('name_em'),
            'email'=>$request->input('email'),
            'cep'=>$request->input('cep'),
            'cnpj'=>$request->input('cnpj'),
            'address_em'=>$request->input('address_em'),
            'province'=>$request->input('province'),
            'city'=>$request->input('city'),
            'payment'=>$request->input('payment'),
            'data'=>$request->input('data'),
            'obs'=>$request->input('obs'),
            'valor'=>$request->input('valor'),
        ]);

        $supplier = Supplier::insertGetId([
            'name_mo'=> $request->input('name_mo'),
            'email_mo'=> $request->input('email_mo'),
            'phone'=> $request->input('phone'),
            'rg'=> $request->input('rg'),
            'cpf'=> $request->input('cpf'),
            'address'=> $request->input('address'),
        ]);

        $purchase = Purchase::insertGetId([
            'ano'=> $request->input('ano'),
            'mode'=> $request->input('mode'),
            'capacidade'=> $request->input('capacidade'),
            'comprimento'=> $request->input('comprimento'),
            'largura'=> $request->input('largura'),
            'angola'=> $request->input('angola'),
            'abas'=> $request->input('abas'),
        ]);

        $sales = Sales::insertGetId([
            'service_order'=>$request->input('service_order'),
            'service_order_t'=>$request->input('service_order_t'),
            'bucket_model'=>$request->input('bucket_model'),
            'bucket_model_t'=>$request->input('bucket_model_t'),
            'bucket_model_d'=>$request->input('bucket_model_d'),
            'measurements'=>$request->input('measurements'),
            'measurements_t'=>$request->input('measurements_t'),
            'front_bucket_crank'=>$request->input('front_bucket_crank'),
            'front_bucket_crank_t'=>$request->input('front_bucket_crank_t'),
            'rear_bucket_crank'=>$request->input('rear_bucket_crank'),
            'rear_bucket_crank_t'=>$request->input('rear_bucket_crank_t'),
        ]); 

        if($sales && $purchase && $supplier && $user){
            Category::insert([
                'os' => $sales,
                'caminhao' => $purchase,
                'motorista' => $supplier,
                'empresa' => $user
            ]);
        }
      
        
        $notification=array(
            'message'=>"Laudo adicionado!",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }


    public function create()
    {
        $title = "Laudos";
        $categories = Category::get();
        return view('add-categorie',compact(
            'title','categories'
        ));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Laudos";
        $categorie = Category::where('id', $id)->first();
        $sales = Sales::where('id', $categorie->os)->first();
        $supplier = Supplier::where('id', $categorie->motorista)->first();
        $purchase = Purchase::where('id', $categorie->caminhao)->first();
        $users = User::where('id', $categorie->empresa)->first();
        return view('edit-categorie',compact(
            'title','categorie','sales','supplier','purchase','users'
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
      
        $id = $request->input('id');
     
        $categorie = Category::where('id', $id)->first();
        $sales = Sales::where('id', $categorie->os)->first();
        $supplier = Supplier::where('id', $categorie->motorista)->first();
        $purchase = Purchase::where('id', $categorie->caminhao)->first();
        $users = User::where('id', $categorie->empresa)->first();


        User::where('id', $categorie->empresa)->update([
            'name_em'=>$request->input('name_em'),
            'email'=>$request->input('email'),
            'cep'=>$request->input('cep'),
            'cnpj'=>$request->input('cnpj'),
            'address_em'=>$request->input('address_em'),
            'province'=>$request->input('province'),
            'city'=>$request->input('city'),
            'payment'=>$request->input('payment'),
            'data'=>$request->input('data'),
            'obs'=>$request->input('obs'),
            'valor'=>$request->input('valor'),
        ]);

        Supplier::where('id', $categorie->motorista)->update([
            'name_mo'=> $request->input('name_mo'),
            'email_mo'=> $request->input('email_mo'),
            'phone'=> $request->input('phone'),
            'rg'=> $request->input('rg'),
            'cpf'=> $request->input('cpf'),
            'address'=> $request->input('address'),
        ]);

        Purchase::where('id', $categorie->caminhao)->update([
            'ano'=> $request->input('ano'),
            'mode'=> $request->input('mode'),
            'capacidade'=> $request->input('capacidade'),
            'comprimento'=> $request->input('comprimento'),
            'largura'=> $request->input('largura'),
            'angola'=> $request->input('angola'),
            'abas'=> $request->input('abas'),
        ]);

        Sales::where('id', $categorie->os)->update([
            'service_order'=>$request->input('service_order'),
            'service_order_t'=>$request->input('service_order_t'),
            'bucket_model'=>$request->input('bucket_model'),
            'bucket_model_t'=>$request->input('bucket_model_t'),
            'bucket_model_d'=>$request->input('bucket_model_d'),
            'measurements'=>$request->input('measurements'),
            'measurements_t'=>$request->input('measurements_t'),
            'front_bucket_crank'=>$request->input('front_bucket_crank'),
            'front_bucket_crank_t'=>$request->input('front_bucket_crank_t'),
            'rear_bucket_crank'=>$request->input('rear_bucket_crank'),
            'rear_bucket_crank_t'=>$request->input('rear_bucket_crank_t'),
        ]); 



        $notification=array(
            'message'=>"Laudo atualizado!",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $categorie = Category::where('id', $request->id)->first();
        $sales = Sales::where('id', $categorie->os)->delete();
        $supplier = Supplier::where('id', $categorie->motorista)->delete();
        $purchase = Purchase::where('id', $categorie->caminhao)->delete();
        // $users = User::where('id', $categorie->empresa)->delete();
        $categorie = Category::where('id', $request->id)->delete();
        $notification=array(
            'message'=>"Laudo deletado!",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}

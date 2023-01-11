<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sales;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Notifications\StockAlert;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;

class ProductController extends Controller
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
                
        return view('products',compact(
            'title','sales'
        ));
    }

    public function create()
    {
        $title = "Adicionar OS";
        return view('add-product',compact(
            'title',
        ));
    }
    

    /**
     * Display a listing of expired resources.
     *
     * @return \Illuminate\Http\Response
     */
    // public function expired(){
    //     $title = "expired Products";
    //     $products = Purchase::whereDate('expiry_date', '=', Carbon::now())->get();
        
    //     return view('expired',compact(
    //         'title','products'
    //     ));
    // }

    // /**
    //  * Display a listing of out of stock resources.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function outstock(){
    //     $title = "outstocked Products";
    //     $products = Purchase::where('quantity', '<=', 0)->get();
    //     $product = Purchase::where('quantity', '<=', 0)->first();
    //     // auth()->user()->notify(new StockAlert($product));
        
    //     return view('outstock',compact(
    //         'title','products',
    //     ));
    // }
    

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
        return redirect()->route('products')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Editar OS";
        $sales = Sales::find($id);
        return view('edit-product',compact(
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
    public function update(Request $request, Sales $sales, $id)
    {
        $this->validate($request,[
            'service_order'=>'required',
            'bucket_model'=>'required',
            'measurements'=>'required',
            'front_bucket_crank'=>'required',
            'rear_bucket_crank'=>'required',
        ]);

        DB::table('sales')->where("id", $id)->update($request->all());
        $notification = array(
            'message'=>"OS modificado",
            'alert-type'=>'success',
        );
        return redirect()->route('products')->with($notification);
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

<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sales extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'product_id','service_order','service_order_t','bucket_model','bucket_model_t','bucket_model_d','measurements','measurements_t','front_bucket_crank','front_bucket_crank_t','rear_bucket_crank','rear_bucket_crank_t'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function purchase(){
        return $this->belongsTo(Purchase::class,'purchase_id');
    }
    
}

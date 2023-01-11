<?php

namespace App\Models;

use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Sales;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id',
        'name',
        'empresa',
        'motorista',
        'os',
        'caminhao',
    ];


    public function user(){
        return $this->HasMany(User::class, 'id', 'empresa');
    }

    public function sales(){
        return $this->HasMany(Sales::class, 'id', 'os');
    }

    public function supplier(){
        return $this->HasMany(Supplier::class, 'id', 'motorista');
    }

    public function purchase(){
        return $this->HasMany(Purchase::class, 'id', 'caminhao');
    }
}

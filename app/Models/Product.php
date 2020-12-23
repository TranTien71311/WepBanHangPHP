<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ="tbl_product";
    public $timestamps=false;
    protected $fillable = [
        'imagepro',
        'namepro',
        'quantity',
        'price',
        'contentpro',
        'status',
        'idcat',
    ];
    public function discount(){
        return $this->hasOne('App\Models\Discount', 'id', 'idpro');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table ="tbl_discount";
    public $timestamps=false;
    protected $fillable = [
        'date',
        'discount',
        'status',
        'idpro',
    ];
    public function product(){
        return $this->hasOne('App\Models\Product', 'id','idpro');
    }
}

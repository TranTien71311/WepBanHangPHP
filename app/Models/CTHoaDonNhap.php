<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTHoaDonNhap extends Model
{
    use HasFactory;
    protected $table ="tbl_CTHoaDonNhap";
    public $timestamps=false;
    protected $fillable = [
        'quantity',
        'price',
        'thanhtien',
        'idpro',
        'idhd',
    ];
    public function hoadonnhap(){
        return $this->belongsTo('App\Models\HoaDonNhap', 'idhd', 'id');
    }
    public function product(){
        return $this->hasOne('App\Models\Product','id', 'idpro');
    }
}

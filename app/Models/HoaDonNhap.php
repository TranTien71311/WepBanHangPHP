<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonNhap extends Model
{
    use HasFactory;
    protected $table ="tbl_HoaDonNhap";
    public $timestamps=false;
    protected $fillable = [
        'date',
        'total',
        'iduser',
        'idsupp',
        
    ];
    public function cthoadonnhap(){
        return $this->hasMany('App\Models\CTHoaDonNhap', 'idhd');
    }

    public function user(){
        return $this->hasOne('App\Models\User', 'id','iduser');
    }

    public function supplier(){
        return $this->hasOne('App\Models\Supplier', 'id', 'idsupp');
    }

}

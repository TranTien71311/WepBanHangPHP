<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory;
    protected $table ="tbl_category";
    public $timestamps=false;
    protected $fillable = [
        'imagecat',
        'namecat',
        'contentcat',
        'status',
    ];
}

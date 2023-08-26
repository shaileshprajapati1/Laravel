<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
        'title', 'description','procut_price','product_quntity','product_img'
    ];
}

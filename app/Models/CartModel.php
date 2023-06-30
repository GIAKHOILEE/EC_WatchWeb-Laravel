<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $fillable = [
        'idcart',
        'iduser',
        'idproduct',
        'soluong',
        'namesp',
        'giasp',
        'giagoc',
        'chitietsp',
        'imgsp',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationProduct extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'idsp',
        'namesp',
        'giasp',
        'giagoc',
        'soluong',
        'imgsp',
        'type_product',
        'chitietsp',
    ];

}

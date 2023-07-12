<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'productName',
        'productDescription',
        'category_id',
        'price',
        'productImages',
        'is_active',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Midbanner extends Model
{
    use HasFactory;

    protected $table = 'midbanner';

    protected $fillable = [
            'Category',
            'totalCategory',
            'producttype',
            'totalproduct',
            'description',
            'image'
    ];
}

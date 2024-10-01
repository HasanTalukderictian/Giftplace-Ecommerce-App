<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';
     protected $fillable = [
        'name',
        'model',
        'base_price',
        'brand_id',
        'category_id',
        'description',
        'summary_extra_description',
        'extra_summary',
        'image',
        'video_link',
        'stock',
        'show_in_frontend',
     ];


    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

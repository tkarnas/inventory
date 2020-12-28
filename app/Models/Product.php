<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'stock',
        'price',
        'image_url',
        'brand_id',
        'company_id',
        'category_id',

    ];

    public function loans() {return $this->hasMany(Loan::class);}
    public function brand() {return $this->belongsTo(Brand::class);}
    public function category() {return $this->belongsTo(Category::class);}
    public function company() {return $this->belongsTo(Company::class);}
}

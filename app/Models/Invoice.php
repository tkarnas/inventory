<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'price_total'
    ];
    public function company() {return $this->belongsTo(Company::class);}
    public function product() {return $this->belongsTo(Product::class);}
}

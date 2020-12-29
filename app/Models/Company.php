<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'Vat_number',
        'sector'
    ];
    public function product() {return $this->hasMany(Product::class);}
    public function invoices() {return $this->hasMany(Invoice::class);}
}

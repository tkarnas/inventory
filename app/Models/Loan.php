<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date_at',
        'end_date_at',
        'location',
        'user_id',
        'product_id'
    ];

    public function user() {return $this->belongsTo(User::class);}
    public function product() {return $this->belongsTo(Product::class);}
}

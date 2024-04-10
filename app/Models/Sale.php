<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saleProducts()
    {
        return $this->hasMany(SaleProduct::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    //representing the branch that made the sale
    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

}

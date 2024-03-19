<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierProductLine extends Model
{
    use HasFactory;

    protected $fillable = ['supplier_id', 'product_id', 'is_suppliyng'];

    public function supplier()
    {
        // The inverse of the 'hasMany' relationship in the Supplier model
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function product()
    {
        // The inverse of the 'hasMany' relationship in the Product model
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}

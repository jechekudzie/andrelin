<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Supplier extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = [];

    public function inventoryBatches()
    {
        return $this->hasMany(InventoryBatch::class);
    }

    public function supplierProductLines()
    {
        return $this->hasMany(SupplierProductLine::class, 'supplier_id');
    }



    public function isSupplyingProduct($productId)
    {
        return $this->supplierProductLines()->where('product_id', $productId)->exists();
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

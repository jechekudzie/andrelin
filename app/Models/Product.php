<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory,HasSlug;

    protected $guarded = [];


    public function scopeSearch($query, $search)
    {
        if (empty($search)) {
            return $query;
        }

        return $query->where('name', 'like', '%' . $search . '%');
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function supplierProductLines()
    {
        // Assuming 'product_id' is the foreign key in the 'supplier_product_lines' table
        return $this->hasMany(SupplierProductLine::class, 'product_id', 'id');
    }


    public function inventoryBatches()
    {
        return $this->hasMany(InventoryBatch::class);
    }

    public function shops()
    {
        return $this->belongsToMany(Shop::class)->withTimestamps();
    }

    public function stockTracking()
    {
        return $this->hasOne(StockTracking::class);
    }

    public function branchStocks()
    {
        return $this->hasMany(BranchStock::class);
    }

    public function stockDistributions()
    {
        return $this->hasMany(StockDistribution::class);
    }

    // Product has many Options
    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function productUnitMeasurements()
    {
        return $this->hasMany(ProductUnitMeasurement::class);
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

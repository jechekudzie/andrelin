<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use HasFactory,HasSlug;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    //sales
    public function sales()
    {
        return $this->hasMany(Sale::class);
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

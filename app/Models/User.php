<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasSlug,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function organisations()
    {
        return $this->belongsToMany(Organisation::class, 'organisation_users')
            ->withPivot('role_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'model_has_roles', 'model_id', 'role_id')
            ->withPivot('organisation_id');
    }

    public function getFirstCommonRoleNameWithOrganization($organisation)
    {
        // Retrieve the names (or IDs) of the user's roles
        $userRoleNames = $this->roles->pluck('name'); // Use 'id' if you prefer to compare by role IDs

        // Retrieve the names (or IDs) of the organization's roles
        $organisationRoleNames = $organisation->organisationRoles->pluck('name'); // Assuming the relationship is named 'roles'; use 'id' for role IDs

        // Find common roles between the user and the organization
        $commonRoles = $userRoleNames->intersect($organisationRoleNames);

        // Return the first common role or null if there are no common roles
        return $commonRoles->first();
    }


    public function getFirstCommonRoleWithOrganization($organisation)
    {
        // Get all roles for the user
        $userRoles = $this->roles;

        // Get all roles for the organization
        $organisationRoles = $organisation->organisationRoles;

        // Filter user roles to find the first one that also exists in the organization's roles
        $firstCommonRole = $userRoles->first(function ($userRole) use ($organisationRoles) {
            return $organisationRoles->contains('name', $userRole->name); // or 'id' to compare by role IDs
        });

        // Return the first common role object or null if there are no common roles
        return $firstCommonRole;
    }


    //user has one customer
    public function customer()
    {
        return $this->hasOne(Customer::class);
    }


    public function getSlugOptions() : SlugOptions
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

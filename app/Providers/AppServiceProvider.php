<?php

namespace App\Providers;
use App\Models\Organisation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

use Livewire\Livewire;
use App\Http\Livewire\ProductsList;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Livewire::component('products-list', ProductsList::class);
        //
        View::composer('*', function ($view) {
            // Skip for CLI or specific views
            if (app()->runningInConsole() || $view->getName() === 'mails.mail') {
                return;
            }

            // Attempt to resolve the Organisation model instance using route model binding
            $organisation = request()->route('organisation');

            // Initialize role as null
            $userRole = null;

            // Check if user is logged in
            $user = auth()->user();
            if ($user && $organisation) {
                // Assuming getFirstCommonRoleWithOrganization is a method defined on the User model
                // This method should determine the user's role within the context of the provided organisation
                $userRole = $user->getFirstCommonRoleWithOrganization($organisation);
            }

            // Share the organisation object and role with all views except the specified ones
            $view->with([
                'organisation' => $organisation,
                'userRole' => $userRole,
            ]);
        });

    }
}

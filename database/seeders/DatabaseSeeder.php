<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ModuleSeeder::class,
            OrganisationTypesSeeder::class,
            OrganisationTypeRelationshipSeeder::class,
            OrganisationsSeeder::class,
            UsersTableSeeder::class,
            /*OrganisationAdminSeeder::class,*/
        ]);
    }
}

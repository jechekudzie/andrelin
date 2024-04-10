<?php

namespace Database\Seeders;

use App\Models\OrganisationType;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganisationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $organisationTypes = [

            ['name' => 'Holdings Company', 'slug' => 'holdings-company', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Subsidiary', 'slug' => 'subsidiary', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Branch', 'slug' => 'branch', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Customer', 'slug' => 'customer', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        foreach ($organisationTypes as $type) {
            OrganisationType::create($type);
        }

    }
}

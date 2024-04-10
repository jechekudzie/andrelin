<?php

namespace Database\Seeders;

use App\Models\Organisation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class OrganisationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $organisations = [
            [
                'name' => 'Andrelin Enterprises',
                'organisation_type_id' => 1,
                'organisation_id' => null,
                'slug' => 'andrelin-enterprises',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Andrelin Solar',
                'organisation_type_id' => 2,
                'organisation_id' => 1,
                'slug' => 'andrelin-solar',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Andrelin Hardware',
                'organisation_type_id' => 2,
                'organisation_id' => 1,
                'slug' => 'andrelin-hardware',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Andrelin Logistics',
                'organisation_type_id' => 2,
                'organisation_id' => 1,
                'slug' => 'andrelin-logistics',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Avondale - Solar (Branch)',
                'organisation_type_id' => 3,
                'organisation_id' => 2,
                'slug' => 'avondale-solar-branch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Avondale - Hardware (Branch)',
                'organisation_type_id' => 3,
                'organisation_id' => 3,
                'slug' => 'avondale-hardware-branch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Avondale - Logistics (Branch)',
                'organisation_type_id' => 3,
                'organisation_id' => 4,
                'slug' => 'avondale-logistics-branch',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
            'name' => 'Customer',
            'organisation_type_id' => 4,
            'organisation_id' => 1,
            'slug' => 'customer',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]
        ];
        foreach ($organisations as $organisation) {

            $newOrganisation = Organisation::create($organisation);

            // Create admin role
            $role = $newOrganisation->organisationRoles()->create([
                'name' => 'admin',
                'guard_name' => 'web',
            ]);

            if ($newOrganisation->name === 'Customer' && $newOrganisation->organisation_type_id === 4) {
                // Create customer role and dealer role
                $role = $newOrganisation->organisationRoles()->create([
                    'name' => 'customer',
                    'guard_name' => 'web',
                ]);
                $role = $newOrganisation->organisationRoles()->create([
                    'name' => 'dealer',
                    'guard_name' => 'web',
                ]);

            }

            // Check if the organisation name is similar to the ones that should have all permissions
            if (Str::lower($newOrganisation->name) === Str::lower("Andrelin Enterprises")) {
                // Retrieve all permissions
                $permissions = Permission::all();
            } else {
                // Retrieve all permissions and reject the ones related to 'generic'
                $permissions = Permission::all()->reject(function ($permission) {
                    // Check if the permission name contains 'generic'
                    return Str::contains(Str::lower($permission->name), 'generic');
                });
            }

            // Find or create permissions based on the provided names
            $permissionsToAssign = [];
            foreach ($permissions as $permission) {
                // Ensure $permission->name is a string representing the permission name
                $permissionsToAssign[] = Permission::findOrCreate($permission->name);
            }

            // Sync permissions to the role (this will attach the new permissions and detach any that are not in the array)
            $role->syncPermissions($permissionsToAssign);

        }
    }
}

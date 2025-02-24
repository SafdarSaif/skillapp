<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenant = Tenant::create(['id' => 'tenant1', 'domain' => 'tenant1.localhost']);

        $tenant->run(function () {
            User::create([
                'name' => 'Tenant 1 User',
                'email' => 'tenant1@example.com',
                'password' => Hash::make('password'),
            ]);
        });

        $tenant2 = Tenant::create(['id' => 'tenant2', 'domain' => 'tenant2.localhost']);

        $tenant2->run(function () {
            User::create([
                'name' => 'Tenant 2 User',
                'email' => 'tenant2@example.com',
                'password' => Hash::make('password'),
            ]);
        });
    }
}

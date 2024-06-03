<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name'  => __('Administrator'),
            'email' => 'admin@admin.com',
        ]);
        $user->companies()->attach(Company::find(1)->id);
        $user->companies()->attach(Company::find(2)->id);
    }
}

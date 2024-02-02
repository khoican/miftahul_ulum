<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'mifathul',
                'password' => Hash::make('admin_miftahul')
            ],
            [
                'name' => 'pengurus',
                'password' => Hash::make('admin_miftahul')
            ],
            [
                'name' => 'admin@admin',
                'password' => Hash::make('admin_miftahul')
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}

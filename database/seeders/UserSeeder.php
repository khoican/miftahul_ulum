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
                'name' => 'admin',
                'password' => Hash::make('admin')
            ],
            [
                'name' => 'admin',
                'password' => Hash::make('admin12345678'),
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}

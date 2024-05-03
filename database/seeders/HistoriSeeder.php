<?php

namespace Database\Seeders;

use App\Models\Histori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Histori::create([
            'body' => 'Sejarah singkat dari Yayasan Pendidikan Islam Miftahul Ulum masih belum ada, silahkan tambahkan sekarang',
        ]);
    }
}
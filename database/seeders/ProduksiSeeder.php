<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produksi')->insert([
            'so' => '3211',
            'artikel' => 'camo',
            'total' => '321',
            'output' => '320'
        ]);
    }
}

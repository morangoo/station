<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('platforms')->insert([
            [
                'id' => 101,
                'name' => 'Steam',
                'image' => null,
                'cover' => null,
            ],
        ]);
    }
}

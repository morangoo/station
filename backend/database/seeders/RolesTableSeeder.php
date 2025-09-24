<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 0,
                'name' => 'Starblazer',
                'xp_min' => 0,
                'xp_max' => 199,
                'badge' => null,
                'description' => 'starblazer',
                'color' => '#bababa',
                'benefits' => '[]',
            ],
            [
                'id' => 1,
                'name' => 'Cosmonaut',
                'xp_min' => 200,
                'xp_max' => 499,
                'badge' => null,
                'description' => 'cosmonaut',
                'color' => '#659df7',
                'benefits' => '[]',
            ],
            [
                'id' => 2,
                'name' => 'Astronaut',
                'xp_min' => 500,
                'xp_max' => 999,
                'badge' => null,
                'description' => 'astronaut',
                'color' => '#eb5083',
                'benefits' => '[]',
            ],
            [
                'id' => 3,
                'name' => 'Stargazer',
                'xp_min' => 1000,
                'xp_max' => 2499,
                'badge' => null,
                'description' => 'stargazer',
                'color' => '#8a35e6',
                'benefits' => '[]',
            ],
            [
                'id' => 4,
                'name' => 'Jedi',
                'xp_min' => 2500,
                'xp_max' => 4999,
                'badge' => null,
                'description' => 'jedi',
                'color' => '#2e82ff',
                'benefits' => '[]',
            ],
            [
                'id' => 5,
                'name' => 'Saiyan',
                'xp_min' => 5000,
                'xp_max' => null,
                'badge' => null,
                'description' => 'saiyan',
                'color' => '#e08722',
                'benefits' => '[]',
            ],
        ]);
    }
}

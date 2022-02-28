<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symbols')->insert([
            ['letter' => 'a', 'symbol' => 'A'],
            ['letter' => 'a', 'symbol' => '4'],
            ['letter' => 'a', 'symbol' => '@'],
            ['letter' => 'b', 'symbol' => 'B'],
            ['letter' => 'c', 'symbol' => 'C'],
            ['letter' => 'd', 'symbol' => 'D'],
            ['letter' => 'e', 'symbol' => 'E'],
            ['letter' => 'f', 'symbol' => 'F'],
            ['letter' => 'g', 'symbol' => 'G'],
            ['letter' => 'h', 'symbol' => 'H'],
            ['letter' => 'i', 'symbol' => 'I'],
            ['letter' => 'j', 'symbol' => 'J'],
            ['letter' => 'k', 'symbol' => 'K'],
            ['letter' => 'l', 'symbol' => 'L'],
            ['letter' => 'm', 'symbol' => 'M'],
            ['letter' => 'n', 'symbol' => 'N'],
            ['letter' => 'o', 'symbol' => 'O'],
            ['letter' => 'p', 'symbol' => 'P'],
            ['letter' => 'q', 'symbol' => 'Q'],
            ['letter' => 'r', 'symbol' => 'R'],
            ['letter' => 's', 'symbol' => 'S'],
            ['letter' => 't', 'symbol' => 'T'],
            ['letter' => 'u', 'symbol' => 'U'],
            ['letter' => 'v', 'symbol' => 'V'],
            ['letter' => 'w', 'symbol' => 'W'],
            ['letter' => 'x', 'symbol' => 'X'],
            ['letter' => 'y', 'symbol' => 'Y'],
            ['letter' => 'z', 'symbol' => 'Z'],
        ]);
    }
}

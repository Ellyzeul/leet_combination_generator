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
            ['letter' => 'c', 'symbol' => '¢'],
            ['letter' => 'd', 'symbol' => 'D'],
            ['letter' => 'd', 'symbol' => '|)'],
            ['letter' => 'd', 'symbol' => '[)'],
            ['letter' => 'e', 'symbol' => 'E'],
            ['letter' => 'e', 'symbol' => '3'],
            ['letter' => 'f', 'symbol' => 'F'],
            ['letter' => 'g', 'symbol' => 'G'],
            ['letter' => 'h', 'symbol' => 'H'],
            ['letter' => 'h', 'symbol' => '#'],
            ['letter' => 'i', 'symbol' => 'I'],
            ['letter' => 'j', 'symbol' => 'J'],
            ['letter' => 'k', 'symbol' => 'K'],
            ['letter' => 'l', 'symbol' => 'L'],
            ['letter' => 'm', 'symbol' => 'M'],
            ['letter' => 'n', 'symbol' => 'N'],
            ['letter' => 'o', 'symbol' => 'O'],
            ['letter' => 'o', 'symbol' => '0'],
            ['letter' => 'p', 'symbol' => 'P'],
            ['letter' => 'q', 'symbol' => 'Q'],
            ['letter' => 'r', 'symbol' => 'R'],
            ['letter' => 's', 'symbol' => 'S'],
            ['letter' => 's', 'symbol' => '$'],
            ['letter' => 's', 'symbol' => '5'],
            ['letter' => 't', 'symbol' => 'T'],
            ['letter' => 't', 'symbol' => '+'],
            ['letter' => 'u', 'symbol' => 'U'],
            ['letter' => 'u', 'symbol' => 'ú'],
            ['letter' => 'v', 'symbol' => 'V'],
            ['letter' => 'w', 'symbol' => 'W'],
            ['letter' => 'x', 'symbol' => 'X'],
            ['letter' => 'y', 'symbol' => 'Y'],
            ['letter' => 'z', 'symbol' => 'Z'],
        ]);
    }
}

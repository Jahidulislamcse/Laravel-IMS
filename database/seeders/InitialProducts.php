<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Str;

class InitialProducts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Soap',
            'quantity' => 10,
            'price' => 20.99,
        ]
        );

        DB::table('products')->insert([
            'name' => 'Brush ',
            'quantity' => 30,
            'price' => 15.50,
        ]
        );

        DB::table('products')->insert([
            'name' => 'NoteBook',
            'quantity' => 20,
            'price' => 20,
        ]
        );


    }
}


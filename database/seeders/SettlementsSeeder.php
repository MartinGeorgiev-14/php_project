<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class SettlementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settlements')->insert([
            'name' => 'Veliko Tarnovo "Shipka" №22 street',
            'slug' => 'Veliko Tarnovo "Shipka" №22 street',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('settlements')->insert([
            'name' => 'Veliko Tarnovo "Pobeda" №10 street',
            'slug' => 'Veliko Tarnovo "Pobeda" №10 street',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('settlements')->insert([
            'name' => 'Gorna Orqhovica "Angel Kunchev" №2 street',
            'slug' => 'Gorna Orqhovica "Angel Kunchev" №2 street',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('settlements')->insert([
            'name' => 'Veliko Tarnovo "Alen Mak" №13b street',
            'slug' => 'Veliko Tarnovo "Alen Mak" №13b street',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('settlements')->insert([
            'name' => 'Veliko Tarnovo "Oborishte" №9 street',
            'slug' => 'Veliko Tarnovo "Oborishte" №9 street',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}

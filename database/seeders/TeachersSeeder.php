<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'Petur Ivanov',
            'slug' => 'Petur Ivanov',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('teachers')->insert([
            'name' => 'Georgi Stefanov',
            'slug' => 'Georgi Stefanov',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('teachers')->insert([
            'name' => 'Ivailo Georgiev',
            'slug' => 'Ivailo Georgiev',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('teachers')->insert([
            'name' => 'Milen Milenov',
            'slug' => 'Milen Milenov',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('teachers')->insert([
            'name' => 'Simeon Toshkov',
            'slug' => 'Simeon Toshkov',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}

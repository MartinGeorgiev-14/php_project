<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizations')->insert([
            'name' => 'Vivacom',
            'slug' => 'Vivacom',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('organizations')->insert([
            'name' => 'OMV',
            'slug' => 'OMV',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('organizations')->insert([
            'name' => 'Samsung',
            'slug' => 'Samsung',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('organizations')->insert([
            'name' => 'Google',
            'slug' => 'Google',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('organizations')->insert([
            'name' => 'Mitsubishi',
            'slug' => 'Mitsubishi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}

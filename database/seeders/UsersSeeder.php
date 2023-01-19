<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Martin',
            'email' => 'martin@gmail.com',
            'password' => Hash::make('testmartin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Georgi',
            'email' => 'georgi@gmail.com',
            'password' => Hash::make('testgeorgi'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Ivan',
            'email' => 'ivan@gmail.com',
            'password' => Hash::make('testivan'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Petur',
            'email' => 'petur@gmail.com',
            'password' => Hash::make('testpetur'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Stoqn',
            'email' => 'stoqn@gmail.com',
            'password' => Hash::make('teststoqn'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}

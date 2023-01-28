<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'Math',
            'info' => 'Take notebooks.',
            'date' => Carbon::parse('01-02-2023'),
            'start' => '09:15',
            'end' => '11:00',
            'teacher_id' => '1',
            'organization_id' => '1',
            'settlement_id' => '1',
            'file' => 'New Microsoft Excel Worksheet.xlsx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Geography',
            'info' => 'Take atlas.',
            'date' => Carbon::parse('01-02-2023'),
            'start' => '14:15',
            'end' => '16:00',
            'teacher_id' => '2',
            'organization_id' => '3',
            'settlement_id' => '4',
            'file' => 'New Pdf File.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Art',
            'info' => 'Take brushes.',
            'date' => Carbon::parse('04-02-2023'),
            'start' => '8:15',
            'end' => '10:00',
            'teacher_id' => '4',
            'organization_id' => '2',
            'settlement_id' => '3',
            'file' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Chemistry',
            'info' => '',
            'date' => Carbon::parse('02-02-2023'),
            'start' => '10:15',
            'end' => '12:00',
            'teacher_id' => '3',
            'organization_id' => '3',
            'settlement_id' => '4',
            'file' => 'New Text Document.txt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'English',
            'info' => 'Take your tables.',
            'date' => Carbon::parse('10-02-2023'),
            'start' => '08:15',
            'end' => '10:00',
            'teacher_id' => '4',
            'organization_id' => '2',
            'settlement_id' => '1',
            'file' => 'New Microsoft Excel Worksheet.xlsx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Literature',
            'info' => 'Read your books before you come!!!',
            'date' => Carbon::parse('09-02-2023'),
            'start' => '12:15',
            'end' => '14:00',
            'teacher_id' => '3',
            'organization_id' => '5',
            'settlement_id' => '2',
            'file' => 'New Rar File.rar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Math',
            'info' => '',
            'date' => Carbon::parse('11-02-2023'),
            'start' => '12:15',
            'end' => '14:00',
            'teacher_id' => '1',
            'organization_id' => '1',
            'settlement_id' => '5',
            'file' => 'New Rar File.rar',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Financy',
            'info' => '',
            'date' => Carbon::parse('17-02-2023'),
            'start' => '17:15',
            'end' => '19:00',
            'teacher_id' => '4',
            'organization_id' => '2',
            'settlement_id' => '4',
            'file' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Art',
            'info' => 'Take burshes.',
            'date' => Carbon::parse('19-02-2023'),
            'start' => '13:15',
            'end' => '15:00',
            'teacher_id' => '3',
            'organization_id' => '3',
            'settlement_id' => '3',
            'file' => 'New Microsoft PowerPoint Presentation.pptx',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('courses')->insert([
            'title' => 'Business',
            'info' => 'Please come 15 minutes earlier',
            'date' => Carbon::parse('28-02-2023'),
            'start' => '10:15',
            'end' => '12:00',
            'teacher_id' => '4',
            'organization_id' => '5',
            'settlement_id' => '1',
            'file' => '',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        
    }
}

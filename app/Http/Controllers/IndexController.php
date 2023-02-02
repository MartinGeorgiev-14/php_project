<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Organization;
use App\Models\Settlement;
class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

       // $data = Course::with(['teachers' => function($query){
       // $query->select('name');}])->get();
       
        $data = Course::all();
        $dataTeacher = Teacher::all();
        $dataOrganization = Organization::all();
        $dataSettlement = Settlement::all();

       return view('index.index', compact('data', 'dataTeacher', 'dataOrganization', 'dataSettlement'));
    }
}

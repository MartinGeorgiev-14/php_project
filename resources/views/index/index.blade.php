@extends('layouts.app')

@section('content')

<div class="list-container">
   <h1 class="list-title">Courses List</h1>

   <table class="courses_list">
    <tr>
        <td>Courses</td>
        <td>Info</td>
        <td>Date</td>
        <td>Start</td>
        <td>End</td>
        <td>Teachers</td>
        <td>Organizations</td>
        <td>Settlements</td>
        <td>File</td>
    </tr>
    @foreach($data as $course)
    <tr>
        <td>{{$course->title}}</td>
        <td>{{$course->info}}</td>
        <td>{{$course->date}}</td>
        <td>{{$course->start}}</td>
        <td>{{$course->end}}</td>
        <td>{{$course->teacher_id}}</td>
        <td>{{$course->organization_id}}</td>
        <td>{{$course->settlement_id}}</td>
        <td>{{$course->file}}</td>
    </tr>
    @endforeach
   </table>

</div>

<div class="list_container_bottom">
    <table class="teacher_table">
            <tr>
                <td>Id</td>
                <td>Name</td>
            </tr>
    @foreach($dataTeacher as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
            </tr>
    @endforeach
    </table>

    <table class="organization_table">
            <tr>
                <td class="organization_td">Id</td>
                <td class="organization_td">Organization</td>
            </tr>
    @foreach($dataOrganization as $organization)
            <tr>
                <td>{{$organization->id}}</td>
                <td>{{$organization->name}}</td>
            </tr>
    @endforeach
    </table>

    <table class="settlement_table">
            <tr>
                <td>Id</td>
                <td>Settlement</td>
            </tr>
    @foreach($dataSettlement as $settlement)
            <tr>
                <td>{{$settlement->id}}</td>
                <td>{{$settlement->name}}</td>
            </tr>
    @endforeach
    </table>

<div>


   <style>
    .list-container 
    {
       
     
    }

    .list-title 
    {
        text-align: center;
        padding-bottom: 1rem;
        
    }

    .courses_list
    {
        display: flex;
        justify-content: center;
        
    }

    .courses_list tr, .list_container_bottom tr
    {
        
        background-color: #7370D8;
    }

    .courses_list tr td  
    {
        border: 3px solid gray;   
        padding: 1rem;
        color: white;
        font-size: 2rem;
    }
    .list_container_bottom
    {
        margin-top: 5rem;
        display:flex;
        justify-content: center;
    }

    .list_container_bottom tr td
    {
        border: 3px solid gray;   
        padding: 1rem;
        color: white;
        font-size: 2rem;
    }

    

    </style>
@endsection


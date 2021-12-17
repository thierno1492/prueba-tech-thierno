@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1> Reports: {{$report->title}}</h1>
        </div>
        <div class="row">
            <div class="col">
<a class="btn btn-primary" href="/tarea_reports">back</a>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($report->catTasks as  $cat_task)
                <tr>
                    <td>{{$cat_task->category}}</td>
                    <td>{{$cat_task->created_at}}</td>


                </tr>
                @endforeach
            </table>
        </div>
    </div>

   <div class="row">
       <div class="col">
           <a class=" btn btn-primary" href="/tarea_reports/{{$report->id}}/cat_tasks/create">new expense</a>
       </div>
   </div>


@endsection

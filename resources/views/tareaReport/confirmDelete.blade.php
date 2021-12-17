@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1> delete Tareas{{$cat->id}}</h1>
        </div>
        <div class="row">
            <div class="col">
<a class="btn btn-primary" href="/tarea_reports">back</a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <form action="/tarea_reports/{{$cat->id}}" method="POST">
                @csrf
                @method('delete')

             <div class="col m-3">
                <button class="btn btn-primary" type="submit">delete</button>
             </div>
            </form>
        </div>
    </div>


@endsection

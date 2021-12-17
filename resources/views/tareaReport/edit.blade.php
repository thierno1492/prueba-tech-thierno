@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col">
        <h1> edit Task{{$cat->id}}</h1>
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
                @method('put')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control " id="title" name="title" placeholder="escribir aqui">

                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>


@endsection

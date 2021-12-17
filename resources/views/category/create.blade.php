@extends('layouts.base')

@section('content')
<div class="row py-3">
    <div class="col">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <h1>new report</h1>
        </div>
        <div class="row">
            <div class="col">
<a href="/tarea_reports" class="btn btn-primary">back</a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <form action="/tarea_reports/{{$cat->id}}/cat_tasks" method="POST">
                @csrf
                <div class="form-group">
                    <label for="category">Category Tarea:</label>
                    <input type="text" id="category" name="category" placeholder="description" class="form-control" value="{{old('category')}} ">
                </div>
                <button class="btn btn-primary" type="submit">submit</button>
            </form>
        </div>
    </div>


@endsection

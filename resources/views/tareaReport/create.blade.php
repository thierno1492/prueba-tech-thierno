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

        <h1>Tasks</h1>
        </div>
        <div class="row">
            <div class="col">
<a href="/tarea_reports" class="btn btn-primary">back</a>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <form action="/tarea_reports" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" placeholder="titulo" class="form-control" value="{{old('title')}} ">
                </div>
                <button class="btn btn-primary" type="submit">save</button>
            </form>
        </div>
    </div>


@endsection


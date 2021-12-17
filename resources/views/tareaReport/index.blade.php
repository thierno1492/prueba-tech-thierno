@extends('layouts.app')
<div class="container">



    @section('content')
        <div class="row">
            <div class="col">
                <h1>Task</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="/tarea_reports/create" class="btn btn-primary">create a new Tarea</a>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <table class="table">
                    @foreach ($tareaReports as $tareaReport)
                        <tr>
                            <td>
                                <a href="/tarea_reports/{{ $tareaReport->id }}">{{ $tareaReport->title }}</a>
                            </td>

                            <td>
                                <a class="btn btn-primary" href="/tarea_reports/{{ $tareaReport->id }}/edit"> <i
                                        class="fas fa-marker"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="/tarea_reports/{{ $tareaReport->id }}/confirmDelete"><i
                                        class="far fa-trash-alt"></i></a>
                            </td>


                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection

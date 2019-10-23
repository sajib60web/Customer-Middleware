@extends('welcome')
@section('main-content')
    <div class="album py-5 bg-light">
        <div class="container">
            <a href="{{ url('/add-student') }}" class="btn btn-success mb-5">Add Student</a>
            <a href="{{ url('/classRoutine') }}" class="btn btn-info mb-5">Class Routine</a>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10%;">#</th>
                        <th>Name</th>
                        <th style="width: 10%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $student->name }}</td>
                            <td><a href="{{ url('/edit-student/'.$student->id) }}" class="btn btn-primary">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@extends('welcome')
@section('main-content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ url('/student') }}" class="btn btn-primary mb-5">Student</a>
                    <form action="{{ url('/student-update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $student->name }}" class="form-control" id="name" placeholder="Enter Name">
                            <input type="hidden" name="id" value="{{ $student->id }}" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">time1</th>
                                    <th scope="col">time2</th>
                                    <th scope="col">time3</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($routines as $routine)
                                <tr>
                                    <td>
                                        <select name="day[]" class="form-control" id="day{{$routine->id}}">
                                            <option value="">Select Day</option>
                                            <option value="1">Saturday</option>
                                            <option value="2">Sunday</option>
                                            <option value="3">Monday</option>
                                            <option value="4">Tuesday</option>
                                            <option value="5">Wednesday</option>
                                            <option value="6">Thursday</option>
                                            <option value="7">Friday</option>
                                        </select>
                                        <script type="text/javascript">
                                            document.getElementById("day{{$routine->id}}").value = {{ $routine->day }};
                                        </script>
                                        <input type="hidden" name="routine_id[]" value="{{ $routine->id }}" class="form-control">
                                    </td>
                                    <td><input type="text" name="time1[]" value="{{ $routine->time1 }}" class="form-control"></td>
                                    <td><input type="text" name="time2[]" value="{{ $routine->time2 }}" class="form-control"></td>
                                    <td><input type="text" name="time3[]" value="{{ $routine->time3 }}" class="form-control"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

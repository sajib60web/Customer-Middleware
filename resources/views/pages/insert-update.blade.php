@extends('welcome')
@section('main-content')
    <div class="album py-5 bg-light" style="min-height: 600px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    @if (isset($student->name))
                    <form action="{{ url('/insert-update-update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $student->name }}" placeholder="Enter Name">
                            <input type="hidden" name="id" class="form-control" id="id" value="{{ $student->id }}" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="name">Image</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="file" name="student_image" class="form-control-file" accept="image/*">
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset($student->student_image) }}" alt="Image" style="height: 130px; width: 100px;">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update</button>
                    </form>
                    @endif
                    @if (isset($student->name) == null)
                        <form action="{{ url('/insert-update-insert') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Image</label>
                                <input type="file" name="student_image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Insert</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop

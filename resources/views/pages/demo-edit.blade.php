@extends('welcome')
@section('main-content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <form action="{{ url('/demo-update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}" id="name" placeholder="Enter Name">
                            <input type="hidden" name="id" class="form-control" value="{{ $data->id }}">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="checkboxOk" class="checkmark" <?php if ($data->checkboxOk == '1'){echo 'checked';}else{echo null;} ?>>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@extends('welcome')
@section('main-content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <form action="{{ url('/demo-save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                        <div class="form-check">
                            <label for="checkboxOk">Status</label>
                            <input type="checkbox" name="checkboxOk" class="checkmark" id="checkboxOk">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <table class="table table-bordered table-dark mt-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Acttion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($demos as $demo)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $demo->name }}</td>
                        <td>
                            @if($demo->checkboxOk == 1)
                                <span>Ok</span>
                            @else
                                <span>No</span>
                            @endif
                        </td>
                        <td><a href="{{ url('demo-edit/'.$demo->id) }}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@extends('welcome')
@section('main-content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Image</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($count = 1)
                    @foreach($cart as $product)
                        <tr>
                            <th scope="row">{{ $count++ }}</th>
                            <td><img src="{{ $product['photo'] }}" alt="photo" width="50" height="50"></td>
                            <td>{{ $product['price'] }}</td>
                            <td contenteditable="">{{ $product['quantity'] }}</td>
                            <td>{{ $product['total_price'] }}</td>
                            <td>Remove</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@extends('welcome')
@section('main-content')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <a href="{{ url('/student') }}" class="btn btn-primary mb-5">Student</a>
                    <form action="{{ url('/student-save') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                        <table class="table table-bordered mt-5">
                            <thead>
                                <tr>
                                    <th scope="col">Day</th>
                                    <th scope="col">time1</th>
                                    <th scope="col">time2</th>
                                    <th scope="col">time3</th>
                                    <th scope="col" style="width: 5%;">
                                        <a style="cursor: pointer;" onclick="addRow()" class="btn btn-success">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="day[]" class="form-control">
                                            <option value="">Select Day</option>
                                            <option value="1">Saturday</option>
                                            <option value="2">Sunday</option>
                                            <option value="3">Monday</option>
                                            <option value="4">Tuesday</option>
                                            <option value="5">Wednesday</option>
                                            <option value="6">Thursday</option>
                                            <option value="7">Friday</option>
                                        </select>
                                    </td>
                                    <td><input type="text" name="time1[]" class="form-control"></td>
                                    <td><input type="text" name="time2[]" class="form-control"></td>
                                    <td><input type="text" name="time3[]" class="form-control"></td>
                                    <td><a style="cursor: pointer;"  class="btn btn-danger remove"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script>
        function addRow(){
            var data = '<tr>\n' +
                '                                    <td>\n' +
                '                                        <select name="day[]" class="form-control">\n' +
                '                                            <option value="">Select Day</option>\n' +
                '                                            <option value="1">Saturday</option>\n' +
                '                                            <option value="2">Sunday</option>\n' +
                '                                            <option value="3">Monday</option>\n' +
                '                                            <option value="4">Tuesday</option>\n' +
                '                                            <option value="5">Wednesday</option>\n' +
                '                                            <option value="6">Thursday</option>\n' +
                '                                            <option value="7">Friday</option>\n' +
                '                                        </select>\n' +
                '                                    </td>\n' +
                '                                    <td><input type="text" name="time1[]" class="form-control"></td>\n' +
                '                                    <td><input type="text" name="time2[]" class="form-control"></td>\n' +
                '                                    <td><input type="text" name="time3[]" class="form-control"></td>\n' +
                '                                    <td><a style="cursor: pointer;"  class="btn btn-danger remove"><i class="fa fa-trash"></i></a></td>\n' +
                '                                </tr>';
            $("tbody").append(data);
        }

        $('.remove').live( "click", function() {
            var n = $('tbody tr').length;
            if (n == 1) {
                alert("You can not remove last one !");
            } else {
                $(this).parent().parent().remove();
            }
        });
    </script>
@stop

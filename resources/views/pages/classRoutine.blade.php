@extends('welcome')
@section('main-content')
    <style type="text/css">
        #buttonsPagination {
            float: right;
        }
        .pageButtons {
            transition: all .3s;
            border: 1px solid #ddd;
            padding: 0.5rem 0.75rem;
            text-decoration: none;
            font-size: 15px;
            cursor: auto;
            right: 0;
        }

        .pageButtons:not(.active) {
            background-color: transparent;
        }

        .active {
            z-index: 1;
            color: #fff;
            background-color: #007bff;
            border: #007bff;
            padding: 0.5rem 0.75rem;
        }

        .pageButtons:hover:not(.active) {
            background-color: #ddd;

        }
    </style>
    <div class="album py-5 bg-light">
        <div class="container">
            <a href="{{ url('/add-student') }}" class="btn btn-success mb-5">Add Student</a>
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="searchRoutine" onkeyup="myFunction()" placeholder="Search for am/pm.....">
                        </div>
                    </form>
                </div>
                <table id="myTable" class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10%;">#</th>
                        <th>Day</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($routines as $routine)
                    <tr>
                        <td style="width: 10%;">#</td>
                        <td>{{ $routine->day }}</td>
                        <td>{{ $routine->time }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        var $table = document.getElementById("myTable"),
            $n = 10,
            $rowCount = $table.rows.length,
            $firstRow = $table.rows[0].firstElementChild.tagName,
            $hasHead = ($firstRow === "TH"),
            $tr = [],
            $i, $ii, $j = ($hasHead) ? 1 : 0,
            $th = ($hasHead ? $table.rows[(0)].outerHTML : "");
        var $pageCount = Math.ceil($rowCount / $n);
        if ($pageCount > 1) {
            for ($i = $j, $ii = 0; $i < $rowCount; $i++, $ii++)
                $tr[$ii] = $table.rows[$i].outerHTML;
            $table.insertAdjacentHTML("afterend", "<div id='buttonsPagination'></div");
            sort(1);
        }

        function sort($p) {
            var $rows = $th,
                $s = (($n * $p) - $n);
            for ($i = $s; $i < ($s + $n) && $i < $tr.length; $i++)
                $rows += $tr[$i];
            $table.innerHTML = $rows;
            document.getElementById("buttonsPagination").innerHTML = pageButtons($pageCount, $p);
            document.getElementById("id" + $p).setAttribute("class", "active");
        }

        function pageButtons($pCount, $cur) {
            var $prevDis = ($cur == 1) ? "disabled" : "",
                $nextDis = ($cur == $pCount) ? "disabled" : "",
                $buttons = "<input class='pageButtons' type='button' value='Previous' onclick='sort(" + ($cur - 1) + ")' " + $prevDis + ">";
            for ($i = 1; $i <= $pCount; $i++)
                $buttons += "<input class='pageButtons' type='button' id='id" + $i + "'value='" + $i + "' onclick='sort(" + $i + ")'>";
            $buttons += "<input class='pageButtons' type='button' value='Next' onclick='sort(" + ($cur + 1) + ")' " + $nextDis + ">";
            return $buttons;
        }

        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchRoutine");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@stop


@extends('admin2.layout.index')

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Movie Management</h4>
        <a href="/addMovie"><button class="btn btn-gradient-primary mr-2">+ Add a Movie</button></a>
            <br> </br>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> Movie Name </th>
                        <th> Description </th>
                        <th> Directors </th>
                        <th> Actors </th>
                        <th> Genre </th>
                        <th> Premiere </th>
                        <th> Duration </th>
                        <th> Language </th>
                        <th> Movie Banner </th>
                        <th> Action </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Name </td>
                        <td> Description </td>
                        <td> Directors </td>
                        <td> tui thu viet o day sieu dai cho cau xem nay ^^ </td>
                        <td> Genre </td>
                        <td> Release Date </td>
                        <td> 125m </td>
                        <td> English </td>
                        <td> Banner here </td>
                        <td> 
                            <a href="/editMovie"><button type="submit" class="btn btn-gradient-primary mr-2">Edit</button></a>
                            <br></br>
                            <button class="btn btn-light">Delete</button>
                        </td>
                    </tr>
                    <!-- <tr class="table-warning">
                        <td> 2 </td>
                        <td> Messsy Adam </td>
                        <td> Flash </td>
                        <td> $245.30 </td>
                        <td> July 1, 2015 </td>
                    </tr>
                    <tr class="table-danger">
                        <td> 3 </td>
                        <td> John Richards </td>
                        <td> Premeire </td>
                        <td> $138.00 </td>
                        <td> Apr 12, 2015 </td>
                    </tr>
                    <tr class="table-success">
                        <td> 4 </td>
                        <td> Peter Meggik </td>
                        <td> After effects </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                    </tr>
                    <tr class="table-primary">
                        <td> 5 </td>
                        <td> Edward </td>
                        <td> Illustrator </td>
                        <td> $ 160.25 </td>
                        <td> May 03, 2015 </td>
                    </tr> -->
                    </tbody>
                </table>
        </div>
    </div>
@endsection

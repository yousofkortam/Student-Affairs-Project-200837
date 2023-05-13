@extends('layouts.adminLayout')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td> {{ $student->first_name }} {{ $student->last_name }} </td>
                                        <td> {{ $student->email }} </td>
                                        <td> {{ $student->phone_number }} </td>
                                        <td>
                                            <a href="" class="text text-info">Edit</a> |
                                            <a href="/admin/delete-student/{{$student->id}}" class="text text-danger" onclick="return confirm('Are you sure to delete {{ $student->first_name }} {{ $student->last_name }}')"> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection
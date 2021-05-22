@extends('layouts.admin-dashboard')

@section('title')
    Admin Page
@endsection
@section('admintitle')
    Edit schools
@endsection
@section('content')
    <div class="content">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-category">All schools list</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Address
                                </th>
                                <th>
                                    Teachers
                                </th>
                                <th>
                                    Students
                                </th>
                                <th>
                                    Website
                                </th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Delete
                                </th>

                                </thead>

                                <tbody>

                                @foreach($schools as $school)
                                    <tr>
                                        <td>
                                            {{$school->school_name}}
                                        </td>
                                        <td>
                                            {{$school->address}}
                                        </td>
                                        <td>
                                            {{ $school->teachers_number }}
                                        </td>
                                        <td>
                                            {{$school -> pupils_number}}
                                        </td>
                                        <td>
                                            {{$school -> website}}
                                        </td>
                                        <td>
                                            <a href="{{route('edit_school', $school->id)}}" class="btn btn-success">
                                                Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('delete_school', $school->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control filter-input"
                                               placeholder="Search for first name..." data-column="1"/>
                                    </td>
                                </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

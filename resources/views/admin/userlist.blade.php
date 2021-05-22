@extends('layouts.admin-dashboard')

@section('title')
    Admin Page
@endsection
@section('admintitle')
    Edit users
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
                        <h5 class="card-category">All users list</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="datatable">
                                <thead class=" text-primary">
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Is admin
                                </th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Delete
                                </th>

                                </thead>

                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            {{$user->name}}
                                        </td>
                                        <td>
                                            {{$user->email}}
                                        </td>
                                        <td>
                                            {{ $user->username }}
                                        </td>
                                        @if($user->is_admin==1)
                                            <td>
                                                Admin
                                            </td>
                                        @else
                                            <td>
                                                User
                                            </td>
                                        @endif
                                        <td>
                                            <a href="{{route('useredit', $user->id)}}" class="btn btn-success"> Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('userdelete', $user->id)}}" method="post">
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

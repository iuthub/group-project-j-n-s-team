@extends('layouts.admin-dashboard')

@section('title')
    User edit
@endsection
@section('admintitle')
    Edit users
@endsection

@section('content')


    <form action="{{route('userupdate', $data->id)}}" method="post">
        @csrf


        <div class="row align-items-center">
            <div class="col mt-4 text-center">
                <label for="name">Enter valid name</label><br>
                <input class=" @error('name') border-danger @enderror" name="name" id="name" value="{{$data->name}}"
                       style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #F3EFEF;">
                @error('name')
                <div class="text-center mt-2 m-2" style="color:red;">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>


        <div class="row align-items-center">
            <div class="col mt-4 text-center">
                <label for="email">Enter valid email</label><br>
                <input class="@error('email') border-danger @enderror" name="email" id="email" value="{{$data->email}}"
                       style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #F3EFEF;">
                @error('email')
                <div class="text-center mt-2 m-2" style="color:red;">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col mt-4 text-center">
                <label for="password">Enter valid password at least 6 characters</label><br>
                <input type="password" class="@error('password') border-danger @enderror"
                       name="password" id="password" value=""
                       style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #F3EFEF;">
                @error('password')
                <div class="text-center mt-2 m-2" style="color:red;">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>


        <div class="row align-items-center">
            <div class="col mt-4 text-center">
                <label for="password">Enter valid username</label><br>
                <input type="text" class="@error('username') border-danger @enderror"
                       name="username" id="username" value="{{$data->username}}"
                       style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #F3EFEF;">
                @error('username')
                <div class="text-center mt-2 m-2" style="color:red;">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col mt-4 text-center ">
                <label for="role">Enter role</label><br>
                <select name="role" id="role"
                        style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #F3EFEF;">
                    <option value="1"
                            style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #F3EFEF;">
                        Admin
                    </option>
                    <option value="0"
                            style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #F3EFEF;">
                        User
                    </option>
                </select>
            </div>
        </div>


        <div class="row align-items-center">
            <div class="col mt-4 text-center">
                <button class="btn-primary" type="submit"
                        style="height:7vh; width: 50%; border-radius:9px; border:1px solid black; background-color: #00f320;">
                    Save apply
                </button>
            </div>
        </div>


    </form>


@endsection

@extends('layouts.app')

@section("title")
    Reset Password
@endsection

@section('content')
    <div class="container-fluid p-0 pb-5" style="background-color: #F3EFEF;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-6 mt-5">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form action="{{url('/password-reset')}}" method="post" style="background-color: #fff; padding:20px; border-radius:10px;">
                        @csrf
                        <div class="row align-items-center mt-3">
                            <div class="col">
                                <input type="email" class="form-control @error('email') border-danger @enderror"
                                       name="email" id="email" placeholder="Email" value="{{old('email')}}" style="height: 9vh; border-radius:10px; background-color: #F3EFEF;">
                                @error('email')
                                <div class="text-center mt-2 m-2" style="color: red;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col">
                                <input type="password" class="form-control @error('password') border-danger @enderror"
                                       name="password" id="password" placeholder="New Password" style="height: 9vh; border-radius:10px; background-color: #F3EFEF;">
                                @error('password')
                                <div class="text-center mt-2 m-2" style="color: red;">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col">
                                <input type="password" class="form-control @error('password_confirmation') border-danger @enderror"
                                       id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password" style="height: 9vh; border-radius:10px; background-color: #F3EFEF;">
                                @error('password_confirmation')
                                <div class="text-red-500 mt-2 m-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4">
                            <div class="col">
                                <button class="form-control btn-primary" style="height: 7vh;" >Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('title')
    Schools
@endsection

@section('content')

    <div class="container-fluid p-0" style="background-color: rgb(236, 234, 234);">
        <div class="container " style="font-family:'Nunito', sans-serif; font-weight:700;">
            <div class="row justify-content-center ">

                <div class="col-12 col-md-8 col-lg-8 col-xl-10">
                    <div class="container mt-5"
                         style="background-color: #fff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);">

                        <div class="h2 text-center pt-3" style="font-weight: 900;">
                            {{ $school -> school_name }}
                        </div>
                        <hr>
                        <div class="content">

                            <div class="col-12 col-sm-6 col-lg-6 col-xl-6">
                                <img src="{{ asset('images/schools/'.$school->image) }}"
                                     alt="{{$school->school_name}}" class="schoolsimage">
                            </div>

                            <div class="col-12 col-sm-6 col-lg-6 col-xl-6">
                                <ul style="list-style-type: none">
                                    <li class="pb-3">
                                        <i class="fas fa-map-marker-alt fa-3x"
                                           style="color: rgb(255, 43, 43)"></i>
                                        {{$school->address}}
                                    </li>
                                    <li class="pb-3">
                                        <i class="fas fa-user-tie fa-3x"
                                           style="color:rgb(6, 176, 255);"></i>
                                        {{$school->teachers_number}} teachers
                                    </li>
                                    <li class="pb-3">
                                        <i class="fas fa-user-graduate fa-3x"
                                           style="color:rgb(173, 175, 173);"></i>
                                        {{$school->pupils_number}} pupils
                                    </li>
                                    <li class="pb-3">
                                        <i class="fab fa-chrome fa-3x"
                                           style="color:rgb(243, 135, 12);"></i>
                                        {{$school->website}}
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


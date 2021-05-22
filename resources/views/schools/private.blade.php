@extends('layouts.app')

@section('title')
Private Schools
@endsection

@section('content')

<div class="container-fluid pb-5" style="background-color: rgb(236, 234, 234);">
    <div class="container " style="font-family:'Nunito', sans-serif; font-weight:700;">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8 col-lg-8 col-xl-10">
                <div class="container mt-5" style="background-color: #fff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
                    <div class="h2 text-center pt-3" style="font-weight: 900;">
                       Private Schools
                    </div>
                    <hr>
                    <div class="content">
                        <p>
                            Private schools in Uzbekistan are actively developing. New educational institutions
                             with various biases and teaching methods appear. In most of them, students
                             spend almost all of their time. The curriculum in the morning, creative circles,
                             sports, homework - in the second
                        </p>
                        <p>
                            Despite the differences between private and public schools, the management of the
                            educational process, the control of attendance, performance and achievement
                            of children is an integral part of any educational institution.
                        </p>
                        <p>
                            Today in Tashkent there are 51 private schools. Many executives have turned to
                            Kundalik to implement the platform in their school, as some private schools are
                            ready to completely abandon paper journals.
                        </p>
                    </div>
                    <div class="h2 text-center" style="font-weight: 900;">
                        Main factors
                        <hr>
                    </div>
                    <div class="content">
                        <div class="row pt-5 pb-5">
                            {{-- First factor --}}
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-school fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num">
                                        <p class="counter">
                                            120
                                        </p>
                                        <span class="counter-text">
                                            Private Schools in Uzbekistan
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{-- Second factor --}}
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-graduation-cap fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num">
                                        <p class="counter">
                                            20000
                                        </p>
                                        <span class="counter-text">
                                            Students
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{-- Third factor --}}
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-user-tie fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num">
                                        <p class="counter">
                                            300
                                        </p>
                                        <span class="counter-text">
                                            Teachers
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-language fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num">
                                        <p class="counter">
                                            15
                                        </p>
                                        <span class="counter-text">
                                            Languages
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

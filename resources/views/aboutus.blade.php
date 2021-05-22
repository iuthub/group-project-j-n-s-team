@extends('layouts.app')

@section('title')
About us
@endsection

@section('content')

<div class="container-fluid pb-5" style="background-color: rgb(236, 234, 234);">
    <div class="container " style="font-family:'Nunito', sans-serif; font-weight:700;">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8 col-lg-8 col-xl-10">
                <div class="container mt-5" style="background-color: #fff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
                    <div class="h2 text-center pt-3" style="font-weight: 900;">
                       About us
                    </div>
                    <hr>
                    <div class="content">
                        <div class="row">
                            <div class="col-12 col-xl-3">
                                <img src="{{asset('images/profile.jpg')}}" style="width: 100%; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);" alt="aboutus" srcset="">
                            </div>
                            <div class="col-12 col-xl-9">
                                <p class="h4">
                                    This, <strong>MySchool</strong> website is built to help you with your school applications .
                                        That's all :)
                                </p>
                            </div>
                        </div>

                    <div class="h2 text-center" style="font-weight: 900;">
                        Why useful ?
                        <hr>
                    </div>
                    <div class="content">
                        <div class="row pt-5 pb-5">
                            {{-- First factor --}}
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="far fa-check-circle fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num h5">
                                        Save time <br>
                                        Apply Online
                                    </div>
                                </div>
                            </div>
                            {{-- Second factor --}}
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-book-open fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num h5">
                                        Save time <br>
                                        Download any subject
                                    </div>
                                </div>
                            </div>
                            {{-- Third factor --}}
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-info-circle fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num h5">
                                        Get information about <br>
                                        all schools in Uzbekistan
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-info-circle fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num h5">
                                        Get information about <br>
                                        skillful teachers
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

@extends('layouts.app')

@section('title')
Public Schools
@endsection

@section('content')

<div class="container-fluid pb-5" style="background-color: rgb(236, 234, 234);">
    <div class="container " style="font-family:'Nunito', sans-serif; font-weight:700;">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8 col-lg-8 col-xl-10">      
                <div class="container mt-5" style="background-color: #fff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
                    <div class="h2 text-center pt-3" style="font-weight: 900;">
                        Public Schools
                    </div>
                    <hr>
                    <div class="content">
                        <p>
                            In Uzbekistan, secondary education is divided into two stages. The first stage 
                            includes nine years of compulsory schooling with the same programs all over 
                            Uzbekistan. The second stage covers education and vocational training after 
                            nine years. It includes general secondary education and specialized secondary 
                            education. Young people receive general secondary education while staying in 
                            school for the tenth and eleventh grades. Upon successful completion, they get 
                            a Certificate of Complete Secondary Education
                        </p>
                        <p>
                            In Uzbekistan 11 years of education are compulsory and free, beginning with 
                            4 years at primary school, and followed by 2 phases of secondary education 
                            taking 5 and 2 years respectively. Primary school begins at age 6 and there 
                            is no specific leaving examination after the 4 years are complete.
                        </p>
                        <p>
                            The next 5 years are spent at general secondary school from ages 10 to 15. 
                            Following that, there is a choice of between 2 to 3 years of upper education 
                            at either general or technical vocational schools. The former provides a 
                            certificate of completed secondary education and the opportunity to enter 
                            university, the latter a diploma of specialized secondary education, through 
                            a network of secondary vocational institutions.
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
                                            9,942
                                        </p>
                                        <span class="counter-text">
                                            Schools in Uzbekistan
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
                                            6,119,440
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
                                            481,604
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
                                            7
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
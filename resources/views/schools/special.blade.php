@extends('layouts.app')

@section('title')
Special Schools
@endsection

@section('content')

<div class="container-fluid pb-5" style="background-color: rgb(236, 234, 234);">
    <div class="container " style="font-family:'Nunito', sans-serif; font-weight:700;">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8 col-lg-8 col-xl-10">      
                <div class="container mt-5" style="background-color: #fff; box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.06), 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
                    <div class="h2 text-center pt-3" style="font-weight: 900;">
                       Special Schools
                    </div>
                    <hr>
                    <div class="content">
                        <p>
                            The Decree of the President of Uzbekistan dated December 1, 2017 “On measures to 
                            fundamentally improve the system of state support for persons with disabilities” 
                            provided for the provision of preferential rights for persons with disabilities 
                            entering higher education institutions. The state waived of the equality principle 
                            for all applicants and applied measures of positive discrimination – the provision 
                            of special privileges and preferences to individual minorities on the basis of 
                            gender, race, disability and other factors.
                        </p>
                        <p>
                            Beginning with the 2018-2019 school year, an additional two-percent quota of 
                            admission to universities of the total number of admission of applicants was 
                            introduced for people with I and II disability group. The passing score for 
                            applicants with disabilities was reduced to 56.7 points (30% of the maximum 
                            possible score – 189 points) at the entrance examination, and those who scored 
                            the corresponding point entered the budget places on the basis of a state grant.
                        </p>
                        <p>
                            Most likely there were many who wished, but not all were able to score the required 
                            number of points on the entrance examinations, which may be due to their low training 
                            level. One of the requirements of the universities’ admission procedure for persons 
                            with disabilities is a school leaving certificated (based on 11th grade) or on 
                            graduating from an academic lyceum or vocational college. But in practice, the 
                            presence of a certificate does not always guarantee a high level of knowledge and 
                            the quality of secondary education.
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
                                            30
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
                                            5000
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
                                            150
                                        </p>
                                        <span class="counter-text">
                                            Teachers
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-lg-3">
                                <div class="counter-box">
                                    <i class="fas fa-atom fa-3x rounded-circle" style="color: #6a6a6b"></i>
                                    <div class="counter-num">
                                        <p class="counter">
                                            13
                                        </p>
                                        <span class="counter-text">
                                            Subjects
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
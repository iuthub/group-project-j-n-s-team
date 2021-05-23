@extends('layouts.app')

@section("title")
    Subjects
@endsection

@section('content')


    {{-- Title --}}
    <div>
        <h1 class="h3 text-center pt-3" style="color: rgb(0, 0, 0); font-family:'Comic Sans Ms'; font-weight:700;">
            {{$subjects[0] -> grade}} grade subjects
        </h1>
    </div>
    <div class="container">
        <div class="row rowsection container text-center" style="margin:0;">
            @foreach($subjects as $subject)
                <div class="col-12 col-md-6 col-lg-6 col-xl-4 pt-2">
                    <div class="card text-center columnheight "
                         style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                        {{-- card header --}}
                        <div class="card-header" style="background-color: transparent;">
                            <i class="fas fa-percentage fa-10vw visible" style="font-size:5vw;"></i>
                        </div>
                        {{-- card body --}}
                        <div class="card-body pt-1">
                            <p class="card-text">{{$subject -> name}}</p>
                            <p class="h6">
                                {{$subject->description}}
                            </p>
                        </div>
                        {{-- card footer --}}
                        <div class="card-footer">
                            <a href="{{asset("storage/subjects/{$subject -> texbook}.pdf")}}" download>
                                <button class="btn"><i class="fa fa-download"></i> Download</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

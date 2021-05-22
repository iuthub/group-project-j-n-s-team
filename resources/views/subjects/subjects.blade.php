@extends('layouts.app')

@section("title")
    Class Subjects
@endsection

@section('content')


    {{-- Title --}}
    <div>
        <h1 class="h3 text-center pt-3" style="color: rgb(0, 0, 0); font-family:'Comic Sans Ms'; font-weight:700;">
            Class Subjects
        </h1>
    </div>
    <div class="container">
        <div class="row rowsection container text-center" style="margin:0;">
            {{-- First card --}}
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
                            <p class="card-text">{{$subject->name}}</p>
                            <p class="h6">
                                {{$subject->description}}
                                The Presidential school is a public specialized educational institution,
                                whose activities are aimed at ensuring the identification and training of
                                gifted children for the training of highly qualified specialists.
                            </p>
                        </div>
                        {{-- card footer --}}
                        <div class="card-footer">
                            <a href="{{asset("storage/subjects/{$subject->textbook}.pdf")}}" download>
                                <button class="btn"><i class="fa fa-download"></i> Download</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Second card --}}
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pt-2">
                <div class="card text-center columnheight"
                     style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                    {{-- card header --}}
                    <div class="card-header" style="background-color: transparent;">
                        <i class="fas fa-language fa-10vw visible" style="font-size:5vw;"></i>
                    </div>
                    {{-- card body --}}
                    <div class="card-body pt-1">
                        <p class="card-text">Mother Tongue</p>
                        <p class="h6">
                            In Uzbekistan, secondary education is divided into two stages. The first
                            stage includes nine years of compulsory schooling with the same programs all
                            over Uzbekistan.
                        </p>
                    </div>
                    {{-- card footer --}}
                    <div class="card-footer">
                        <a href="{{asset('storage/subjects/Matematika.pdf')}}" download>
                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Third card --}}
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pt-2">
                <div class="card text-center columnheight"
                     style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                    {{-- card header --}}
                    <div class="card-header" style="background-color: transparent;">
                        <i class="fas fa-font fa-10vw visible" style="font-size:5vw;"></i>
                    </div>
                    {{-- card body --}}
                    <div class="card-body pt-1">
                        <p class="card-text">Alphabet</p>
                        <p class="h6">
                            Private schools in Uzbekistan are actively developing. New educational
                            institutions with various biases and teaching methods appear.
                        </p>
                    </div>
                    {{-- card footer --}}
                    <div class="card-footer">
                        <a href="{{asset('storage/subjects/Matematika.pdf')}}" download>
                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Fourth card --}}
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pt-2">
                <div class="card text-center columnheight"
                     style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                    {{-- card header --}}
                    <div class="card-header" style="background-color: transparent;">
                        <i class="fas fa-tree fa-10vw visible" style="font-size:5vw;"></i>
                    </div>
                    {{-- card body --}}
                    <div class="card-body pt-1">
                        <p class="card-text">Nature</p>
                        <p class="h6">
                            The vast majority of children in specialized schools in Uzbekistan are often
                            placed there for minor issues like skipping school or leaving home without
                            permission.
                        </p>
                    </div>
                    {{-- card footer --}}
                    <div class="card-footer">
                        <a href="{{asset('storage/subjects/Nature.pdf')}}" download>
                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Fifth card --}}
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pt-2">
                <div class="card text-center columnheight"
                     style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                    {{-- card header --}}
                    <div class="card-header" style="background-color: transparent;">
                        <i class="fas fa-globe-europe fa-10vw visible" style="font-size:5vw;"></i>
                    </div>
                    {{-- card body --}}
                    <div class="card-body pt-1">
                        <p class="card-text">English</p>
                        <p class="h6">
                            The vast majority of children in specialized schools in Uzbekistan are often
                            placed there for minor issues like skipping school or leaving home without
                            permission.
                        </p>
                    </div>
                    {{-- card footer --}}
                    <div class="card-footer">
                        <a href="{{asset('storage/subjects/Matematika.pdf')}}" download>
                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                        </a>
                    </div>
                </div>
            </div>
            {{-- Sixth card --}}
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 pt-2">
                <div class="card text-center columnheight"
                     style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                    {{-- card header --}}
                    <div class="card-header" style="background-color: transparent;">
                        <i class="fas fa-american-sign-language-interpreting fa-10vw visible"
                           style="font-size:5vw;"></i>
                    </div>
                    {{-- card body --}}
                    <div class="card-body pt-1">
                        <p class="card-text">Moral subject</p>
                        <p class="h6">
                            The vast majority of children in specialized schools in Uzbekistan are often
                            placed there for minor issues like skipping school or leaving home without
                            permission.
                        </p>
                    </div>
                    {{-- card footer --}}
                    <div class="card-footer">
                        <a href="{{asset('storage/subjects/Matematika.pdf')}}" download>
                            <button class="btn"><i class="fa fa-download"></i> Download</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

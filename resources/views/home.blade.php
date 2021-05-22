@extends('layouts.app')

@section('title')
    MySchool
@endsection

@section('content')
    {{-- Intro section --}}
    <div class="container-fluid p-0">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                {{-- First carousel item --}}

                <div class="carousel-item active" data-bs-interval="2000">
                    <div class="carousel-title1">
                        <span class="titleupper">
                            <span class="color1">Empowering </span>students from
                            <span class="color2"> small age towards vision </span>
                        </span>
                    </div>
                    {{-- carousel image --}}
                    <img class="d-block w-100" src="{{asset('images/slider1-bg.png')}}" alt="First slide">
                </div>

                {{-- Second carousel item --}}
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="carousel-title2">
                        <span class="titleupper">
                            <span class="color1">'MySchool' </span><br>
                            <span class="color2"> Creative Laerning </span>
                        </span>
                    </div>
                    {{-- carousel image --}}
                    <img class="d-block w-100" src="{{asset('images/slider2-bg.png')}}" alt="Second slide">
                </div>

                {{-- Third carousel item --}}
                <div class="carousel-item">
                    <div class="carousel-title2">
                        <span class="titleupper">
                            <span class="color1">Practical teaching </span>
                            <span class="operators">&amp;</span>
                            <span class="color3"> Social Development</span>
                        </span>
                    </div>
                    {{-- carousel image --}}
                    <img class="d-block w-100" src="{{asset('images/slider3-bg.png')}}" alt="Third slide">
                </div>
            </div>
        </div>
    </div>

    {{-- Section title  --}}
    <div class="container">
        <div class="row" style="margin-top:-5vw; padding-bottom:5vw; padding-top:7vw; background-color: rgb(255, 254, 254); z-index:1;
        font-family:'Nunito', sans-serif; font-weight:600;">
            {{-- Beginning of cards --}}
            {{-- First card --}}
            <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-3 pt-2">
                <div class="card text-center columnwidth hovercard"
                     style="background-color:#ffffff; border-radius:10px;">
                    <div class="card-header pt-5" style="background-color: transparent;">
                        <i class="fas fa-user-friends fa-4x " style="color:hsl(29, 100%, 52%);"></i>
                    </div>

                    <div class="card-body">
                        <p class="card-text">Our team</p>
                    </div>
                </div>
            </div>

            {{-- Second card --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 pt-2">
                <div class="card text-center columnwidth hovercard"
                     style="background-color:#ffffff; border-radius:10px;">
                    <div class="card-header pt-5" style="background-color: transparent;">
                        <i class="fas fa-handshake fa-4x" style="color:hsl(221, 98%, 53%);"></i>
                    </div>

                    <div class="card-body">
                        <p class="card-text">Kids Enrollment</p>
                    </div>
                </div>
            </div>

            {{-- Third card --}}
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 pt-2">
                <div class="card text-center columnwidth hovercard"
                     style="background-color:#ffffff; border-radius:10px;">
                    <div class="card-header pt-5" style="background-color: transparent;">
                        <i class="fas fa-users fa-4x" style="color:hsl(54, 98%, 50%);"></i>
                    </div>

                    <div class="card-body">
                        <p class="card-text">Alumni Club</p>
                    </div>
                </div>
            </div>

            {{-- Fourth card --}}
            <div class="col-12 col-md-6 col-sm-6 col-lg-6 col-xl-3 pt-2">
                <div class="card text-center columnwidth hovercard" style="border-radius:10px;">
                    <div class="card-header pt-5" style="background-color: transparent;">
                        <i class="fas fa-exclamation fa-4x" style="color:hsl(123, 93%, 49%);"></i>
                    </div>

                    <div class="card-body">
                        <p class="card-text">Best Amenities</p>
                    </div>
                </div>
            </div>
            {{-- Ending of cards --}}
        </div>
    </div>

    {{-- Section schools --}}
    <div class="container-fluid p-0" style="color: white; font-family:'Nunito', sans-serif; font-weight:700;">
        <div class="paralax-mf bg-image" style="background-image: url('public/images/title.jpg');">
            <div class="overlay-mf"></div>

            {{-- Title --}}
            <div class="relativecontainer">
                <h1 class="h3 text-center pt-3">
                    Schools in Uzbekistan
                </h1>

                <p class="h5 pt-2 pl-5 pr-5">
                    General (basic) education is provided in several types of basic education schools: schools with only
                    primary education (Grades I-IV); schools which offer partial (Grades I-IX) and complete (Grades
                    I-XI)
                    secondary education; adult education centres, and specialized schools and boarding schools for
                    students
                    with disabilities. General education is also available in new types of institutions
                    (gymnasia and lyceums), some of them attached to higher education institutions.
                </p>
            </div>
            {{-- Cards --}}
            <div class="row pb-5" style="margin:0;">
                {{-- First card --}}
                <div class="col-12 col-md-6 col-lg-6 col-xl-3 pt-2">
                    <div class="card text-center hovercard"
                         style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                        {{-- card header --}}
                        <div class="card-header" style="background-color: transparent;">
                            <i class="fas fa-school fa-10vw" style="font-size:5vw;"></i>
                        </div>
                        {{-- card body --}}
                        <div class="card-body pt-1">
                            <p class="card-text">PRESIDENT SCHOOLS</p>
                            <p class="h6">
                                The Presidential school is a public specialized educational institution,
                                whose activities are aimed at ensuring the identification and training of
                                gifted children for the training of highly qualified specialists.
                            </p>
                        </div>
                        {{-- card footer --}}
                        <div class="card-footer">
                            <a href="{{route('president')}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                {{-- Second card --}}
                <div class="col-12 col-md-6 col-lg-6 col-xl-3 pt-2">
                    <div class="card text-center hovercard"
                         style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                        {{-- card header --}}
                        <div class="card-header" style="background-color: transparent;">
                            <i class="fas fa-school fa-10vw" style="font-size:5vw;"></i>
                        </div>
                        {{-- card body --}}
                        <div class="card-body pt-1">
                            <p class="card-text">PUBLIC SCHOOLS</p>
                            <p class="h6">
                                In Uzbekistan, secondary education is divided into two stages. The first
                                stage includes nine years of compulsory schooling with the same programs all
                                over Uzbekistan.
                            </p>
                        </div>
                        {{-- card footer --}}
                        <div class="card-footer">
                            <a href="{{route('public')}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                {{-- Third card --}}
                <div class="col-12 col-md-6 col-lg-6 col-xl-3 pt-2">
                    <div class="card text-center hovercard"
                         style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                        {{-- card header --}}
                        <div class="card-header" style="background-color: transparent;">
                            <i class="fas fa-school fa-10vw" style="font-size:5vw;"></i>
                        </div>
                        {{-- card body --}}
                        <div class="card-body pt-1">
                            <p class="card-text">PRIVATE SCHOOLS</p>
                            <p class="h6">
                                Private schools in Uzbekistan are actively developing. New educational
                                institutions with various biases and teaching methods appear.
                            </p>
                        </div>
                        {{-- card footer --}}
                        <div class="card-footer">
                            <a href="{{route('private')}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                {{-- Fourth card --}}
                <div class="col-12 col-md-6 col-lg-6 col-xl-3 pt-2">
                    <div class="card text-center hovercard"
                         style="border-radius:10px; background-color: #2c2d2e; color:rgb(255, 255, 255);">
                        {{-- card header --}}
                        <div class="card-header" style="background-color: transparent;">
                            <i class="fas fa-school fa-10vw" style="font-size:5vw;"></i>
                        </div>
                        {{-- card body --}}
                        <div class="card-body pt-1">
                            <p class="card-text">SPECIAL SCHOOLS</p>
                            <p class="h6">
                                The vast majority of children in specialized schools in Uzbekistan are often
                                placed there for minor issues like skipping school or leaving home without
                                permission.
                            </p>
                        </div>
                        {{-- card footer --}}
                        <div class="card-footer">
                            <a href="{{route('special')}}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                {{-- Ending cards --}}
            </div>
        </div>
    </div>

    @guest()
        {{-- Section Apply Online --}}
        <div class="container-fluid p-0 mb-5" style="color: white; font-family:'Nunito', sans-serif; font-weight:700;">

            {{-- Title --}}
            <div>
                <h1 class="h2 text-center pt-4" style="color: #000; font-weight:900;">
                    Online Apply
                </h1>
            </div>

            {{-- Body content --}}
            <div class="container">
                <div class="row " style="padding-top: 3vw; color: #000;">
                    <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="row">
                            <div class="col-10 col-md-12 col-lg-12 col-xl-12 text-center">
                                <p class="responsivetitle">
                                    Why Our Schools are the Right Fit for Your Child?
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-10 col-md-12 col-lg-12 col-xl-12 text-center">
                                <p class="responsivefont">
                                    Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                    nulla
                                    ut metus varius laoreet.
                                </p>
                            </div>
                        </div>

                        <div class="card text-center mt-3" style=" height:15%; border-radius:10px;">
                            <div class="card-body pt-2">
                                <a href="{{route('register')}}"><p class="card-text"><i class="fas fa-edit fa-2x"></i>
                                        Apply
                                        Now</p></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 col-xl-6 pl-5 mt-2">
                        <a href="{{route('register')}}"><img src="{{asset('images/applynow.jpg')}}"
                                                             class="w-75 rounded-circle apply-img" alt="apllynow"></a>

                    </div>
                </div>
            </div>
        </div>
    @endguest

    {{-- Section counter --}}
    <div class="container pb-5" style="font-family:'Nunito', sans-serif; font-weight:700;">
        {{-- Title --}}
        <h1 class="h3 text-center pt-3" style="font-weight: 600;">
            In Uzbekistan
        </h1>

        <div class="row pt-5">
            {{-- First result --}}
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box">
                    <i class="fas fa-school fa-3x rounded-circle" style="color: #6a6a6b"></i>
                    <div class="counter-num">
                        <p class="counter">
                            9,700
                        </p>
                        <span class="counter-text">
                        Schools in Uzbekistan
                    </span>
                    </div>
                </div>
            </div>

            {{-- Second result --}}
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <i class="fas fa-chalkboard-teacher fa-3x rounded-circle" style="color: #6a6a6b"></i>
                    <div class="counter-num">
                        <p class="counter">
                            15,000
                        </p>
                        <span class="counter-text">
                        Qualified Teachers
                    </span>
                    </div>
                </div>
            </div>

            {{-- Third result --}}
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <i class="fas fa-user-graduate fa-3x rounded-circle" style="color: #6a6a6b"></i>
                    <div class="counter-num">
                        <p class="counter">
                            1,000,000
                        </p>
                        <span class="counter-text">
                            Scholar Pupils
                        </span>
                    </div>
                </div>
            </div>

            {{-- Fourth result --}}
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <i class="fas fa-check fa-3x rounded-circle" style="color: #6a6a6b"></i>
                    <div class="counter-num">
                        <p class="counter">
                            2,000
                        </p>
                        <span class="counter-text">
                            Applies
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Contact Us --}}
    <div class="container-fluid p-0" style="font-family:'Nunito', sans-serif; font-weight:700;">
        <div class="paralax-mf bg-image" style="background-image: url('public/images/footer.png')">
            <div class="overlay-mf"></div>
            {{-- Send Feedback --}}
            <div class="relativecontainer">
                <h1 class="h2 text-center pt-4" style="color: rgb(245, 240, 240);font-weight:700;">
                    Contact us
                </h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full" style="border-radius:10px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class=" h5 title-left">
                                                Send Feedback
                                            </h5>
                                        </div>
                                        <div>
                                            <div id="sendfeedback">Your Feedback has been sent. Thank you!</div>
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control" id="name"
                                                               placeholder="Your Name" data-rule="minlen:4"
                                                               data-msg="Please enter at least 4 chars"/>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                               placeholder="Your Email" data-rule="email"
                                                               data-msg="Please enter a valid email"/>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                               id="subject" placeholder="Subject" data-rule="minlen:4"
                                                               data-msg="Please enter at least 8 chars of subject"/>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"
                                                                  data-rule="required"
                                                                  data-msg="Please write something for us"
                                                                  placeholder="Message"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-success">Send Message</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    {{-- Get in Touch --}}
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Get in Touch
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <ul class="list-ico">
                                                <li><span class="ion-ios-location"></span> Tashkent, Uzbekistan</li>
                                                <li><span class="ion-ios-telephone"></span> +998 99 999 99 99</li>
                                                <li><span class="ion-email"></span> <span class="br"
                                                                                          style="word-break: break-all;">myschool@gmail.com</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="" target="_blank"><span class="ico-circle"><i
                                                                class="fab fa-facebook-f"></i> myschool</span></a></li>
                                                <li><a href="" target="_blank"><span class="ico-circle"><i
                                                                class="fab fa-instagram"></i> myschool</span></a></li>
                                                <li><a href=""><span class="ico-circle"><i class="fab fa-telegram"></i> myschool</span></a>
                                                </li>
                                                <li><a href="" target="_blank"><span class="ico-circle"
                                                                                     style="word-break: break-all;"><i
                                                                class="far fa-envelope-open"></i> myschool@gmail.com</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="copyright-box">
                                <p class="copyright">&copy;<span class="copyright1">Copyright 2020 </span> <strong>MySchoolTeam</strong>.
                                    <span class="copyright1">All Rights Reserved</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection

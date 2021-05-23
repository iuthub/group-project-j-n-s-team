@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')
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

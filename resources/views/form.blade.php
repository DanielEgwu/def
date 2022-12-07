@extends('layouts.app')
@section('content')
    <link href="{{ asset('frontend/assets/css/form.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Register Website</li>
                </ol>
                <h2>Register Website</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="row justify-content-center mt-0">
                    <div class="col-12 col-sm-9 col-md-7 col-lg-12 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h2><strong>Sign Up Your User Account</strong></h2>
                            <p>Fill all form field to go to next step</p>
                            <div class="row">
                                <div class="col-md-12 mx-0">
                                    <form id="msform" action="{{route('subscribe')}}" method="post">
                                        @csrf
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active" id="website_details"><strong>Website Details</strong></li>
                                            <li id="hosting_details"><strong>Hosting Details</strong></li>
                                            {{-- <li id="payment"><strong>Payment and Subscription Plan</strong></li> --}}
                                        </ul>

                                        <fieldset>
                                            <div class="form-card">
                                                {{-- <h2 class="fs-title">Account Information</h2> --}}
                                                <input type="text" name="fname" class="form-control" placeholder="First Name" />
                                                <input type="text" name="lname" class="form-control" placeholder="Last Name" />
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                                <textarea class="form-control" rows="3" name="comment" placeholder="Textarea"></textarea>
                                            </div>
                                                <input type="button" name="next" class="next action-button"
                                                value="Save and Continue" />
                                        </fieldset>
                                        <fieldset>
                                            <div class="form-card">
                                                {{-- <h2 class="fs-title">Personal Information</h2> --}}
                                                <input type="date" name="address" class="form-control" placeholder="Date of Birth" />
                                                <input type="text" name="country" class="form-control" placeholder="Last Name" />
                                                <input type="number" name="phone" class="form-control" placeholder="Contact No." />
                                                <input type="file" name="image" class="form-control" placeholder="Image." />
                                                <select class="list-dt" name="range" aria-label="Default select example" style="font-family: montserrat;color: #2C3E50; font-size: 16px; letter-spacing: 1px;">
                                                    <option selected>Choose your Option</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                  </select>
                                            </div>

                                            <input type="button" name="previous" class="previous action-button-previous"
                                                value="Previous" />
                                            <input type="submit" name="next" class="next action-button"
                                                value="Save and Continue" />
                                        </fieldset>
                                    </form>
                                        {{-- <fieldset>
                                            <div class="form-card">
                                                <section id="pricing" class="pricing">

                                                    <div class="container" data-aos="fade-up">
                                                        <div class="row gy-4" data-aos="fade-left">
                                                            <div class="col-lg-3 col-md-6" data-aos="zoom-in"
                                                                data-aos-delay="100">
                                                                <div class="box">
                                                                    <h3 style="color: #07d5c0;">Free Plan</h3>
                                                                    <div class="price"><sup>$</sup>0<span> / mo</span>
                                                                    </div>
                                                                    <ul>
                                                                        <li>Aida dere</li>
                                                                        <li>Nec feugiat nisl</li>
                                                                        <li>Nulla at volutpat dola</li>
                                                                        <li class="na">Pharetra massa</li>
                                                                        <li class="na">Massa ultricies mi</li>
                                                                    </ul>
                                                                    <a href="#" class="btn-buy">Buy Now</a>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3 col-md-6" data-aos="zoom-in"
                                                                data-aos-delay="200">
                                                                <div class="box">
                                                                    <span class="featured">Featured</span>
                                                                    <h3 style="color: #65c600;">Starter Plan</h3>
                                                                    <div class="price"><sup>$</sup>19<span> / mo</span>
                                                                    </div>
                                                                    <ul>
                                                                        <li>Aida dere</li>
                                                                        <li>Nec feugiat nisl</li>
                                                                        <li>Nulla at volutpat dola</li>
                                                                        <li>Pharetra massa</li>
                                                                        <li class="na">Massa ultricies mi</li>
                                                                    </ul>
                                                                    <a href="#" class="btn-buy">Buy Now</a>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3 col-md-6" data-aos="zoom-in"
                                                                data-aos-delay="300">
                                                                <div class="box">
                                                                    <h3 style="color: #ff901c;">Business Plan</h3>
                                                                    <div class="price"><sup>$</sup>29<span> / mo</span>
                                                                    </div>
                                                                    <ul>
                                                                        <li>Aida dere</li>
                                                                        <li>Nec feugiat nisl</li>
                                                                        <li>Nulla at volutpat dola</li>
                                                                        <li>Pharetra massa</li>
                                                                        <li>Massa ultricies mi</li>
                                                                    </ul>
                                                                    <a href="#" class="btn-buy">Buy Now</a>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-3 col-md-6" data-aos="zoom-in"
                                                                data-aos-delay="400">
                                                                <div class="box">
                                                                    <h3 style="color: #ff0071;">Ultimate Plan</h3>
                                                                    <div class="price"><sup>$</sup>49<span> / mo</span>
                                                                    </div>
                                                                    <ul>
                                                                        <li>Aida dere</li>
                                                                        <li>Nec feugiat nisl</li>
                                                                        <li>Nulla at volutpat dola</li>
                                                                        <li>Pharetra massa</li>
                                                                        <li>Massa ultricies mi</li>
                                                                    </ul>
                                                                    <a href="#" class="btn-buy">Buy Now</a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </section>
                                            </div>
                                            <input type="button" name="previous" class="previous action-button-previous"
                                                value="Previous" />
                                            <input type="submit" class="next confirm-button" value="Confirm" />
                                        </fieldset> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });
    </script>
@endsection

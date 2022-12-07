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
                    <li>Subscription Plan</li>
                </ol>
                <h2>Subscription Plan</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="row justify-content-center mt-0">
                    <div class="col-12 col-sm-9 col-md-7 col-lg-12 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            {{-- <h2><strong>Sign Up Your User Account</strong></h2>
                            <p>Fill all form field to go to next step</p> --}}
                            <div class="row">
                                <div class="col-md-12 mx-0">
                                    <form id="msform" action="{{route('details')}}" method="post">
                                        @csrf
                                        <!-- progressbar -->
                                        <ul id="progressbar" style="margin-left: 40%">
                                            <li id="payment" class="active"><strong>Payment and Subscription Plan</strong></li>
                                        </ul>
                                        <fieldset>
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
                                            <input type="submit" class="next confirm-button" value="Confirm" />
                                        </fieldset>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


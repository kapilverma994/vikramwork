@extends('frontend.layout')

@section('content')
@section('breadcum-title', ' Contact us')
@section('current_page', ' Contact')
<div class="contact-area pb-100px pt-100px">
        <div class="container">
          
            <div class="custom-row-2 row">
                <div class="col-lg-4 col-md-5 mb-lm-60px col-sm-12 col-xs-12 w-sm-100">
                    <div class="contact-info-wrap">
                        <h2 class="title" data-aos="fade-up" data-aos-delay="200">Contact Info</h2>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Phone:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="tel:+012345678102">+012 345 678 102</a></p>
                                <p><a href="tel:+012345678102">+012 345 678 102</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Email:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p><a href="mailto://urname@email.com">urname@email.com</a></p>
                                <p><a href="mailto://urwebsitenaem.com">urwebsitenaem.com</a></p>
                            </div>
                        </div>
                        <div class="single-contact-info" data-aos="fade-up" data-aos-delay="200">
                            <div class="contact-info-inner">
                                <span class="sub-title">Address:</span>
                            </div>
                            <div class="contact-info-dec">
                                <p>Address goes here,</p>
                                <p>street, Crossroad 123.</p>
                            </div>
                        </div>
                        <div class="contact-social">
                            <h3 class="title" data-aos="fade-up" data-aos-delay="200">Follow Us</h3>
                            <div class="social-info" data-aos="fade-up" data-aos-delay="200">
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-social-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a class="m-0" href="#"><i class="icon-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
                    <div class="contact-form">
   @include('frontend.msg')
                        <div class="contact-title mb-30">
                            <h2 class="title" data-aos="fade-up" data-aos-delay="200">Get In Touch</h2>
                        </div>

                        <form class="contact-form-style"  action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="200">
                                    <input name="name" placeholder="Name*" type="text">
                                    <span class="text-danger">
                                         @error('name')
                                        {{$message}}
                                    @enderror
                                    </span>
                              
                                </div>
                                <div class="col-lg-6 mb-3" data-aos="fade-up" data-aos-delay="200">
                                    <input name="email" placeholder="Email*" type="email">
                                         <span class="text-danger">
                                         @error('email')
                                        {{$message}}
                                    @enderror
                                    </span>
                                </div>
                                <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                                    <input name="subject" placeholder="Subject*" type="text">
                                         <span class="text-danger">
                                         @error('subject')
                                        {{$message}}
                                    @enderror
                                    </span>
                                </div>
                                <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                                    <textarea name="message" placeholder="Your Message*"></textarea>
                                         <span class="text-danger">
                                         @error('message')
                                        {{$message}}
                                    @enderror
                                    </span>
                                    <div class="form-group"> 
   <button class="btn btn-primary btn-hover-dark mt-4" data-aos="fade-up" data-aos-delay="200" type="submit">SEND</button>
                                    </div>
                                 
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
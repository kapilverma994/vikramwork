@extends('frontend.layout.master')
@section('content')
<section class="section bg_white">
            <div class="container">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-7 col-12 aos-init aos-animate" data-aos="fade-up">
                        <img src="assets/images/inner/profile/responsibility.png" alt="responsibility images">
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="about_payment_content aos-init aos-animate" data-aos="fade-up">
                            <h6 class="spcl_heading font-r mb-4">Responsibility</h6>
                            <h3>Derive meals that anger pleasure to would of a</h3>
                            <p class="mb-md-5 mb-4">
                                Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit
                                amet mauris orbi accumsan.
                            </p>

                            <a href="#" class="btn btn_outline_primary">CONSULT TODAY </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@include('frontend.includes.clients')
  @include('frontend.includes.serve')
   @include('frontend.includes.contact')
@endsection
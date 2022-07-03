@extends('frontend.layout.master')
@section('content')
<section class="section contact-form gray-scale">
        <div class="container">
      
                    <div class="row">
                 
                        <div class="col-md-5 mb-5 mb-md-0">
                            <form class="form" id="contact-form" method="post">
                                <div class="bg_white p-5">
                               
                                   <h3 class="mb-4">   Get In Touch</h3>

                                        <div class="col-12">
                                            <div class="mb-4">
                                                <input class="form-control" type="text" name="name" placeholder=" Your Name" required="required">
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <div class="mb-4">
                                                <input class="form-control" type="number" name="name" placeholder="Your Phone Number" required="required">
                                            </div>
                                        </div>
                                   
                              
                                        <div class="col-12">
                                            <div class="mb-4">
                                                <input class="form-control" type="email" name="email" placeholder="Your Email ID" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-4">


                                                <select class="form-control form-select" aria-label="Default select example">
                                                    <option value="Service Sector" selected=""> Service Sector</option>
                                                    <option value="Service Sector"> Service Sector</option>
                                                    <option value="Service Sector"> Service Sector</option>

                                                </select>
                                         
                                             
                                            </div>
                                        </div>
                                
                                    <div class="mb-4">
                                        <textarea class="form-control" rows="3" name="message" id="message" placeholder="Brief description of your legal issue" required="required"></textarea>
                                    </div>
                                    <button class="btn btn_primary" type="submit">SUBMIT</button>
                                </div>
                            </form>
                        </div>
             
            </div>
        </div>
    </section>
    <section class="contact_info section">

    <div class="container">
        <div class="row gx-0">
            <div class="col-md-4 col-sm-6">
                <div class="info_contacts">

                    <i class="fa-solid fa-phone"></i> <span class="primary_color"> PHONE</span>

                   <p class="mt-4">  +1 (234) 567-89-00</p>

                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="info_contacts">

                    <i class="fa-solid fa-envelope"></i> <span class="primary_color"> EMAIL</span>

                   <p class="mt-4">  info@agency.com</p>

                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="info_contacts">

                    <i class="fa-solid fa-location-dot"></i> <span class="primary_color"> ADDRESS</span>

                   <p class="mt-4"> 2247 Lunetta Street, TX 76301</p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
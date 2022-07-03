@extends('frontend.layout.master')
@section('content')
    <!-- =====  about section ===== -->
    <section class="about_payment section">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="process-section-img" data-aos="zoom-in">
                        <img src="assets/images/info.png" alt="about images" />
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about_payment_content" data-aos="fade-up">
                        <h6 class="spcl_heading font-r mb-4">Our History</h6>
                        <h3 class="primary_color">Chicago Personal Injury Attorneys The Horwitz Law Group</h3>
                        <p class=" mb-4">
                            If you have been injured because someone else was careless or negligent, you may have a
                            right to receive financial compensation for the damages you have suffered. Obtaining fair
                            compensation for damages is not an easy process. You need a dedicated Chicago personal
                            injury lawyer to fight for your rights. The lawyers of The Horwitz Law Group will stand up
                            and fight for you.


                        </p>

                        <p>A Chicago personal injury lawyer from The Horwitz Law Group has the experience and ability to
                            effectively litigate your car and truck accident case in any Illinois court. Our Chicago
                            injury attorneys will work hard to get you the compensation you deserve. You do not have to
                            pay fees or expenses unless we win your claim. Led by our founder, attorney Mark J. Horwitz,
                            our entire legal team is dedicated to helping clients obtain full and fair compensation for
                            their pain and suffering, medical and rehabilitation expenses, lost wages or income,
                            property damage and other losses. </p>
                        <a href="#" class="btn btn_outline_primary">CONTACT US </a>
                        <img src="assets/images/signature.png" alt="singnature" class="d-block mt-md-5 mt-3" />
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- =====  serve section ===== -->
   @include('frontend.includes.serve')

    <!-- =====  team section ===== -->

    <section class="section team-section gray-scale">
        <div class="container">
            <div class="section-header mb-4 mb-md-5 text-center" data-aos="fade-up">
                <div class="section_header_line">
                    <h2>Meet The Legal Team</h2>

                    <span class="line_heading"></span>

                </div>

                <p>All A&A partners are acknowledged leaders in their respective fields. They along with all attorneys,
                    <br>have specialized knowledge of both the legal framework as well as the specific business</p>
            </div>

            <div class="row text-center" data-aos="fade-up">


                <div class="col-md-3 col-sm-6">
                    <div class="team_area">
                        <div class="team_img">
                            <img src="assets/images/inner/profile/team1.png" alt="team 1">
                        </div>

                        <h4>Devil Roy Barman</h4>
                        <p>Managing Partner</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team_area">
                        <div class="team_img">
                            <img src="assets/images/inner/profile/team2.png" alt="team 2">
                        </div>

                        <h4>Devil Roy Barman</h4>
                        <p>Managing Partner</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team_area">
                        <div class="team_img">
                            <img src="assets/images/inner/profile/team3.png" alt="team 3">
                        </div>

                        <h4>Lindsey A. Seeskin</h4>
                        <p>Associate Attorney</p>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team_area">
                        <div class="team_img">
                            <img src="assets/images/inner/profile/team4.png" alt="team 4">
                        </div>

                        <h4>Krystyna A. Kudlata</h4>
                        <p>Associate Attorney</p>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- =====  info section ===== -->
    <section class=" section bg_white">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-7 col-12" data-aos="fade-up">
                
                        <img src="assets/images/inner/profile/responsibility.png" alt="responsibility images" >
                   
                </div>
                <div class="col-lg-5 col-12">
                    <div class="about_payment_content" data-aos="fade-up">
                        <h6 class="spcl_heading font-r mb-4"> Responsibility</h6>
                        <h3>Derive meals that anger pleasure to would of a</h3>
                        <p class=" mb-md-5 mb-4 ">
                            Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris orbi accumsan.


                        </p>

                        <a href="#" class="btn btn_outline_primary">CONSULT TODAY  </a>
               
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====  form section ===== -->
    @include('frontend.includes.contact')
    @include('frontend.includes.achievment')
@endsection
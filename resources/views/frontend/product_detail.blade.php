@extends('frontend.layout')
@section('content')
@section('breadcum-title', 'Product Detail')
@section('current_page', ' Shop')
@section('title','Product Detail')


     <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-049104d3a6170f29e" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide zoom-image-hover swiper-slide-active" role="group" aria-label="1 / 5" style="width: 526px; position: relative; overflow: hidden;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            <img role="presentation" alt="" src="{{asset('uploads/product/'.$data->image)}}" class="zoomImg" style="position: absolute; top: -29.4071px; left: -159.139px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none; max-height: none;"></div>
                            <div class="swiper-slide zoom-image-hover swiper-slide-next" role="group" aria-label="2 / 5" style="width: 526px; position: relative; overflow: hidden;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            <img role="presentation" alt="" src="{{asset('uploads/product/'.$data->image)}}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none; max-height: none;"></div>
                            <div class="swiper-slide zoom-image-hover" role="group" aria-label="3 / 5" style="width: 526px; position: relative; overflow: hidden;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            <img role="presentation" alt="" src="{{asset('uploads/product/'.$data->image)}}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none; max-height: none;"></div>
                            <div class="swiper-slide zoom-image-hover" role="group" aria-label="4 / 5" style="width: 526px; position: relative; overflow: hidden;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            <img role="presentation" alt="" src="{{asset('uploads/product/'.$data->image)}}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none; max-height: none;"></div>
                            <div class="swiper-slide zoom-image-hover" role="group" aria-label="5 / 5" style="width: 526px; position: relative; overflow: hidden;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            <img role="presentation" alt="" src="{{asset('uploads/product/'.$data->image)}}" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 800px; height: 800px; border: none; max-width: none; max-height: none;"></div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="swiper-container zoom-thumbs slider-nav-style-1 small-nav mt-15px mb-15px swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                        <div class="swiper-wrapper" id="swiper-wrapper-ecc4919de6ef2a9c" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1 / 5" style="width: 121.25px; margin-right: 10px;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            </div>
                            <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="2 / 5" style="width: 121.25px; margin-right: 10px;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            </div>
                            <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 5" style="width: 121.25px; margin-right: 10px;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            </div>
                            <div class="swiper-slide swiper-slide-visible" role="group" aria-label="4 / 5" style="width: 121.25px; margin-right: 10px;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="5 / 5" style="width: 121.25px; margin-right: 10px;">
                                <img class="img-responsive m-auto" src="{{asset('uploads/product/'.$data->image)}}" alt="">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-049104d3a6170f29e" aria-disabled="false"></div>
                            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-049104d3a6170f29e" aria-disabled="true"></div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
                <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content">
                        <h2>{{$data->name}}</h2>
                        <p class="reference">Reference:<span> demo_17</span></p>
                        <div class="pro-details-rating-wrap">
                            <div class="rating-product">
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                                <i class="ion-android-star"></i>
                            </div>
               
                        </div>
                        <div class="pricing-meta">
                            <ul>
                                <li class="old-price not-cut">Rs {{$data->price}} Meter</li>
                            </ul>
                        </div>
                        <p class="quickview-para">{{$data->description}}</p>
                        <div class="pro-details-quality">
                      
                            <div class="pro-details-cart">
                                <button class="add-cart btn btn-primary btn-hover-primary ml-4" value="{{$data->id}}" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquire Now</button>
                            </div>
                        </div>
                       
                        <div class="pro-details-social-info">
                            <span>Share</span>
                            <div class="social-info">
                                <ul class="d-flex">
                                    <li>
                                        <a href="#"><i class="ion-social-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-google"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="ion-social-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-details-policy">
                            <ul>
                                <li><img src="assets/images/icons/policy.png" alt=""><span>Security Policy (Edit With
                                        Customer Reassurance Module)</span></li>
                                <li><img src="assets/images/icons/policy-2.png" alt=""><span>Delivery Policy (Edit
                                        With Customer Reassurance Module)</span></li>
                                <li><img src="assets/images/icons/policy-3.png" alt=""><span>Return Policy (Edit With
                                        Customer Reassurance Module)</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
<div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="description-review-wrapper">
                <div class="description-review-topbar nav">
                    <a data-bs-toggle="tab" class="active" href="#des-details1">Description</a>
                    {{-- <a class="active" data-bs-toggle="tab" href="#des-details2">Product Details</a> --}}
              
                </div>
                <div class="tab-content description-review-bottom">
                    <div id="des-details2" class="tab-pane active">
                        <div class="product-anotherinfo-wrapper">
                           <div class="product-description-wrapper">
                            <p>{{$data->name}}
                            </p>
                            <p>
                                {{$data->description}}
                            </p>
                        </div>
                        </div>
                    </div>
                    {{-- <div id="des-details1" class="tab-pane">
                        <div class="product-description-wrapper">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            </p>
                            <p>
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat. Duis aute irure dolor in reprehend in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            </p>
                        </div>
                    </div> --}}
                
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="exampleModal" tabindex="-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">


                <h5 class="modal-title">Enquiry Cart</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
              </div>
              <div class="modal-body">
                <div class="contact-form">
           
                  <form class="contact-form-style" action="{{route('product.enquiry')}}"  method="post">
                    @csrf
                      <div class="row">
                          <input type="hidden" name="product_id" id="product_id" value="">
                          <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                              <input name="name" id="name" placeholder="Name*" type="text">
                          </div>
                          <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                              <input name="email" id="email" placeholder="Email*" type="email">
                          </div>
                          <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                            <input name="number" placeholder="Number*" type="number">
                        </div>

                          <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                              <input name="subject"  id="subject" placeholder="Subject*" type="text">
                          </div>

                          <div class="col-lg-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                              <textarea name="message" id="message" placeholder="Your Message*"></textarea>
                              <button class="btn btn-primary btn-hover-dark mt-4" data-aos="fade-up" data-aos-delay="200" type="submit">SEND</button>
                          </div>
                      </div>
                  </form>
                  <p class="form-messege error"></p>
              </div>
              </div>
          </div>
      </div>
  </div>

@endsection
@push('custom_script')
      <script>
  $(document).ready(function(e)  {
    $(document).on('click', '.add-cart', function(e) {
       var val = $(this).attr('value');
       $('#product_id').val(val);
    });
});
  </script>
@endpush
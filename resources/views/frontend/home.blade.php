
@include('frontend.includes.header')

    <!-- Header Area End  -->
    <!-- OffCanvas Menu Start -->
  @include('frontend.includes.canvas')
    <!-- Hero/Intro Slider Start -->
   @include('frontend.includes.slider')
    <!-- Hero/Intro Slider End -->
    <!-- Product Category Start -->
    <div class="section py-5 mt-4 category_home">
      <div class="container">
        <div class="col-md-12 text-center" data-aos="fade-up">
          <div class="section-title mb-0">
            <h2 class="title"> Top Categories</h2>
          </div>
        </div>
        <!-- Tab Start -->
        <div class="category-slider swiper-container" data-aos="fade-up">
          <div class="category-wrapper swiper-wrapper">
            <!-- Single Category -->
            <div class="swiper-slide">
              <a href="#" class="category-inner">
                <div class="category-single-item">
                  <img src="assets/images/category/category-1.png" alt="" />
                  <span class="title">Pain</span>
                </div>
              </a>
            </div>
            <!-- Single Category -->
            <div class="swiper-slide">
              <a href="#" class="category-inner">
                <div class="category-single-item">
                  <img src="assets/images/category/category-1.png" alt="" />
                  <span class="title"> Woodgrain </span>
                </div>
              </a>
            </div>
            <!-- Single Category -->
            <div class="swiper-slide">
              <a href="#" class="category-inner">
                <div class="category-single-item">
                  <img src="assets/images/category/category-1.png" alt="" />
                  <span class="title"> High Gloss</span>
                </div>
              </a>
            </div>
            <!-- Single Category -->
            <div class="swiper-slide">
              <a href="#" class="category-inner">
                <div class="category-single-item">
                  <img src="assets/images/category/category-1.png" alt="" />
                  <span class="title"> Acrylic</span>
                </div>
              </a>
            </div>
            <!-- Single Category -->
            <div class="swiper-slide">
              <a href="#" class="category-inner">
                <div class="category-single-item">
                  <img src="assets/images/category/category-1.png" alt="" />
                  <span class="title"> Hinges</span>
                </div>
              </a>
            </div>
            <!-- Single Category -->
            <div class="swiper-slide">
              <a href="#" class="category-inner">
                <div class="category-single-item">
                  <img src="assets/images/category/category-1.png" alt="" />
                  <span class="title"> Handel Series</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product Category End -->
    <!-- Product tab Area Start -->
    <div class="section product-tab-area py-5 ">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center" data-aos="fade-up">
            <div class="section-title mb-0">
              <h2 class="title">Our Products</h2>
              <p class="sub-title mb-30px">We are leaders in importing finest quality PVC tape, PVC sheets, Furniture adhesives, Hardware etc</p>
            </div>
          </div>
          <!-- Tab Start -->
          <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
            <ul class="product-tab-nav nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals"> New Imported</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers"> Best Sellers </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item"> Featured Products</a>
              </li>
            </ul>
          </div>
          <!-- Tab End -->
        </div>
        @php 
$data=DB::table('products')->limit(15)->get();


@endphp
        <div class="row">
          <div class="col">
            <div class="tab-content">
              <!-- 1st tab start -->
              <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                <div class="row">
                  @foreach($data as $item)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="{{route('product.detail',$item->id)}}" class="image">
                          <img src="{{asset('uploads/product/'.$item->image)}}" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" value="{{$item->id}}"  data-bs-toggle="modal"  data-bs-target="#exampleModal" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="{{route('product.detail',$item->id)}}">{{$item->name}} </a>
                        </h5>
                        <span class="price">
                          <span class="new">₹ {{$item->price}} Meter</span>
                        </span>
                      </div>
                    </div>
                  </div>
        @endforeach
                </div>
              </div>
              <!-- 1st tab end -->
              <!-- 2nd tab start -->
              <div class="tab-pane fade" id="tab-product-best-sellers">
                <div class="row">
                                @foreach($data as $item)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="{{route('product.detail',$item->id)}}" class="image">
                          <img src="{{asset('uploads/product/'.$item->image)}}" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" value="{{$item->id}}"  data-bs-toggle="modal"  data-bs-target="#exampleModal" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="{{route('product.detail',$item->id)}}">{{$item->name}} </a>
                        </h5>
                        <span class="price">
                          <span class="new">₹ {{$item->price}} Meter</span>
                        </span>
                      </div>
                    </div>
                  </div>
        @endforeach
                </div>
              </div>
              <!-- 2nd tab end -->
              <!-- 3rd tab start -->
              <div class="tab-pane fade" id="tab-product-sale-item">
                <div class="row">
                               @foreach($data as $item)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="{{route('product.detail',$item->id)}}" class="image">
                          <img src="{{asset('uploads/product/'.$item->image)}}" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" value="{{$item->id}}"  data-bs-toggle="modal"  data-bs-target="#exampleModal" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="{{route('product.detail',$item->id)}}">{{$item->name}} </a>
                        </h5>
                        <span class="price">
                          <span class="new">₹ {{$item->price}} Meter</span>
                        </span>
                      </div>
                    </div>
                  </div>
        @endforeach
         
                </div>
              </div>
              <!-- 3rd tab end -->
              <!-- 4th tab start -->
              <div class="tab-pane fade" id="tab-product-on-sales">
                <div class="row">
                               @foreach($data as $item)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="{{route('product.detail',$item->id)}}" class="image">
                          <img src="{{asset('uploads/product/'.$item->image)}}" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" value="{{$item->id}}"  data-bs-toggle="modal"  data-bs-target="#exampleModal" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="{{route('product.detail',$item->id)}}">{{$item->name}} </a>
                        </h5>
                        <span class="price">
                          <span class="new">₹ {{$item->price}} Meter</span>
                        </span>
                      </div>
                    </div>
                  </div>
        @endforeach
         
                </div>
              </div>
              <!-- 4th tab end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Product tab Areay End -->
    <!-- Banner Section Start -->
    <div class="section pb-4">
      <div class="container">
        <!-- Banners Start -->
        <div class="row">
          <!-- Banner Start -->
          <div class="col-lg-6 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="banner">
              <img src="{{asset('assets/images/category/cate_menu1.png')}}" alt="" />
            </a>
          </div>
          <!-- Banner End -->
          <!-- Banner Start -->
          <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="banner">
              <img src="{{asset('assets/images/category/cate_menu2.png')}}" alt="" />
            </a>
          </div>
          <!-- Banner End -->
        </div>
        <!-- Banners End -->
      </div>
    </div>
    <!-- Banner Section End -->
    <!-- Banner Section Start -->
    <div class="section pb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="become d-flex align-items-center">
              <img src="{{asset('assets/images/icons/customer-support.png')}}" alt="support icon">
              <div class="become-tst">
                <h3>Become an Official Distributor. <span class="d-block"> Call us now</span>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="become-btn">
                <a class="btn" href="partners.php">Call Now <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="become  d-flex align-items-center">
              <img src="{{asset('assets/images/icons/massage.png')}}" alt="newsletter images">
              <div class="become-tst">
                <h3>Sign Up for Newsletter</h3>
                <p>Subscribe to our newsletter and receive exclusive offers every week</p>
              </div>
              <div class="bbb-wrapper fl-wrap">
                <div class="subcribe-form fl-wrap">
                  <form id="subscribe1" action="#" method="post">
                    <input class="enteremail" required="" name="email" id="subscribe-email" placeholder="Enter your email here" spellcheck="false" type="email">
                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg"> SUBSCRIBE</button>
                    <label for="subscribe-email" class="subscribe-message"></label>
                  </form>
                </div>
              </div>
              <div class="clr-fix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Section End -->
    <!-- Footer Area Start -->
  @include('frontend.includes.footer')
    <!-- Footer Area End -->




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">


                <h5 class="modal-title">Enquiry Cart</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">x</span></button>
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
                  <p class="form-messege"></p>
              </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Modal end -->





    <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>
    <!-- Main Js -->
    <script src="{{asset('assets/js/main.js')}}"></script>


      <script>
  $(document).ready(function(e)  {
    $(document).on('click', '.add-to-cart', function(e) {
       var val = $(this).attr('value');
       $('#product_id').val(val);
    });
});
  </script>

  </body>
</html>
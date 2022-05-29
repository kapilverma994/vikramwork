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
        <div class="row">
          <div class="col">
            <div class="tab-content">
              <!-- 1st tab start -->
              <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="#">White Lily JJE - 1 </a>
                        </h5>
                        <span class="price">
                          <span class="new">₹ 50 Meter</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="#" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <button title="Add To Cart" class="add-to-cart">Enquire Now</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                </div>
              </div>
              <!-- 1st tab end -->
              <!-- 2nd tab start -->
              <div class="tab-pane fade" id="tab-product-best-sellers">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/3.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-10%</span>
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Wooden decorations</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                          <span class="old">$48.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/5.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-7%</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">High quality vase bottle</a>
                        </h5>
                        <span class="price">
                          <span class="new">$30.50</span>
                          <span class="old">$38.00</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/7.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/9.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-5%</span>
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Table</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                          <span class="old">$40.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/11.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                        </a>
                        <span class="badges"></span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Wooden decorations</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/13.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                        </a>
                        <span class="badges"></span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">High quality vase bottle</a>
                        </h5>
                        <span class="price">
                          <span class="new">$30.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/15.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                </div>
              </div>
              <!-- 2nd tab end -->
              <!-- 3rd tab start -->
              <div class="tab-pane fade" id="tab-product-sale-item">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/3.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-10%</span>
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Wooden decorations</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                          <span class="old">$48.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/5.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-7%</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">High quality vase bottle</a>
                        </h5>
                        <span class="price">
                          <span class="new">$30.50</span>
                          <span class="old">$38.00</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/7.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/9.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-5%</span>
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Table</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                          <span class="old">$40.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/11.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                        </a>
                        <span class="badges"></span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Wooden decorations</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/13.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                        </a>
                        <span class="badges"></span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">High quality vase bottle</a>
                        </h5>
                        <span class="price">
                          <span class="new">$30.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/15.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                </div>
              </div>
              <!-- 3rd tab end -->
              <!-- 4th tab start -->
              <div class="tab-pane fade" id="tab-product-on-sales">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/1.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Simple minimal Chair </a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/3.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-10%</span>
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Wooden decorations</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                          <span class="old">$48.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/5.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-7%</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">High quality vase bottle</a>
                        </h5>
                        <span class="price">
                          <span class="new">$30.50</span>
                          <span class="old">$38.00</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/7.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/9.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="sale">-5%</span>
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Table</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                          <span class="old">$40.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/11.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                        </a>
                        <span class="badges"></span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Wooden decorations</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/13.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                        </a>
                        <span class="badges"></span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">High quality vase bottle</a>
                        </h5>
                        <span class="price">
                          <span class="new">$30.50</span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="800">
                    <!-- Single Prodect -->
                    <div class="product">
                      <div class="thumb">
                        <a href="shop-left-sidebar.html" class="image">
                          <img src="assets/images/product-image/15.jpg" alt="Product" />
                          <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                        </a>
                        <span class="badges">
                          <span class="new">New</span>
                        </span>
                        <div class="actions">
                          <a href="wishlist.html" class="action wishlist" title="Wishlist">
                            <i class="icon-heart"></i>
                          </a>
                          <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="icon-size-fullscreen"></i>
                          </a>
                          <a href="compare.html" class="action compare" title="Compare">
                            <i class="icon-refresh"></i>
                          </a>
                        </div>
                        <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                      </div>
                      <div class="content">
                        <h5 class="title">
                          <a href="shop-left-sidebar.html">Living & Bedroom Chair</a>
                        </h5>
                        <span class="price">
                          <span class="new">$38.50</span>
                        </span>
                      </div>
                    </div>
                    <!-- Single Prodect -->
                  </div>
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
            <a href="shop-left-sidebar.html" class="banner">
              <img src="assets/images/category/cate_menu1.png" alt="" />
            </a>
          </div>
          <!-- Banner End -->
          <!-- Banner Start -->
          <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
            <a href="shop-left-sidebar.html" class="banner">
              <img src="assets/images/category/cate_menu2.png" alt="" />
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
              <img src="assets/images/icons/customer-support.png" alt="support icon">
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
              <img src="assets/images/icons/massage.png" alt="newsletter images">
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
           
                  <form class="contact-form-style" id="contact-form"  method="post">
                      <div class="row">
                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                              <input name="name" placeholder="Name*" type="text">
                          </div>
                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                              <input name="email" placeholder="Email*" type="email">
                          </div>
                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                            <input name="number" placeholder="Number*" type="number">
                        </div>

                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                              <input name="subject" placeholder="Subject*" type="text">
                          </div>

                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                              <textarea name="message" placeholder="Your Message*"></textarea>
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
  </body>
</html>
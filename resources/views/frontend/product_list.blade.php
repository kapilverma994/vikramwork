@extends('frontend.layout')
@section('content')
@section('breadcum-title', 'Product List')
@section('current_page', ' Shop')
@section('title','Product List')
<div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12  col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex py-2">
                        <!-- Left Side start -->
                        <p>There Are {{$data->count()}} Products.</p>
                        <!-- Left Side End -->
                    
                    </div>
                    <!-- Shop Top Area End -->

                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

    

    

                        <div class="row">
                            @forelse($data as $item)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product mb-25px">
                                    <div class="thumb">
                                        <a href="{{route('product.detail',$item->id)}}" class="image">
                                            <img src="{{asset('uploads/product/'.$item->image)}}" alt="Product">
                                            <!-- <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" /> -->
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                 
                                        <button title="Add To Cart"  value="{{$item->id}}" class="add-to-cart" data-bs-toggle="modal"  data-bs-target="#exampleModal">Enquire Now 1</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="{{route('product.detail',$item->id)}}">{{$item->name}}</a></h5>
                                        <span class="price">
                                            <span class="new">    ₹{{$item->price}}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h4 class="text-center">No Data Found</h4>
                   @endforelse
                        
                        </div>
                        <!--  Pagination Area Start -->
                 
                        <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-30px" data-aos="fade-up">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
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
    $(document).on('click', '.add-to-cart', function(e) {
       var val = $(this).attr('value');
       $('#product_id').val(val);
    });
});
  </script>
@endpush
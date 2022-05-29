
@include('frontend.includes.header')
    <!-- Header Area End  -->
    <!-- OffCanvas Menu Start -->
  @include('frontend.includes.canvas')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row breadcrumb_box  align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                            <h2 class="breadcrumb-title">@yield('breadcum-title')</h2>
                        </div>
                        <div class="col-lg-6  col-md-6 col-sm-12">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list text-center text-md-end">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active">@yield('current_page')</li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')



      <!-- Footer Area Start -->
    @include('frontend.includes.footer')


      <!-- Footer Area End -->
      <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
      <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>
      <!-- Main Js -->
      <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
  </html>

     @extends('admin.layouts.master_layout')   
     @section('title', 'Dashboard')
     @section('admin_content')
         @section('page_active','active')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </div>

    @php 

$cat=App\Models\Category::all();
$pro=App\Models\Product::all();
$proenq=App\Models\ProductEnquiry::all();
$con=App\Models\Contact::all();
@endphp

    <div class="row mb-3">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Category</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$cat->count()}}</div>
              
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Product</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pro->count()}}</div>
             
              </div>
              <div class="col-auto">
                <i class="fas fa-shopping-cart fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New User Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Product Enquiry</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$proenq->count()}}</div>
          
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Contact Enquiry</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$con->count()}}</div>
            
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Area Chart -->
   
      <!-- Pie Chart -->
     
      <!-- Invoice Example -->
     
      <!-- Message From Customer-->
    
    </div>
    <!--Row-->



  

@endsection
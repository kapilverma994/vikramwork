@extends('admin.layouts.master_layout')
@section('title', 'Contact')

@section('admin_content')
@section('type','Product Enquiry')
<div class="container-fluid" id="container-wrapper">
   

    <!-- Row -->
    <div class="row">


      <!-- DataTable with Hover -->
      <div class="col-lg-12">
          <div class="col-lg-6">
            @include('admin.message')
          </div>

        <div class="card mb-4">

          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Product Enquiries</h6>
       
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                   <th>Sno</th>
                   <th>Product Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                                <th>Message</th>
                    <th>Created At</th>
        
                    <th>Action</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Sno</th>
                    <th>Product Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                                <th>Message</th>
                    <th>Created At</th>
        
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>

@foreach ($data as $item)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$item->product->name}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->subject}}</td>
    <td>{{$item->msg}}</td>

    <td>{{$item->created_at->diffforhumans()}}</td>
    <td>
        <form action="{{route('product_enquiry.destroy',$item->id)}}" method="post" style="display:inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="sumit">Delete </button>
        </form>
    

    </td>


  </tr>
@endforeach




              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--Row-->

    <!-- Documentation Link -->




  </div>



@endsection

@extends('admin.layouts.master_layout')
@section('title', 'Product')

@section('admin_content')
@section('type','Product')

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
            <h6 class="m-0 font-weight-bold text-primary">Product</h6>
            <a  class="btn btn-success" href="{{route('product.create')}}">Add Product</a>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>Sno</th>
                    <th>Image</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Description</th>
                  <th>Price</th>
                 
                  <th>Status</th>
                  <th>Created At</th>

                  <th>Action</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                      <th>Sno</th>
                    <th>Image</th>
                  <th>Name</th>
                     <th>Category</th>
                  <th>Description</th>
                  <th>Price</th>
                 
                  <th>Status</th>
                  <th>Created At</th>

                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>

@foreach ($data as $item)
<tr>
    <td>{{$loop->iteration}}</td>
    <td><img src="{{asset('uploads/product/'.$item->image)}}" class="img-thumbnail" height="80px" width="80px" alt=""></td>
    <td>{{$item->name}}</td>
    <td>{{$item->category->category_name}}</td>
    <td>{{Str::limit($item->description,15)}}</td>
    <td>{{$item->price}}</td>
    <td>
        @if($item->status==1)
        <span class="badge badge-success">Active</span>
        @else
        <span class="badge badge-danger">Inactive</span>
        @endif
    </td>
    <td>{{$item->created_at->diffforhumans()}}</td>
    <td>
        <form action="{{route('product.destroy',$item->id)}}" method="post" style="display:inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="sumit">Delete </button>
        </form>
        @if($item->status==1)
        <a class="btn btn-success" href="{{url('admin/product/status/0',$item->id)}} ">Active</a>
        @else
        <a class="btn btn-danger" href="{{url('admin/product/status/1',$item->id)}} ">Deactive</a>
        @endif
<a class="btn btn-warning" href="{{route('product.edit',$item->id)}}">Edit</a>

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

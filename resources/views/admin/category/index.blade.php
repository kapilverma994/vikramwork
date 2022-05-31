@extends('admin.layouts.master_layout')
@section('page_active','active')
@section('title', 'Categories')
@section('admin_content')
@section('type','Category')
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
            <h6 class="m-0 font-weight-bold text-primary">Category</h6>
            <a  class="btn btn-success" href="{{route('category.create')}}">Add Category</a>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                    <th>Sno</th>
                  <th>Name</th>
               
                  <th>Created At</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                

                    <th>Created At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>

@foreach ($data as $item)
<tr>
    <td>{{$loop->iteration}}</td>
    <td>{{$item->category_name}}</td>

    <td>
        @if($item->status==1)
        <span class="badge badge-success">Active</span>
        @else
        <span class="badge badge-danger">Inactive</span>
        @endif
    </td>
    <td>{{$item->created_at->diffforhumans()}}</td>
    <td>
        <form action="{{route('category.destroy',$item->id)}}" method="post" style="display:inline">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="sumit">Delete </button>
        </form>
        @if($item->status==1)
        <a class="btn btn-success" href="{{url('admin/category/status/0',$item->id)}} ">Active</a>
        @else 
        <a class="btn btn-danger" href="{{url('admin/category/status/1',$item->id)}} ">Deactive</a>
        @endif
<a class="btn btn-warning" href="{{route('category.edit',$item->id)}}">Edit</a>

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

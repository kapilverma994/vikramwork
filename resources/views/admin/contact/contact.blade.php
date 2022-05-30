@extends('admin.layouts.master_layout')
@section('title', 'Contact')

@section('admin_content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">DataTables</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active" aria-current="page">DataTables</li>
      </ol>
    </div>

    <!-- Row -->
    <div class="row">


      <!-- DataTable with Hover -->
      <div class="col-lg-12">
          <div class="col-lg-6">
            @include('admin.message')
          </div>

        <div class="card mb-4">

          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Contact Enquiries</h6>
       
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr>
                   <th>Sno</th>
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
    <td>{{$item->name}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->subject}}</td>
    <td>{{$item->msg}}</td>

    <td>{{$item->created_at->diffforhumans()}}</td>
    <td>
        <form action="{{route('contact.destroy',$item->id)}}" method="post" style="display:inline">
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

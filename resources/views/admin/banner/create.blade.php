@extends('admin.layouts.master_layout')
@section('title', 'Create Banner')
@section('admin_content')
@section('page_active','active')

<div class="container-fluid ">

<h1>Banner</h1>
<div class="row mt-5">

    <div class="col-lg-12">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
          <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
<div class="col-md-6">
    <div class="form-group">
              <label for="exampleInputEmail1">Tag</label>
              <input type="text" name="tag" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter tag Name" autocomplete="off" required >
                @error('tag')
                <span class="text-danger">  {{$message}}</span>

                @enderror

            </div>
</div>
<div class="col-md-6">
    <div class="form-group">
              <label for="exampleInputEmail1">Arabic Tag</label>
              <input type="text" name="arabic_tag" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter arabic tag Name" autocomplete="off" required >
                @error('arabic_tag')
                <span class="text-danger">  {{$message}}</span>

                @enderror

            </div>
</div>
            </div>
        
               <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter tag Name" autocomplete="off" required >
                @error('title')
                <span class="text-danger">  {{$message}}</span>

                @enderror

            </div>
            <div class="form-group">
   <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
         
           <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="banner_image" class="form-control">

           </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>
</div>
@endsection

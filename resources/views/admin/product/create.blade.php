@extends('admin.layouts.master_layout')
@section('title', ' Create Product')
@section('admin_content')


    <div class="container-fluid ">

        <h1>Product</h1>
        <div class="row mt-5">

            <div class="col-lg-8">
                <!-- Form Basic -->
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Product Name" autocomplete="off"
                                    required>
                                @error('name')
                                    <span class="text-danger"> {{ $message }}</span>

                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" name="image" class="form-control" id="exampleInputPassword1"
                                    autocomplete="off" required>
                                @error('image')
                                    <span class="text-danger"> {{ $message }}</span>

                                @enderror
                            </div>
                            <div class="form-group">

                                <select name="category" class="form-control" id="" required>
                                    <option value="">Choose Category</option>
                                    @foreach ($cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                   
                 
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="8"></textarea>
                                @error('description')
                                    <span class="text-danger"> {{ $message }}</span>

                                @enderror
                            </div>
                  
                           <div class="form-group">
                               <label for="">Enter Price</label>
                               <input type="text" name="price" class="form-control" placeholder="Enter Price" required> 
    @error('price')
                                    <span class="text-danger"> {{ $message }}</span>

                                @enderror
                           </div>
                             
                           <div class="form-group">
                               <label for="">Enter Discounted Price</label>
                               <input type="text" name="discounted_price" class="form-control" placeholder="Enter Discounted Price">
    @error('discounted_price')
                                    <span class="text-danger"> {{ $message }}</span>

                                @enderror
                           </div>


<div class="form-group">
   <button type="submit" class="btn btn-primary">Submit</button>
</div>

                         
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('scripts')

    <script>
        function add_more() {


        }

    </script>

@endsection

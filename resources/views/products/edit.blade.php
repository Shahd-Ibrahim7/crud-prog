@extends('layout.admin.app')
@section('content')
            <div class="page-header">
              <h3 class="page-title"> Products </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Products</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Products</h4>
                    <form class="forms-sample" action="{{ route('admin.products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" id="exampleInputName1" placeholder="Name">
                      </div>

                        <div class="form-group">
                        <label for="exampleInputName1">Category  {{ $product->category_id }}</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                          @foreach ($categories as $category)
                          <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                           @endforeach
                        </select>
                        </div>


                      <div class="form-group">
                        <label for="exampleInputName1">Brand</label>
                        <select class="form-select" aria-label="Default select example" name="brand_id">
                          @foreach ($brands as $brand)
                          <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword4">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}" id="exampleInputPassword4" placeholder="Price">
                      </div>
     
                
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection
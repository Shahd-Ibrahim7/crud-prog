@extends('layout.admin.app')
@section('content')
            <div class="page-header">
              <h3 class="page-title"> Edit Brand </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Brand</h4>
                    <form class="forms-sample" action="{{ route('admin.brands.update', $brand->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $brand->name }}" id="exampleInputName1" placeholder="Name">
                      </div>
     
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection
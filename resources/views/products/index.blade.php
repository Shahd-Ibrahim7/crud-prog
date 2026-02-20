@extends('layout.admin.app')
@section('content')
            <div class="page-header">
              <h3 class="page-title"> Products </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                                          <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="card-title">Product Table</h4>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
      <form action="{{ route('admin.products.index') }}" method="GET">
        <div class="title_right">
          <div class="form-group pull-right top_search">
            <div class="input-group">
              <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search for...">

              <input type="text" name="price_from"  value="{{ request('price_from') }}"class="form-control" placeholder="Price From...">
              <input type="text" name="price_to" value="{{ request('price_to') }}" class="form-control" placeholder="Price To...">

              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Go!</button>
              </span>
            </div>
          </div>
        </div>  
        </form>
        
      </div>

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> name </th>
                          <th> category </th>
                          <th> Brand </th>
                          <th> price </th>
                          <th> Actions </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $product)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->brand->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-gradient-primary btn-sm">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-gradient-danger btn-sm">Delete</button>
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
@endsection
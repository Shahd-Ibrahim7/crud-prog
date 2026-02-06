@extends('layout.admin.app')
@section('content')
            <div class="page-header">
              <h3 class="page-title"> Brands </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Brands</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                       <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="card-title">Brand Table</h4>
        <a href="{{ route('admin.brands.create') }}" class="btn btn-primary">Add Brand</a>
    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> name </th>
                          <th> Actions </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($brands as $brand)
                          <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $brand->name }} </td>
                            <td>
                              <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-gradient-primary btn-sm">Edit</a>
                              <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" style="display:inline-block;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-gradient-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
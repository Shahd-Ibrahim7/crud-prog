@extends('layouts.admin.app')
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
                    <h4 class="card-title">Product Table</h4>
                    <p class="card-description"> Add class <code>.table-striped</code>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> name </th>
                          <th> description </th>
                          <th> price </th>
                          <th> Actions </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td> </td>
                          <td>
                            <a href="" class="btn btn-gradient-primary btn-sm">Edit</a>
                            <form action="" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-gradient-danger btn-sm">Delete</button>
                            </form>
                          </td>
                        </tr>
              
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
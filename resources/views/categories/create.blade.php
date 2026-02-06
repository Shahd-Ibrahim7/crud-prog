@extends('layout.admin.app')

@section('content')
<div class="container mt-4">
    <h2>Add Category</h2>
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

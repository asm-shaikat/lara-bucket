@extends('welcome')
@section('content')
<div class="container mt-5">
        <h2>Create Gallery</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('bucket.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Gallery Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="images">Upload Images</label>
                <input type="file" class="form-control-file" id="images" name="images[]" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection 
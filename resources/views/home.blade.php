@extends('welcome')

@section('content')
<div class="container mt-5">
    <h2>Galleries</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @foreach ($buckets as $bucket)
        <div class="mb-5">
            <h3>{{ $bucket->name }}</h3>
            <div class="row">
                @if ($bucket->images)
                    @foreach (json_decode($bucket->images) as $image)
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="{{ Storage::disk('s3')->url($image) }}" class="card-img-top img-fluid" alt="{{ $bucket->name }}">
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <p>No images available.</p>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>
@endsection

@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">New Latters</h1>
        <a href="{{ route('admin.latters.index') }}" class="btn btn-danger float-end">Back</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.latters.index') }}">Latters</a></li>
        <li class="breadcrumb-item active">New Latters</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            New Latters
        </div>
        <div class="card-body">
        <form action="{{route('admin.latters.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}">
               
                @error('title')
                    <div class="text-danger sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>

                @error('description')
                    <div class="text-danger sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" name="image" id="image">

                @error('image')
                    <div class="text-danger sm">{{$message}}</div>
                @enderror
            </div>
            <!-- Category_id -->
            <input type="hidden" class="form-control" name="category_id" id="category_id" value="1">
            <!-- Category_id end -->
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

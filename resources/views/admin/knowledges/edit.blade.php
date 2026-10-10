@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Edit Knowledge</h1>
        <a href="{{ route('admin.knowledges.index') }}" class="btn btn-danger float-end">Back</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.knowledges.index') }}">Knowledge</a></li>
        <li class="breadcrumb-item active">Edit Knowledge</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Knowledge
        </div>
        <div class="card-body">
        <form action="{{route('admin.knowledges.update', $knowledge->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{$knowledge->title}}">
               
                @error('title')
                    <div class="text-danger sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror">{{$knowledge->description}}</textarea>

                @error('description')
                    <div class="text-danger sm">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Image</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Image</button>
                    </li>
                 </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <img src="{{$knowledge->image}}" alt="" class="w-25 h-25 my-3">
                        <input type="hidden" name="old_image" id="" value="{{$knowledge->image}}">
                    </div>
                    <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                        <input type="file" accept="image/*" class="form-control my-3" name="image" id="image">
                    </div>
                </div>
            </div>
            <!-- Category_id -->
            <input type="hidden" class="form-control" name="category_id" id="category_id" value="2">
            <!-- Category_id end -->
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

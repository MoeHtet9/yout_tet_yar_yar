@extends('layouts.front')
@section('content')
        <div class="row mx-5">
            <div class="col-lg-12 my-5">
                <div class="row">
                    <div class="card col-lg-8 me-5">
                        <img src="{{$post->image}}" class="card-img-top" alt="..." height="auto">
                        <div class="card-body">
                            <h4 class="card-title">{{$post->title}}</h4>
                            <br>
                            <p class="card-text">{{$post->description}}</p>
                            <hr>
                            <div class="mb-3">
                                <label for="description" class="form-label">Review</label>
                                <form action="{{route('admin.reviews.store')}}" method="post">
                                    @csrf
                                    <textarea class="form-control mb-3 @error('description') is-invalid @enderror" id="description" name="description" rows="3"></textarea>
                                    @error('description')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    <button class="btn btn-primary container">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-3">
                        <div class="row container-fulid card-body">
                            <h5 class="text-primary">Posts</h5>
                            <div class="col-sm-12 list pt-3">
                                <ul class="list-unstyled">
                                    @foreach($posts_category as $post_category)
                                    <li>
                                        <a href="{{ route('front-detail', ['id' => $post_category->id, 'category_id' => $post_category->category_id]) }}" class="text-decoration-none">
                                            <div class="card mb-3 p-2 posts-list">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="{{$post_category->image}}" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <p class="card-title">{{$post_category->title}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="col-sm-12 mt-5">
                                <h5 class="text-primary">Reviews</h5>
                                <ul class="list-group list">
                                    @foreach($reviews as $review)
                                    <li class="list-group-item">{{$review->description}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
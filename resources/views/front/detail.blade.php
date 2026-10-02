@extends('layouts.front')
@section('content')
        <div class="row mx-5">
            <div class="col-lg-12 my-5">
                <div class="row">
                    <div class="card col-lg-8 me-5">
                        <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->description}}</p>
                            <hr>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Review</label>
                                <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <button class="btn btn-primary container">Send</button>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-3 list">
                        <div class="row container-fulid card-body">
                            <div class="col-sm-12">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
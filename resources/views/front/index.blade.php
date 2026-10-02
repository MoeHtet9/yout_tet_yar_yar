@extends('layouts.front')
@section('content')
        <section class="container-fulid row hero p-5">
            <div class="col-lg-6 p-5">
                <p class="text-warning">WELCOME TO</p>
                <h1 class="text-light">Yout Tet Yar <span class="text-warning">Yar</span></h1>
                <br>
                <p class="text-light">ကျွန်တော်၏ ရောက်တက်ရရာစာစုလေးများ နှင့်</p>
                <p class="text-light">Knowledge Sharing များ...</p>
                <br>
                <p class="text-warning">"ပျော်ရွှင်ခြင်းတွေကို ရရှိဖို့ အချိန်တွေပေးဆပ်ခဲ့ရတယ်၊</p>
                <p class="text-warning">ပြည့်စုံခြင်းတွေကို ရရှိဖို့ ပျော်ရွှင်ခြင်းတွေနဲ့ လဲလှယ်ခဲ့ရပြန်တယ်..."</p>
            </div>
        </section>
        <br><br>
        <div class="mb-3">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item mx-5" role="presentation">
                    <button class="nav-link active text-dark" id="1-tab" data-bs-toggle="tab" data-bs-target="#1-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true"><i class="fa-solid fa-newspaper"></i>latters </button>
                </li>
                <li class="nav-item mx-5" role="presentation">
                    <button class="nav-link text-dark" id="2-tab" data-bs-toggle="tab" data-bs-target="#2-tab-pane" type="button" role="tab" aria-controls="new-image-tab-pane" aria-selected="false"><i class="fa-solid fa-book"></i> Knowledge Sharing</button>
                </li>
            </ul>
            <hr>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="1-tab-pane" role="tabpanel" aria-labelledby="1-tab" tabindex="0">
                    <section class="container pb-5">
                        <div class="row g-3">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                @foreach($posts as $post)
                                @if($post->category_id == 1)

                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{$post->image}}" class="card-img-top image" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-warning">{{$post->title}}</h3>
                                                <p class="card-text">{{Str::limit($post->description, 100)}}</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="{{route('front-detail', ['id' => $post->id, 'category_id' => $post->category_id])}}" class="btn btn-primary">Read More..</a>
                                            </div>
                                        </div>
                                    </div>

                                @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                    {{$posts->links()}}
                </div>
                <div class="tab-pane fade" id="2-tab-pane" role="tabpanel" aria-labelledby="2-tab" tabindex="0">
                    <section class="container pb-5">
                        <div class="row g-3">
                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                @foreach($posts as $post)
                                @if($post->category_id == 2)

                                    <div class="col">
                                        <div class="card h-100">
                                            <img src="{{$post->image}}" class="card-img-top image" alt="...">
                                            <div class="card-body">
                                                <h3 class="card-title text-warning">{{$post->title}}</h3>
                                                <p class="card-text">{{Str::limit($post->description, 100)}}</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="{{route('front-detail', ['id' => $post->id, 'category_id' => $post->category_id])}}" class="btn btn-primary">Read More..</a>
                                            </div>
                                        </div>
                                    </div>

                                @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
@endsection
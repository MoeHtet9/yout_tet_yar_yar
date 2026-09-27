@extends('layouts.front')
@section('content')
        <div class="row mx-5">
            <div class="col-lg-12 my-5">
                <div class="row">
                    <div class="card col-lg-8 me-5">
                        <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <span class="badge bg-primary-subtle text-primary my-3">Welcome</span>
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                        </div>
                    </div>
                    <div class="card col-lg-3">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Web Design</a></li>
                                        <li><a href="#!">HTML</a></li>
                                        <li><a href="#!">Freebies</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
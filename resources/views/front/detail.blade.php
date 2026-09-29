@extends('layouts.front')
@section('content')
        <div class="row mx-5">
            <div class="col-lg-12 my-5">
                <div class="row">
                    <div class="card col-lg-8 me-5">
                        <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam placeat rerum voluptate ipsa iure laborum enim voluptatibus, est adipisci porro fugiat? Nostrum, laudantium? Amet, aperiam voluptates ad ex unde voluptas. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit mollitia delectus sapiente odio facilis accusamus. Perspiciatis maxime harum, nulla praesentium ea odio consequuntur nihil rem non id ipsam eligendi obcaecati? </p>
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
                                    <li>
                                        <a href="" class="text-decoration-none">
                                            <div class="card mb-3 p-2">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                    <img src="{{asset('front-asset/note1.jpg')}}" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-title">Card title</p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-decoration-none">
                                            <div class="card mb-3 p-2">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                    <img src="{{asset('front-asset/note1.jpg')}}" class="img-fluid rounded-start" alt="...">
                                                    </div>
                                                    <div class="col-md-8">
                                                    <div class="card-body">
                                                        <p class="card-title">Card title</p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="card mb-3 p-2">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                <img src="{{asset('front-asset/note1.jpg')}}" class="img-fluid rounded-start" alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                <div class="card-body">
                                                    <p class="card-title">Card title</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
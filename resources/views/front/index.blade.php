@extends('layouts.front')
@section('content')
        <section class="container py-5">
            <div class="row align-items-center">
                <!-- <div class="col-lg-6">
                    
                </div> -->
                <div class="col-lg-12 text-center">
                    <!-- <img src="{{asset('front-asset/images/note.png')}}" class="img-fluid w-50 h-50"> -->
                     
                    <div class="note-wrapper">
                        <div class="pin"></div>

                        <div class="sticky-note" id="stickyNote">
                            <span class="note-tag">📌 TODAY'S NOTE</span>

                            <h3 id="todayDate"></h3>

                            <p class="quote">
                                "Small progress every day becomes a big result."
                            </p>
                        </div>
                    </div>
                    <span class="badge bg-primary-subtle text-primary">Welcome</span>
                     <h1 class="fw-bold mt-3">Hello! </h1>
                     <p class="text-secondary">ကျွန်တော်၏ ရောက်တက်ရာရာ စာစုလေးများ</p>
                </div>
            </div>
        </section> 
        <section class="container pb-5">
            <div class="d-flex justify-content-between mb-3">
                <h3>Latest Articles</h3>
            </div>
            <div class="row g-3">
                <div class="col-lg-12 mb-5">
                    <div class="row">
                        <div class="card col-lg-8 me-5">
                            <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="..." height="200px">
                            <div class="card-body">
                                <span class="badge bg-primary-subtle text-primary my-3">Welcome</span>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                                <a href="#" class="btn btn-primary">Read More..</a>
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

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-primary-subtle text-primary my-3">Welcome</span>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Read More..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-primary-subtle text-primary my-3">Welcome</span>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Read More..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-primary-subtle text-primary my-3">Welcome</span>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Read More..</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{asset('front-asset/images/note.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <span class="badge bg-primary-subtle text-primary my-3">Welcome</span>
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Read More..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
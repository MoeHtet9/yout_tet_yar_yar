@extends('layouts.admin')
@section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Posts</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2 class="text-white">{{ $total_posts }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Laters</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2 class="text-white">{{ $total_latters }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Knowledge</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2 class="text-white">{{ $total_knowledges }}</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Reviews</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <h2 class="text-white">{{ $total_reviews }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area"></i>
                                Reviews List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Post Title</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Post Title</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp            
                                        @foreach ($reviews as $review)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$review->description}}</td>
                                                <td>{{$review->post->category->name}}</td>
                                                <td>{{$review->post->title}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>  
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
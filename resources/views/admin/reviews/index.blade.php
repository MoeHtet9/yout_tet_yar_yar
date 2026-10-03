@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Reviews</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Reviews</li>
            </ol>
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
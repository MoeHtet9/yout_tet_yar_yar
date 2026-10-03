@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="mt-4">Knowledges Sharing</h1>
                <a href="" class="btn btn-primary">Add New</a>
            </div>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Knowledges Sharing</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area"></i>
                    Knowledges Sharing List
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp            
                            @foreach ($Knowledges as $Knowledge)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$Knowledge->title}}</td>
                                    <td>{{Str::limit($Knowledge->description, 30)}}</td>
                                    <td><img src="{{$Knowledge->image}}" alt="..." width="100"></td>
                                    <td>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <form action="" method="POST" style="display:inline-block">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
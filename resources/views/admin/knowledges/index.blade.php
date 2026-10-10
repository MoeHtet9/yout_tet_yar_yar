@extends('layouts.admin')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="mt-4">Knowledges Sharing</h1>
                <a href="{{route('admin.knowledges.create')}}" class="btn btn-primary">Add New</a>
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
                                        <a href="{{route('admin.knowledges.edit', $Knowledge->id)}}" class="btn btn-warning">Edit</a>
                                        <a class="btn btn-danger delete" data-id="{{$Knowledge->id}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>
    </main>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete...</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3>Are you sure delete?</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <form action="" method="post" id="deleteForm">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Yes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function() {
        $('tbody').on('click','.delete',function() {
            $('#deleteModal').modal('show');
            let id = $(this).data('id');
            $('#deleteForm').attr('action',`knowledges/${id}`);
        })
    })
</script>
@endsection
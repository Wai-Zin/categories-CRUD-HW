@extends('categories.layout')
@section('content')
<div class="container">
     <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Categories CRUD</h2>
                </div>
                <div class="card-header">
                    <a href="/categories/create" class="btn btn-warning btn-sm" title="Add New Post">
                        ADD NEW POST
                    </a><br/> <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Text Body</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $categories)
                                <tr>
                                    <td>{{ $categories -> id }}</td>
                                    <td>{{ $categories -> title }}</td>
                                    <td>{{ $categories -> body }}</td>

                                    <td>
                                         <a href="{{ url('/categories/'. $categories->id) }}" title="View Categories"><button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                     <a href="{{ url('/categories/'. $categories->id. '/edit') }}" title="Edit Categories"><button class="btn btn-success btn-sm">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                     <form method="POST" action="/categories/{{ $categories -> id }}" onsubmit="return confirm('Confirm Delete')" accept-charset="UTF-8" style="display:inline">
                                         @method('DELETE')
                                         @csrf
                                        <a href="/categories/delete/{{ $categories -> id }}" title="Delete Categories" onclick="return confirm('Confirm Delete')" ><button class="btn btn-danger btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>DELETE</button></a>
                                    </form>
                                    </td>
                                </tr> 
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         </div>
     </div>
</div>
@endsection
@extends('categories.layout')
@section('content')

<div class="card" style="margin:35px;">

   <div class="card-header">Create New Categories</div>
   <div class="card-body">
    <form action="/categories" method="POST">
    @csrf
    <label>Post Title</label>
    <input type="text" name="title" class="form-control">
    @error('title')
    <div style="color:red;">{{ $message }}</div>
    @enderror
    <br><br>


    <label>Post Body</label>
    <textarea name="body" class="form-control"></textarea>
     @error('body')
    <div style="color:red;">{{ $message }}</div>
    @enderror
    <br><br>


    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary btn-sm">Create</button>
         <a href="/categories" class="btn btn-dark btn-sm">Back</a>
    </div>
    </form>
   </div>
</div>

  

@stop
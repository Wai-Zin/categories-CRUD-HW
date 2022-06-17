@extends('categories.layout')
@section('content')

<div class="card" style="margin:35px;">
    <div class="card-header">Edit Categories</div>
       <div class="card-body">
        <form action="{{ url('categories/'. $categories->id) }}" method="POST">
          {!!  csrf_field() !!}
          @method("PATCH")
          <label>Edit Title</label>
          <input type="text" name="title" value="{{ $categories -> title }}">
          <br><br>
          <label>Edit Body</label>
          <textarea name="body">
          {{ $categories -> body }}
          </textarea>
          <br><br>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
              <a href="/categories" class="btn btn-dark btn-sm">Back</a>
          </div>
              </form>
          </div>
</div>
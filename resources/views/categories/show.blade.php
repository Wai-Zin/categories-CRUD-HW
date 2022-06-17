@extends('categories.layout')
@section('content')

<div class="card" style="margin:35px;">

   <div class="card-header">About Categories Details</div>
   <div class="card-body">
      <div class="card-body">
        <h5 class="card-title" style="color:aqua;">Title: {{ $categories->title }}</h5>
        <hr/>
        <p class="card-text" style="color:blueviolet;">Text Body: {{ $categories->body }}</p>
      </div>
      
   </div>

   </div>
   
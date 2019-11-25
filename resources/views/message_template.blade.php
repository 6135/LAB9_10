
@extends('layouts.app')
  @section('extra')
  <meta http-equiv="refresh" content="3; url={{action('Blog@index')}}">
  @endsection
  @section('content')
  <!-- Content -->
  <div class="container" style="max-width: 50%">
    <div class="alert alert-{{$Type}}">
      <p style="text-align: center">{{$Message}}</p>
    </div>
  </div>
  <!-- EOContent -->
  @endsection

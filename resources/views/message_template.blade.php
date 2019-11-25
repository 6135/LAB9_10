
<meta http-equiv="refresh" content="3; url={{acion(Blog@index)}}">
@extends('layouts.app')

  @section('content')
  <!-- Content -->
  <div class="container" style="max-width: 50%">
    <div class="alert alert-{{$Type}}">
      <p style="text-align: center">{{$Message}}</p>
    </div>
  </div>
  <!-- EOContent -->
  @endsection

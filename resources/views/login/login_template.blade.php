@extends('layouts.app')

@section('content')
  <div class="container" style="max-width: 50%">
    <div class="well">
    <h2 class="text-center">Login</h2>
    <hr>
    <form class="form-horizontal" action="{{action('Login@login_action')}}" method="POST">
      <div class="form-group">
        <label class="control-label col-sm-3" for="email">Email:</label>
        <div class="col-sm-6">
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name="Email" value="{{old('Email')}}" required>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="pwd">Password:</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password" value="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
          <div class="col-sm-4">
            <label><input type="checkbox" name="rememberMe" value="true">Remember me</label>
          </div>
          <div class="col-sm-4">
            <a href="password_reset.php">Forgot password?</a>
          </div>
        </div>
      </div>      
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
          <button type="submit" class="btn btn-default"><i class="fas fa-check"></i>&nbsp;Login</button>
        </div>        
      </div>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
  @include('layouts.error')
  </div>
</div>
@endsection
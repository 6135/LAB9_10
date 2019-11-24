@extends('layouts.app')

  
  @section('content')

  <div class="container" style="max-width: 50%">
    <div class="well">
      <h2 class="text-center">Register</h2>
      <hr>
      <!--
      <form class="form-horizontal" action="{{action('Blog@register_action')}}" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-3" for="username">Username:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="username" placeholder="Username" name="Username" value="{{$UserName}}" maxlength="32" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="email" placeholder="Email" name="Email" value="{{$Email}}" maxlength="100" required>
           
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Password:</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Pwd" maxlength="32" value="" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="CfmPwd" maxlength="32" value="" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" name="submit" class="btn btn-default"><i class="fas fa-check"></i>&nbsp;Register</button>
            <button type="reset" name="reset" class="btn btn-default"><i class="fas fa-trash"></i>&nbsp;Clear</button>
          </div>        
        </div>
      </form>
      -->
    </div>
    @if (isset($Error) && $isError == 1) 
    <div class="alert alert-danger">
      <p style="text-align: center">{{$Error}}</p>
    </div>
    @endif
  </div>
  @endsection
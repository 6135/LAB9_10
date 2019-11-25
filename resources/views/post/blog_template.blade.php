@extends('layouts.app')

  @section('content')
  <!-- Content -->
  <div class="row">
    <div class="row-padded">
      <!-- left row -->
      <div class="col-sm-2"></div>

      <!-- middle row -->
      <div class="col-sm-7">
        <div class="container-fluid well">
          <form class="form-vertical" action="{{action('Post@post_action',$Post_id)}}" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-3" for="post">{{$Verb}} your post</label>
              <div>
                <textarea rows="5" class="form-control" id="post" name="content" style="resize: vertical;" required>{{$Blog}}</textarea>
              </div>
            </div>
            <div class="form-group" style="padding-top: 1%">
              <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-pencil"></i>&nbsp;Post</button>
              <a href="./" role="button" name="cancel" class="btn btn-danger"><i class="fas fa-times"></i>&nbsp;Cancel</a>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </form>
        </div>
      </div>

      <!-- right row -->
      </div class="col-sm-3">
      </div>
  <!--EOContent -->
@endsection
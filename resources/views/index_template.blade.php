@extends('layouts.app') 

  @section('extra')
    @include('layouts.newsFlash')
  @endsection

  @section('content')
  <div class="row">
    <div class="row-padded">
      <!-- left row -->
      <div class="col-sm-2">
        @if (isset($Name))
        <div class="panel-group">
          <div class="panel panel-default ">
            <div class="panel-heading" style="background-color: #d5d9fd;">
              <div class="well text-center">
                <h4>{{$Name}}</h4>
                <img src="{{asset('resources/assets/img/avatar/img_avatar3.png')}}" class="img-circle" style="width: 90%">
              </div>
            </div>
            <div class="panel-body">
              <div class="well">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
            </div>
          </div>
        </div>
        @endif
      </div>

      <!-- middle row -->
      <div class="col-sm-7">
        <div class="panel-group">

          <div class="well">
            <div class="row">
              <div class="col-sm-4">
                <h4 style="text-align: left;"><b>Currently looking at:</b></h4>
              </div>
              <div class="col-sm-8">
                <h4 style="text-align: right;">{{$SubForum}}</h4>
              </div>
            </div>
          </div>

          <!-- own post -->
          @if (isset($Name))
          <div class="panel panel-default">
            <div class="panel-footer">
              <a href="post" role="button" class="btn btn-success" ><i class="fas fa-pencil-alt"></i>&nbsp;Post</a>
            </div>
          </div>
          @endif
          <!-- eo own post -->
		      @foreach ($Posts as $post)
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="media">
                <div class="media-right">
                  <img src="{{asset('resources/assets/img/avatar/img_avatar3.png')}}" class="media-object" style="max-width: 80px;">
                </div>
                <div class="media-body">
                  <h4 class="media-heading text-right">{{$post->user->name}}</h4>
                </div>
              </div>
            </div>
            <div class="panel-body">{{$post->content}}</div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-sm-4" style="text-align: left"><small>Created at:</small></div>
                <div class="col-sm-8" style="text-align: right"><small>{{$post->created_at}}</small></div>
              </div>
              <div class="row">
                <div class="col-sm-4" style="text-align: left"><small>Last updated at:</small></div>
                <div class="col-sm-8" style="text-align: right"><small>{{$post->updated_at}}</small></div>
              </div>
              <hr>
              <button type="button" class="btn btn-success"><i class="fas fa-thumbs-up"></i> &nbsp;{{$post->num_likes}}</button>
              <button type="button" class="btn btn-danger"><i class="fas fa-thumbs-down"></i> &nbsp;Clear_Like</button>
              @if (isset($id) && $post->user_id == $id)
              <a href="{{action('Post@post',$post->id)}}" role="button" class="btn btn-danger"><i class="fas fa-pencil"></i>&nbsp;Edit</a>
              @endif
            </div>
          </div>
		      @endforeach

        </div>
      </div>

      <!-- right row -->
      <div class="col-sm-3">
        <div class="panel-group">
          <div class="well">
            <h2 style="text-align: center;"><b>Recent Posts</b></h2>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #d5d9fd;">
              <h4 style="text-align: center">Tesla acquires computer vision startup DeepScale in push toward robotaxis</h4>
            </div>
            <div class="panel-body">
              <p>USER POSTED TEXT</p>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #d5d9fd;">
              <h4 style="text-align: center">NASA awards $43.2M to Blue Origin, SpaceX and others for tech to take us to the Moon and Mars</h4>
            </div>
            <div class="panel-body">
              <p>USER POSTED TEXT</p>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #d5d9fd;">
              <h4 style="text-align: center">UPS gets FAA approval to operate an entire drone delivery airline</h4>
            </div>
            <div class="panel-body">
              <p>USER POSTED TEXT</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection

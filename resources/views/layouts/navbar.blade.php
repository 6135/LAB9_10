
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand active" href="{{route('/post')}}"><i class="fas fa-bars" style="color: white"></i>&nbsp;Home</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      @if (isset($Menu1)) 
      <li><a href="{{$href1}}">{{$Menu1}}</a></li>
      @endif
      @if (isset($Menu2))<li><a href="{{$href2}}">{{$Menu2}}</a></li>
      @endif
      @if (isset($Menu3))<li><a href="{{$href3}}">{{$Menu3}}</a></li>
      @endif
    </ul>
    <form class="navbar-form navbar-right" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Topics" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
              <i class="fas fa-search"></i>
            </button>
        </div>
      </div>
    </form>
  </div>
</nav>
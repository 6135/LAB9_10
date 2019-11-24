<!DOCTYPE html>
<html>

<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/indexStyle.css">
  <link rel="stylesheet" href="https://streamonion.com/kinnith/fontawesome/css/all.css"></link>
  <title>Forum</title>
  <meta http-equiv="refresh" content="3; url=index.php" /> 
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand active" href="{$href0}"><i class="fas fa-bars" style="color: white"></i>&nbsp;{$Menu0}</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        {if isset($Menu1)}<li><a href="{$href1}">{$Menu1}</a></li>{/if}
        {if isset($Menu2)}<li><a href="{$href2}">{$Menu2}</a></li>{/if}
        {if isset($Menu3)}<li><a href="{$href3}">{$Menu3}</a></li>{/if}
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
  <!-- EOHeader -->

  <!-- Main Content -->
  <!-- Content -->
  <div class="container" style="max-width: 50%">
    <div class="alert alert-{$Type}">
      <p style="text-align: center">{$ErrorMsg}</p>
    </div>
  </div>
  <!-- EOContent -->

  <!-- Footer -->
  <footer>
    <div class="row">
      <div class="row-padded">
        <small class="col-sm-6 text-left">@ 2019 DAW</small>
        <small class="col-sm-6 text-right">Designed by a61172</small>
      </div>
    </div>
  </footer>
  <!--EOFooter -->

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>

</html>
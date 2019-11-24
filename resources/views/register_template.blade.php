<!DOCTYPE html>
<html>

<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/indexStyle.css">
  <link rel="stylesheet" href="https://streamonion.com/kinnith/fontawesome/css/all.css"></link>
  <title>Forum</title>
</head>

<body>
  <!-- Header -->
  @include('layouts.navbar')
  <!-- EOHeader -->

  <!-- Main Content -->
  <!-- Content -->
  <div class="container" style="max-width: 50%">
    <div class="well">
      <h2 class="text-center">Register</h2>
      <hr>

      <form class="form-horizontal" action="register_action.php" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-3" for="username">Username:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="username" placeholder="Username" name="Username" value="{$UserName}" maxlength="32" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="email" placeholder="Email" name="Email" value="{$Email}" maxlength="100" required>
           
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Password:</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Pwd" maxlength="32" value="{$pwd}" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="pwd">Confirm Password:</label>
          <div class="col-sm-6">
            <input type="password" class="form-control" id="pwd" placeholder="Confirm password" name="CfmPwd" maxlength="32" value="{$cfmpwd}" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" name="submit" class="btn btn-default"><i class="fas fa-check"></i>&nbsp;Register</button>
            <button type="reset" name="reset" class="btn btn-default"><i class="fas fa-trash"></i>&nbsp;Clear</button>
          </div>        
        </div>
      </form>

    </div>
    {if $isError eq 1 }
    <div class="alert alert-danger">
      <p style="text-align: center">{$Error}</p>
    </div>
    {/if}
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
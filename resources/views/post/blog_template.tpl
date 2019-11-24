<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/indexStyle.css">
  <link rel="stylesheet" href="https://streamonion.com/kinnith/fontawesome/css/all.css"></link>
  <title>Forum</title>
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
    </div>
  </nav>
  <!-- EOHeader -->

  <!-- Main Content -->

  <!-- Content -->
  <div class="row">
    <div class="row-padded">
      <!-- left row -->
      <div class="col-sm-2">
        {if isset($Name)}
        <div class="panel-group">
          <div class="panel panel-default ">
            <div class="panel-heading" style="background-color: #d5d9fd;">
              <div class="well text-center">
                <h4>{$Name}</h4>
                <img src="img\avatar\img_avatar3.png" class="img-circle" style="width: 90%">
              </div>
            </div>
            <div class="panel-body">
              <div class="well">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </div>
            </div>
          </div>
        </div>
        {/if}
      </div>

      <!-- middle row -->
      <div class="col-sm-7">
        <div class="container-fluid well">
          <form class="form-vertical" action="{$Action}" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-3" for="post">{$Verb} your post</label>
              <div>
                <textarea rows="5" class="form-control" id="post" name="content" style="resize: vertical;">{$Blog}</textarea>
              </div>
            </div>
            <div class="form-group" style="padding-top: 1%">
              <button type="submit" name="submit" class="btn btn-success"><i class="fas fa-pencil"></i>&nbsp;Post</button>
              <a href="index.php" role="button" name="cancel" class="btn btn-danger"><i class="fas fa-times"></i>&nbsp;Cancel</a>
              {if isset($PostId)}
              <a href="deleteblog_action.php?PostId={$PostId}" role="button" name="cancel" class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp;Delete Post</a>
              {/if}
            </div>
          </form>
        </div>
      </div>

      <!-- right row -->
      </div class="col-sm-3">
      </div>
  <!--EOContent -->

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
<!--
{foreach item=post from=$Post}
<tr>
 <td>{$post.content}</td>
 <td>{$post.created_at}</td>
  <td>{$post.name}</td>
</tr>
{/foreach}
</table></body></html> 	-->
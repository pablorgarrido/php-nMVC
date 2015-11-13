<!DOCTYPE html>
<html lang="it">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php echo $app_nome; ?> - Login</title>
		<meta name="generator" content="Bluefish 2.2.5" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="icon" type="image/png" href="<?php echo $app_icon; ?>">
		<link href="<?php echo $views_login; ?>css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo $views_login; ?>css/styles.css" rel="stylesheet">
	
	</head>
	<body>
	
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center"><img src="<?php echo $app_icon; ?>" width="64" height="64" alt="" border="0" /> <?php echo $app_nome; ?></h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="./" name="loginform" method="POST">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Username" name="user_name">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="user_password" autocomplete="off" required>
            </div>
            <div class="form-group">
              <!-- <button class="btn btn-primary btn-lg btn-block" name="login">Login</button> -->
              <input class="btn btn-primary btn-lg btn-block" type="submit"  name="login" value="Login" />
              <!--<span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>-->
            </div>
            
          </form>
          
         
      </div>
     
      <div class="modal-footer">
      txtmsg		 
      </div>
      
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo $views_login; ?>js/bootstrap.min.js"></script>
	</body>
</html>
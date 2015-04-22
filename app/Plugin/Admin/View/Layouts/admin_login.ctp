
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <?php 
      echo $this->Html->css(array(
        '/admin/css/bootstrap.min.css',
        '/admin/css/login.css',
        ));
     ?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
	<div class="col-md-4 col-md-offset-4">
		<?php echo $this->Session->flash('auth'); ?>
	</div>
    <?php      
        echo $this->fetch('content');
    ?>
    </div> <!-- /container -->
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url("../static/images/test.png") ?>">

    <title>DARU-Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url("../static/css/bootstrap.css") ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url("../static/css/signin.css") ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        <form class="form-signin" method="post" action = "<?php echo base_url('home/registration_submit') ?>">
        <h3 class="form-signin-heading" style="color:black"><strong>Please enter these data</strong></h3>
		<label for="inputUsername" class="sr-only" >Username</label>
		<input type="text" id="inputUsername" name ="username" class="form-control" placeholder="Username" required>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name = "email" class="form-control" placeholder="Email address" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
		<label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName"  name ="name" class="form-control" placeholder="Name" required>
		<label for="inputPhone"  class="sr-only">Phone No.</label>
        <input type="tel" id="inputPhone" name = "phonenumber" class="form-control" placeholder="Phone No." required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> <strong>Remember me</strong>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="viewport.js"></script>
  </body>
</html>

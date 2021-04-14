<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="John Idogun">
    <title>Monitor | Login</title>

     <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- main css -->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body class="text-center">

<?php include 'includes/header.php';?>

<form class="form-signin">
  <img class="mb-4" src="images/logo.svg" alt="" width="180" height="100">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <div class="mb-3">
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  </div>

  <div class="mb-3">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
</div>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
</form>

<?php include 'includes/footer.php';?>

</body>
</html>

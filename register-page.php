<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="John Idogun">
  <title>Monitor | Register an account</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- main css -->
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images/logo.svg" alt="Monitor" width="180" height="100" />
      <h2>Registration form</h2>
      <p class="lead">
        Kindly input your correct credentials in the form below. This is just to keep record of the users accessing this web application.
      </p>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      require 'process-register-page.php';
    } // End of the main Submit conditional.
    ?>
    <form action="register-page.php" method="post" onsubmit="return checked();" class="needs-validation">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="first_name">First name</label>
          <input type="text" class="form-control" id="first_name" maxlength="30" name="first_name" value="<?php if (isset($_POST['first_name'])) {
                                                                                                            echo $_POST['first_name'];
                                                                                                          } ?>" required />
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="last_name">Last name</label>
          <input type="text" class="form-control" id="last_name" maxlength="40" name="last_name" required value="<?php if (isset($_POST['last_name'])) {
                                                                                                                    echo $_POST['last_name'];
                                                                                                                  } ?>" />
          <div class="invalid-feedback">Valid last name is required.</div>
        </div>
      </div>
      <div class="mb-3">
        <label for="email">Email </label>
        <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" maxlength="60" value="<?php if (isset($_POST['email'])) {
                                                                                                                                echo $_POST['email'];
                                                                                                                              } ?>" />
        <div class="invalid-feedback">
          Please enter a valid email address for shipping updates.
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="password1">Password</label>
          <input type="password" class="form-control" id="password1" name="password1" placeholder="Password" minlength="8" maxlength="12" required value="<?php if (isset($_POST['password1'])) {
                                                                                                                                                            echo $_POST['password1'];
                                                                                                                                                          } ?>" />
          <div class="invalid-feedback" id="passworderror">
            Valid password is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="password2">Confirm password</label>
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password" minlength="8" maxlength="12" required value="<?php if (isset($_POST['password2'])) {
                                                                                                                                                                    echo $_POST['password2'];
                                                                                                                                                                  } ?>" />
          <div class="invalid-feedback" id="passworderror">Password does not match.</div>
        </div>
      </div>
      <!-- <div class="custom-control custom-checkbox">
              <input
                type="checkbox"
                class="custom-control-input"
                id="save-info"
              />
              <label class="custom-control-label" for="save-info"
                >Accept and agree to policies and privacy</label
              >
            </div> -->

      <hr class="mb-4" />
      <button class="btn btn-success btn-lg btn-block" type="submit" name="submit">
        Register
      </button>

    </form>

    <?php
    if (!isset($errorstring)) {
    } else {
      echo '<p class="mt-5 mb-3 text-muted text-danger">';
    }
    ?>


  </div>


  <?php include 'includes/footer.php'; ?>

  <script>
    (function() {
      "use strict";

      window.addEventListener(
        "load",
        function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName("needs-validation");

          // Loop over them and prevent submission
          Array.prototype.filter.call(forms, function(form) {
            form.addEventListener(
              "submit",
              function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add("was-validated");
              },
              false
            );
          });
        },
        false
      );

      const checked = () => {
        if (
          document.getElementById("password1").value ==
          document.getElementById("password2").value
        ) {
          document.getElementById("passworderror").style.color = "green";
          document.getElementById("passworderror").innerHTML = "Passwords match";
          return true;
        } else {
          document.getElementById("passworderror").style.color = "red";
          document.getElementById("passworderror").innerHTML = "Passwords do not match";
          return false;
        }
      };
    })();
  </script>

</body>

</html>
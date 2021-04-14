<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner ">
      <img class="masthead-brand" src="images/logo.svg" alt="Monitor" width="100" height="100">
      <!-- <h3 class="masthead-brand">Monitor</h3> -->
      <nav class="nav nav-masthead justify-content-center" id='nav'>
        <a <?php if (stripos($_SERVER['REQUEST_URI'], 'index.php') !== false) {
              echo 'class="nav-link active"';
            } else {
              echo 'class="nav-link"';
            } ?> onclick="location.href='index.php'">Home</a>
        <a <?php if (stripos($_SERVER['REQUEST_URI'], 'register-view-users.php') !== false) {
              echo 'class="nav-link active"';
            } else {
              echo 'class="nav-link"';
            } ?> onclick="location.href='register-view-users.php'">Registers</a>
        <a <?php if (stripos($_SERVER['REQUEST_URI'], '#') !== false) {
              echo 'class="nav-link active"';
            } else {
              echo 'class="nav-link"';
            } ?> href="#">Contact</a>
        <a <?php if (stripos($_SERVER['REQUEST_URI'], 'login.php') !== false) {
              echo 'class="nav-link active"';
            } else {
              echo 'class="nav-link"';
            } ?> onclick="location.href='login.php'">Login</a>
        <a <?php if (stripos($_SERVER['REQUEST_URI'], 'register-page.php') !== false) {
              echo 'class="nav-link active"';
            } else {
              echo 'class="nav-link"';
            } ?> onclick="location.href='register-page.php'">Register</a>
      </nav>
    </div>
  </header>
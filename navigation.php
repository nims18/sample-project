<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#5C6BC0;">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="60" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">My Cart <i class="fas fa-shopping-cart"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="" data-toggle="modal" data-target="#loginModal">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#SignupModal">Sign Up</a>
      </li>
    </ul><br>
    <form class="form-inline f my-2 my-lg-0 w-50">
      <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search for products" aria-label="Search">
      <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
    </form>
<span class="navbar-text">
      <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/bcpofficialpage/" target="_blank"><i class="fb fab fa-facebook "></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="insta fab fa-instagram "></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="tweet fab fa-twitter "></i></a>
      </li>
    </ul>
    </span>
  </div>
</nav>

<?php
   include'modals.php';
?>
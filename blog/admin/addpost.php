<?php
//ensure $_SESSION can be accessed.
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tom Powell</title>
    <link rel="stylesheet" href="/styles\aboutmestyles.css">
    <link rel="stylesheet" href="/styles\styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/43d98386fa.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/">WebDevTom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-mobile" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-mobile">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="/#projects"><h4>Projects</h4> </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/aboutme"><h4>About</h4></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/contact"><h4>Contact</h4></a>
            </li>

          </ul>
        </div>
      </nav>
<div class="container">
  <div class="row justify-content-center">
    <?php
      //admin checks
      if (!isset($_SESSION["admin"])) {
        echo "Youre not the admin";
        exit();
      } ?>
  <?php
//query & error checks
  if (isset($_GET['query'])) {
    $queryCheck = $_GET['query'];
    if ($queryCheck == "uploadFailed" ) {
      echo "
      <div class='alert alert-danger alert-dismissible fade show text-center' role='alert' style='width: 40%;'>
        <p>Picture upload failed. Please try again and ensure it is less than 2MB and either a JPEG or PNG.</p>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      ";
    }
    if ($queryCheck == "empty" ) {
      echo "
      <div class='alert alert-danger alert-dismissible fade show text-center' role='alert' style='width: 40%;'>
        <p>Please ensure all the fields are filled out.</p>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      ";
    }
  };
  if (isset($_GET['success'])) {
    echo "
    <div class='alert alert-success alert-dismissible fade show text-center' role='alert' style='width: 40%;'>
      <p>Listing Added!</p>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    ";
  }
  if (isset($_GET['delete'])) {
    echo "
    <div class='alert alert-success alert-dismissible fade show text-center' role='alert' style='width: 40%;'>
      <p>Listing Deleted!</p>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    ";
  }
  ?>
</div>
  <div class="row justify-content-md-center m-3">
    <h2 class="m-3">Add new blog post</h2>
  </div>
  <div class="row justify-content-md-center">
    <div class="add-property-form">
      <?php
      echo "<form class='' action=";
      echo htmlspecialchars('../../includes/addblog.php');
      echo " method='POST' enctype='multipart/form-data'> "; ?>

          <div class='form-row'>
            <div class='form-group col-md-6'>
              <label for='title'>Title</label>
              <input type='text' name='title' class='form-control' id='' value=''>
            </div>
            <div class='form-group col-md-6'>
              <label for='author'>Author</label>
              <input type='text' name='author' class='form-control' id='' value=''>
            </div>
          </div>
          <div class="form-row">
            <div class='form-group col-md-12'>
              <label for='image_link'>Image URL</label>
              <input type='text' name='image_link' class='form-control' id='' value=''>
            </div>
          </div>
          <div class='form-row'>
            <div class='form-group col-md-12'>
              <label for='content_1'>Content Block 1</label>
              <textarea name='content_1' class='form-control' id='' rows='6'></textarea>
            </div>
            <div class='form-group col-md-12'>
              <label for='content_2'>Content Block 2</label>
              <textarea name='content_2' class='form-control' id='' rows='6'></textarea>
            </div>
        </div>

          <button type='submit' class='btn btn-danger btn-block'>Add Blog Post</button>
        </form>
      </div>
  </div>
</div>
<?php include "../../components/footer.php"?>

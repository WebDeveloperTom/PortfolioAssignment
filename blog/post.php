<?php
//ensure $_SESSION can be accessed.
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tom Powell</title>
    <link rel="stylesheet" href="../styles\aboutmestyles.css">
    <link rel="stylesheet" href="../styles\styles.css">
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
<?php
    include '../includes/config.php';
    if (isset($_GET['id'])) {
      // fetch the blog post of the id that was submitted
      $id = $_GET['id'];
      $sql = "SELECT * FROM dotdevblog WHERE id = '$id'";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result)){
        echo "
        <div class='aboutme-title'>
          <h3>$row[title]</h3>
          <h5>By $row[author], $row[created_at]</h5>
        </div>
        <main>
          <div class='aboutme-main'>
            <div class='photo'>
              <img src='$row[main_img]'>
            </div>
            <p>$row[content_1]</p>
            <br>
            <p>$row[content_2]</p>
          </div>
        ";
        }
    } else {
      echo "WHoops, something went wrong";
    }
     ?>
   </main>
   <footer>
     <div class="footer-icons">
       <a href="https://twitter.com/WebDeveloperTom" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
       <a href="https://www.linkedin.com/in/tom-powell-046474152/" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
       <a href="https://github.com/ThatLegenedTom"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
     </div>
     <p>Tom Powell 2019</p>
   </footer>
   </body>
   </html>

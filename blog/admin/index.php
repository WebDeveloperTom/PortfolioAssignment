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
    </header>
      <main>
        <?php
          //admin checks
          if (!isset($_SESSION["admin"])) {
            echo "Youre not the admin";
            exit();
          } ?>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 blog-main">
                <?php
                include '../../includes/config.php';
                if ($conn) {
                  $sql = "SELECT * FROM dotdevblog ORDER BY id DESC";
                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result)){
                    $condense = substr($row['content_1'], 0, 250)."...";
                  echo "
                    <div class='blog-post'>
                    <h2 class='blog-post-title'><a href='./post.php?id=$row[id]'>$row[title]</a></h2>
                    <p class='blog-post-meta'>$row[created_at] by <a href='#'>$row[author]</a></p>
                    <p>$condense</p>";
                  echo "
                    <div class='btn-group align-items-center d-flex justify-content-center'>
                    <button class='btn btn-info' onclick=location.href='./editpost.php?id=$row[id]' type='button'>Edit</button>
                    <form action='";
                  echo htmlspecialchars('/includes/deletepost.php');
                  echo "' method='POST'>
                    <input type='hidden' name='delete_id' value='$row[id]' />
                    <button type='submit' class='btn btn-danger btn-block'>DELETE</button>
                    </form>
                    </div>

                    </div>";
                    }
                  }
                ?>
              </div>
            </div>
          </div>
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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tom Powell</title>
    <link rel="stylesheet" href="../../styles\styles.css">
    <link rel="stylesheet" href="../../styles\project.css">
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
            <li class="nav-item">
              <a class="nav-link" href="/aboutme"><h4>About</h4></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact"><h4>Contact</h4></a>
            </li>

          </ul>
        </div>
      </nav>
    </header>
    <div class="project-title">
      <h3>Real Estate Site</h3>
      <h5>HTML / CSS / Bootstrap / PHP / SQL</h5>
    </div>
      <main>
        <div class="project-main">
          <div class="project-photo1">
            <img src="../../assests/realestatehome.jpg" alt="">
          </div>
          <p>For this project I was tasked with building a Real Estate website that connected to a SQL database. On top of that, the site need to have some form of signup/login functionallity, aswell as an
          admin panel for adding and editing property listings.</p>
          <br>
          <p>To help speed up the design process so I could focus on the functionallity of the site, I used Bootstrap to quickly pull a design together.</p>
          <div class="project-photo2">
            <img src="../../assests/realestatesignup.jpg" alt="">
          </div>
          <p>After designing the database schema, I first started to work on a signup form. When a user would attemt to sign up to the site, the code would check that the user had entered data into all the fields and that the username they had chosen was not already in the database.</p>
          <br>
          <p>The users password would be hashed for security and stored in the database. In the user database, there was a checkbox for whether each user had admin privilages or not. Whenever a user would try to access a restricted part of the site, it would double check the
          database to see if they had the privilages or not. </p>
          <div class="project-photo3">
            <img src="../../assests/realestateadmin.jpg" alt="">
          </div>
          <p>This site made lots of use of PHP WHILE loops. This allowed me to build lots of diffent templates once and have them be reused multiple times throughout the site. You can see the same loops being used within the admin panel as well as the main listings. </p>
          <p style="text-align: center; margin-top: 15px;">You can view the code on my <a href="https://github.com/WebDeveloperTom/PHP-Real-Estate-site">GitHub</a></p>
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

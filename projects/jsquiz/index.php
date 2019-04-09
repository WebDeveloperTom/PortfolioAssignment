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
      <h3>JS Quiz</h3>
      <h5>HTML / CSS / Vanilla JS </h5>
    </div>
      <main>
        <div class="project-main">
          <div class="project-photo1">
            <img src="../../assests/jsquiz.jpg" alt="">
          </div>
          <p>For this assignment, I was tasked with building a quiz application. This was created using HTML, CSS and plain Javascript. The quiz had to adhere to the following criteria: </p>
          <div class="project-photo2">
            <img src="../../assests/jsquiz2.jpg" alt="">
          </div>
          <ul>
            <li>The 10 questions provided must be used.</li>
            <li>The questions must be presented using in an easy to understand format with appropriate instructions.</li>
            <li>The questions are all multiple-choice so you must use radio buttons for presentation of the options.</li>
            <li>A user must be able to click a button to retrieve their score.</li>
            <li>A user must be required to attempt to answer all questions.</li>
            <li>You must display a user’s score out of 10 and 1 point must be added for each correct answer.</li>
            <li>You must show how you solved a problem within your project using structure diagrams, pseudo code or flow charts.</li>
            <li>Usability testing should involve functionality, presentation, readability, accessibility and fitness for purpose.</li>
          </ul>
          <div class="project-photo3">
            <img src="../../assests/jsquiz3.jpg" alt="">
          </div>
          <p>For this assignment, I used different sets of JS Loops to loop over an array of 10 questions, one by one.
            If a user answered a question incorrect, the application would record what question the user got wrong as well as their choice.
          </p>
          <br>
          <p>These results would be stored into another array which the app would again, loop over the array to display the incorrect questions and answers.</p>
          <p>I made use of a simple counter varible to keep track of the score which would then be checked against a highscore varible. If the user managed to beat their score, a congratz message would display. </p>
          <p style="text-align: center; margin-top: 15px;">You can view the code on my <a href="https://github.com/WebDeveloperTom/JSQuiz">GitHub</a></p>
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

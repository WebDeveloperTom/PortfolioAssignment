<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tom Powell</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/43d98386fa.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">WebDevTom</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-mobile" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-mobile">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#"><h4>Projects</h4> </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><h4>About</h4></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><h4>Contact</h4></a>
            </li>
          </ul>
        </div>
      </nav>
      <main>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 py-5">
                    <h1 class="text-center">Contact me today!</h1>
                    <p class="lead text-center">Whether it's work related or you just wanted to say hello, feel free to use the form below!</p>
                    <?php
                      echo "<form id='contact-form'action=";
                      echo htmlspecialchars('../includes/contactSubmit.php');
                      echo " method='post' role='form'> ";
                    ?>
                    <div class="messages"></div>
                      <div class="controls">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_name">Name</label>
                                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your name" required="required" data-error="Firstname is required.">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_number">Phone Number</label>
                                      <input id="form_number" type="text" name="phone" class="form-control" placeholder="Please enter your contact number" required="required" data-error="Lastname is required.">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_email">Email</label>
                                      <input id="form_email" type="email" name="mail" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="form_subject">Subject</label>
                                      <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Please enter the subject" required="required" data-error="Valid subject is required.">
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>

                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="form_message">Message</label>
                                      <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                                      <div class="help-block with-errors"></div>
                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <input type="submit"  class="btn btn-success btn-send" value="Send message">
                              </div>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
      </main>
      <div class="block"></div>
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

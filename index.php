<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet">
    <script src="https://use.fontawesome.com/8f61b97be3.js"></script>
    <title>Hagar Shilo's portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="my-css/css.css" rel="stylesheet">
    <link href="my-css/typing-animation.css" rel="stylesheet">
    <!--
    <link href="my-css/my-css2.css" rel="stylesheet">
    -->

  </head>
  <body>
<!-- Navbar-->
    <?php
      include("includes/head.html");
    ?>
    <div class="container">
      <!-- 1st row of columns -->
      <div class="row">
        <h1 class="display-4">Mini Projects</h1>
        <div class="col-md-4">
          <div class="thumbnail">
              <div>
                <h3>Lotto Numbers</h3>
                <p class="app-description">
                  <?php
                    $p1=file_get_contents("paragraphs/paragraph1.txt");
                    echo $p1;
                  ?>
                </p>
              </div>
              <div>
                  <a href=""><i class="fa fa-android fa-3x" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <div>
              <h3>JS Knowledge Quiz</h3>
              <p class="app-description">
                <?php
                  $p2=file_get_contents("paragraphs/paragraph2.txt");
                  echo $p2;
                ?>
              </p>
            </div>
            <div>
              <a href=""><i class="fa fa-android fa-3x" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="thumbnail">
            <div>
              <h3>ToDo List</h3>
              <p class="app-description">
                <?php
                  $p4=file_get_contents("paragraphs/paragraph3.txt");
                  echo $p4;
                ?>
              </p>
            </div>
            <div>
              <a href=""><i class="fa fa-android fa-3x" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>

      </div> <!-- /1st row -->

        <!-- 2nd row of columns -->
        <div class="row">
          <h1 class="display-4">Collaborative Effort</h1>

          <div class="col-md-4">
            <div class="thumbnail">
                <div>
                  <h3>Wikimedia</h3>
                  <p class="app-description">
                    <?php
                      $p4=file_get_contents("paragraphs/paragraph4.txt");
                      echo $p4;
                    ?>
                  </p>
                </div>
                <div>
                  <a href="//github.com"><i
                    class="fa fa-github fa-3x" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>

          <div class="col-md-4">
            <div class="thumbnail">
              <div>
                <h3>ANYWAY</h3>
                <p class="app-description">
                  <?php
                    $p5=file_get_contents("paragraphs/paragraph5.txt");
                    echo $p5;
                  ?>
                </p>
              </div>
              <div>
                <a href="//github.com"><i
                  class="fa fa-github fa-3x" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="thumbnail">
              <div>
                <h3>Familiar</h3>
                <p class="app-description">
                  <?php
                    $p6=file_get_contents("paragraphs/paragraph6.txt");
                    echo $p6;
                  ?>
                </p>
              </div>
              <div>
                <a href="//github.com/kamomil/Familiar"><i
                  class="fa fa-github fa-3x" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>

        </div> <!-- /2nd row -->

      <hr>

      <footer class="ftr-icons">
        <img src="" class="ftr-img">
        <div class="icon-holder">
          Contact / Follow:
          <a href="//www.linkedin.com/home?trk=nav_responsive_tab_home"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
          <a href="//github.com/strayblues"><i class="fa fa-github-alt fa-2x" aria-hidden="true"></i></a>
          <a href="//www.facebook.com/hagar.shilo"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
          <a href="mailto:strayblues@gmail.com"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-phone-square fa-2x" aria-hidden="true"></i></a>

        </div>
      </footer>

      <footer class="ftr-copy">
        <p>&copy; Hagar Shilo, 2016</p>
      </footer>
    </div> <!-- /container -->

    <?php
      include("includes/contact.php");
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>

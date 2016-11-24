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
    <script src="https://use.fontawesome.com/8f61b97be3.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|La+Belle+Aurore|Reenie+Beanie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Karla|Questrial" rel="stylesheet">
    <title>Hagar Shilo's Portfolio</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="my-css/graypink.css" rel="stylesheet">
    <link href="my-css/typing-animation.css" rel="stylesheet">
    <script src="my-js/validation.js"></script>
  </head>
  <body>
    <?php
      include("includes/head.html");
    ?>
    <img src="includes/paint.jpg" class="intro-img fade-in-block" width="100%" alt="" height="550">
    <div class="container fade-in-block">
      <?php
        include("includes/miniprojects.php");
      ?>
    </div>
    <div class="container fade-in-block">
      <?php
        include("includes/miniprojects2.php");
      ?>
    </div>
    <div class="container fade-in-block">
      <?php
        include("includes/contributions.php");
      ?>
    </div>
      <!-- icon footer -->
    <div class="container fade-in-block">
    <hr>
    <?php
      include("includes/fa-icons.php");
    ?>
      <footer class="ftr-copy">
        <p>&copy; Hagar Shilo, 2016</p>
      </footer>
    </div>
    <img src="includes/sea.jpg" class="fade-in-block" alt="" width="100%" height="550">

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="my-js/fade-in.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88935594-2', 'auto');
  ga('send', 'pageview');

  </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="favicon.ico">
    <meta name="description" content="Hagar's web and mobile portfolio">
    <meta name="author" content="Hagar Shilo">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <script src="https://use.fontawesome.com/8f61b97be3.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|La+Belle+Aurore|Reenie+Beanie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Karla|Questrial" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet">
    <title>Hagar Shilo's Portfolio</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="my-css/theme2.css" rel="stylesheet">
  </head>
  <body>
    <?php
      include("includes/head.html");
    ?>
    <div class="container">
      <?php
        include("includes/projects1.php");
      ?>
    </div>
    <div class="container fade-in-block">
      <?php
        include("includes/projects2.php");
      ?>
    </div>
    <!-- skills and such -->
    <div class="container fade-in-block">
      <?php
        include("includes/aboutme.php");
      ?>
    </div>
    <!-- contact form -->
    <div class="container fade-in-block">
      <?php
        include("includes/aboutyou.php");
      ?>
    </div>
      <!-- icon footer -->
    <div class="container fade-in-block">
    <hr>
    <?php
      include("includes/fa-icons.php");
    ?>
      <footer class="ftr-copy">
        <p>&copy; Hagar Shilo 2016</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script><!-- Tether for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script src="my-js/main.js"></script>
  </body>
</html>

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
    <link rel="icon" href="favicon.ico">
    <meta name="description" content="Hagar's web and mobile portfolio">
    <meta name="author" content="Hagar Shilo">
    <script src="https://use.fontawesome.com/8f61b97be3.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
    <title>Hagar Shilo's Portfolio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
  </head>
  <body>
  <div class="wrapper">
    <?php
      include("includes/head.html");
    ?>
    <!-- <div class="container projects">
      <?php
        include("includes/intro.php");
      ?>
    </div> -->
    <!-- skills and such -->
    <div class="container about-container">
      <?php
        include("includes/aboutme.php");
      ?>
    </div>
    <div class="container projects mandala">
      <?php
        include("includes/projects-mandala.php");
      ?>
    </div>
    <div class="container projects">
      <?php
        include("includes/projects-apis.php");
      ?>
    </div>
    <div class="container projects">
      <?php
        include("includes/projects-more.php");
      ?>
    </div>
    <div class="container projects">
      <?php
        include("includes/projects-small.php");
      ?>
    </div>
      <!-- icon footer -->
    <div class="container">
    <hr>
    <?php
      include("includes/fa-icons.php");
    ?>
      <footer class="ftr-copy">
        <p>&copy; Hagar Shilo 2019</p>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </div>
  </body>
</html>

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
<!--    <link href="https://fonts.googleapis.com/css?family=Alef" rel="stylesheet"> -->
    <script src="https://use.fontawesome.com/8f61b97be3.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>Hagar Shilo's portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="my-css/css-greenpink.css" rel="stylesheet">
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
      <?php
        include("includes/contributions.html");
      ?>
      <!-- 2nd row of columns -->
    <?php
      include("includes/miniprojects.html");
    ?>
    <hr>
    <!-- Contact form -->
    <?php
      include("includes/contact2.php");
    ?>
    <hr>
      <!-- icon footer -->
      <?php
        include("includes/fa-icons.php");
      ?>

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

<h1 class="display-4">Other Projects</h1>
<div class="row">

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Fidget Spinner</h3>
        <p class="app-description-white">
          <?php
            $p4=file_get_contents("paragraphs/spinner.html");
            echo $p4;
          ?>
        </p>
      </div>
        <a href="http://spinner.hagarsh.com/" target="_blank"><img class="img-thumb" src="images/spinner.png"></a>
      <!--
      <div>
        <a target="_blank" href="https://github.com/strayblues/spinner">
          <i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    -->
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Github user search</h3>
        <p class="app-description-white">
          <?php
            $p4=file_get_contents("paragraphs/search.txt");
            echo $p4;
          ?>
        </p>
      </div>
      <a target="_blank" href="http://searchgithub.hagarsh.com"><img class="img-thumb" src="images/search.png"></a>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Color Game</h3>
        <p class="app-description-white">
          <?php
            $p1=file_get_contents("paragraphs/colorgame.txt");
            echo $p1;
          ?>
        </p>
      </div>
        <a target="_blank" href="http://colorgame.hagarsh.com"><img class="img-thumb" src="images/color.png"></a>
    </div>
  </div>
</div>

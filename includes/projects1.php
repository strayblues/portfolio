<h1 class="display-4">My Work</h1>
<div class="row row-projects">
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Mandala
        <span>
          <a target="_blank" href="https://github.com/strayblues/mandala"><i class="fa fa-github" aria-hidden="true"></i></a>
        </span>
        </h3>
        <div class="first">
          <a id="popup-mandala" href="#"><img class="img-thumb" src="images/mandala.png"></a>
        </div>
          <?php
            $p5=file_get_contents("paragraphs/mandala.html");
            echo $p5;
          ?>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>JS Quiz
          <span>
            <a target="_blank" href="https://github.com/strayblues/android-js-quiz"><i class="fa fa-github" aria-hidden="true"></i></a>
          </span>
        </h3>
        <div class="first">
          <a id="popup-quiz" href="#"><img class="img-thumb" src="images/jsquiz-half.png"></a>
        </div>
        <p id="slide-down" class="app-description-white">
          <?php
            $p2=file_get_contents("paragraphs/quiz.html");
            echo $p2;
          ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Color Game
          <span>
            <a target="_blank" href="https://github.com/strayblues/color-game"><i class="fa fa-github" aria-hidden="true"></i></a>
          </span>
        </h3>
        <div class="first">
          <a target="_blank" href="http://colorgame.hagarsh.com"><img class="img-thumb" src="images/colorz.png"></a>
        </div>
        <p class="app-description-white">
          <?php
            $p1=file_get_contents("paragraphs/colorgame.txt");
            echo $p1;
          ?>
        </p>
      </div>
    </div>
  </div>

</div> <!-- /Row -->

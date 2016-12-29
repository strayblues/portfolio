<h1 class="display-4">My Work</h1>
<div class="row row-projects">
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Mandala</h3>
        <p class="app-description-white">
          <?php
            $p5=file_get_contents("paragraphs/mandala.txt");
            echo $p5;
          ?>
        </p>
      </div>
      <div>
        <a href="https://strayblues.github.io/mandala/"><i class="fa fa-desktop fa-4x" aria-hidden="true"></i></a>
        <a href="https://github.com/strayblues/mandala"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Quiz</h3>
        <p class="app-description-white">
          <?php
            $p2=file_get_contents("paragraphs/quiz.txt");
            echo $p2;
          ?>
        </p>
      </div>
      <div>
        <a href=""><i class="fa fa-android fa-4x" aria-hidden="true"></i></a>
        <a href="https://github.com/strayblues/android-js-quiz"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <div>
        <h3>Lotto</h3>
        <p class="app-description-white">
          <?php
            $p4=file_get_contents("paragraphs/lotto.txt");
            echo $p4;
          ?>
        </p>
      </div>
      <div>
        <a href=""><i class="fa fa-android fa-4x" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</div>

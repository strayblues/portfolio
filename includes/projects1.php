<h1 class="display-4">My Work</h1>
<div class="row row-projects">
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Mandala</h3>
        <div class="first">
          <a id="popup-mandala" href="#" href="https://strayblues.github.io/mandala/"><i class="fa fa-desktop fa-4x" aria-hidden="true"></i></a>
          <a href="https://github.com/strayblues/mandala"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
        </div>
        <p class="app-description-white">
          <?php
            $p5=file_get_contents("paragraphs/mandala.html");
            echo $p5;
          ?>
        </p>
        <div class="container mandala-img col-sm-12">
            <img src="images/cake.png" alt="cake mandala" width=100%>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>JavaScript Quiz</h3>
        <div class="first">
          <a id="popup-quiz" href="#"><i class="fa fa-desktop fa-4x" aria-hidden="true"></i></a>
          <a href="https://github.com/strayblues/android-js-quiz"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
        </div>
        <p class="app-description-white">
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
        <h3>External Bagrut Info</h3>
        <div class="first">
          <a href="//externit.hagarsh.com"><i class="fa fa-desktop fa-4x" aria-hidden="true"></i></a>
          <a href="https://github.com/strayblues/external-bagrut"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
        </div>
        <p class="app-description-white">
          <?php
            $p6=file_get_contents("paragraphs/externit.txt");
            echo $p6;
          ?>
        </p>
      </div>
    </div>
  </div>

</div>

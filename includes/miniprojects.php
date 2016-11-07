<div class="row">
  <h1 class="display-4">Mini Projects</h1>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>JavaScript Knowledge Quiz</h3>
        <p class="app-description-white">
          <?php
            $p2=file_get_contents("paragraphs/paragraph2.txt");
            echo $p2;
          ?>
        </p>
      </div>
      <div>
        <a href=""><i class="fa fa-android fa-4x" aria-hidden="true"></i></a>
        <a href="https://github.com/strayblues/js-quiz"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Expense Tracker</h3>
        <p class="app-description-white">
          <?php
            $p1=file_get_contents("paragraphs/paragraph7.txt");
            echo $p1;
          ?>
        </p>
      </div>
      <div>
        <a href=""><i class="fa fa-android fa-4x" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <div>
        <h3>Converter</h3>
        <p class="app-description-white">
          <?php
            $p4=file_get_contents("paragraphs/paragraph3.txt");
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

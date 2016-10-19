<div class="row row-contrib">
  <h1 class="display-4">Collaborative Work</h1>

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
            class="fa fa-github fa-4x" aria-hidden="true"></i></a>
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
          class="fa fa-github fa-4x" aria-hidden="true"></i></a>
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
          class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

</div>

<h1 class="display-4">More Stuff</h1>
<div class="row">

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>YouTube Search</h3>
        <p class="app-description-white">
          <?php
            $p4=file_get_contents("paragraphs/youtube.html");
            echo $p4;
          ?>
        </p>
      </div>
        <a href="https://enigmatic-harbor-80585.herokuapp.com/" target="_blank"><img class="img-thumb" src="images/youtube.png"></a>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Github User Search</h3>
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
        <h3>External Bagrut Info</h3>
        <p class="app-description-white">
          <?php
            $p6=file_get_contents("paragraphs/externit.txt");
            echo $p6;
          ?>
        </p>
        <a href="http://externit.hagarsh.com/" target="_blank"><img class="img-thumb" src="images/externit.png"></a>
      </div>
    </div>
  </div>

</div>

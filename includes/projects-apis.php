<h1 class="display-4">Web APIs</h1>
<div class="row">

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>YouTube</h3>
        <p class="app-description-white">
          <?php
            $p4=file_get_contents("paragraphs/youtube.html");
            echo $p4;
          ?>
        </p>
      </div>
        <a href="https://enigmatic-harbor-80585.herokuapp.com/" target="_blank"><img class="img-thumb" src="images/yt.png"></a>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Github Users</h3>
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
        <h3>Flickr Gallery</h3>
        <p class="app-description-white">
          <?php
            $p6=file_get_contents("paragraphs/flickr.txt");
            echo $p6;
          ?>
        </p>
        <a href="http://flickrgallery.hagarsh.com/" target="_blank"><img class="img-thumb" src="images/flickr.png"></a>
      </div>
    </div>
  </div>

</div>

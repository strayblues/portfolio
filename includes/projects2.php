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
      <div class="iframe-container">
        <iframe src="http://spinner.hagarsh.com/" width="250%" height="475px"
                style="-webkit-transform:scale(0.45);-moz-transform-scale(0.45);">
        </iframe>
      </div>
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
        <h3>Angular 2 ToDo List</h3>
        <p class="app-description-white">
          <?php
            $p4=file_get_contents("paragraphs/ng.txt");
            echo $p4;
          ?>
        </p>
      </div>
      <div>
        <a target="_blank" href="https://github.com/strayblues/first-angular-project">
          <i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>django Blog App</h3>
        <p class="app-description-white">
          <?php
            $p1=file_get_contents("paragraphs/django.txt");
            echo $p1;
          ?>
        </p>
      </div>
      <div>
        <a target="_blank" href="https://github.com/strayblues/my-first-blog">
          <i class="fa fa-github fa-4x" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</div>

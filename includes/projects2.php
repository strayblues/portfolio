<h1 class="display-4">Workshop Projects</h1>
<div class="row">
  <div class="col-md-6">
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
        <a href=""><i class="fa fa-android fa-4x" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>django Blog</h3>
        <p class="app-description-white">
          <?php
            $p1=file_get_contents("paragraphs/django.txt");
            echo $p1;
          ?>
        </p>
      </div>
      <div>
        <a href=""><i class="fa fa-desktop fa-4x" aria-hidden="true"></i></a>
        <a href="https://github.com/strayblues/my-first-blog">
          <i class="fa fa-github fa-4x" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</div>

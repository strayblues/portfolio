<div class="row">
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>External Bagrut Community</h3>
        <p class="app-description-white">
          <?php
            $p6=file_get_contents("paragraphs/externit.txt");
            echo $p6;
          ?>
        </p>
      </div>
      <div>
        <a href="//externit.hagarsh.com"><i class="fa fa-desktop fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Familiar</h3>
        <p class="app-description-white">
          <?php
            $p6=file_get_contents("paragraphs/familiar.txt");
            echo $p6;
          ?>
        </p>
      </div>
      <div>
        <a href="https://github.com/kamomil/familiar"><i class="fa fa-github fa-4x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail thumbnail-mid">
      <div>
        <h3>Blog</h3>
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

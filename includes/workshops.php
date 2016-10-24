<div class="row class="app-description-white"">
  <h1 class="display-4">Workshops</h1>
    <div class="col-md-6">
      <div class="thumbnail">
        <div>
          <h3>Django Girls</h3>
            <p>
              <?php
                $p2=file_get_contents("paragraphs/django.html");
                echo $p2;
              ?>
            </p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="thumbnail">
        <div>
          <h3>ngGirls</h3>
            <p>
              <?php
                $p1=file_get_contents("paragraphs/ng.html");
                echo $p1;
              ?>
            </p>
        </div>
      </div>
    </div>
</div>

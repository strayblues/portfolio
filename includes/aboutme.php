
<div class="row">
  <div class="col-md-12">
    <div class="about">
      <h1 class="display-4">About Me</h1>
      <p>
        <?php
          $p1=file_get_contents("includes/skills.php");
          echo $p1;
        ?>
      </p>
      <p>
        <?php
          $p1=file_get_contents("includes/edu-contact.php");
          echo $p1;
        ?>
      </p>

    </div>
  </div>
</div>

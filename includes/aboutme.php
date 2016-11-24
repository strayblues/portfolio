
<div class="row">
  <div class="col-md-12">
    <div class="thumbnail about">
      <h1 class="display-4">About Me</h1>
      <p>
        <?php
          $p1=file_get_contents("paragraphs/aboutme.html");
          echo $p1;
        ?>
      </p>
    </div>
<!--
    <div class="icon-holder icon-holder-top about">
      <i class="fa fa-html5" aria-hidden="true"></i>
      <i class="fa fa-css3" aria-hidden="true"></i>
      <i class="fa fa-coffee" aria-hidden="true"></i>
      <i class="fa fa-wifi" aria-hidden="true"></i>
    </div>
-->
  </div>
</div>

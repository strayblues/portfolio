<?php

if ($_POST['submit']) {
  if (!$_POST['name']){
    $error="<br/>What is your name?";
  }
  if (!$_POST['email']){
    $error.="<br/>What's your email address?";
  }
  if (!$_POST['msg']){
    $error.="<br/>Did you write your message?";
  }
  if ($error) {
    $result="Something is missing: $error";
  } else {
      mail("strayblues@gmail.com", "Contact message",
      "Name: ".$_POST['name'].
      "Email: ".$_POST['email'].
      "Message: ".$_POST['msg']);
      {
      $result="Sent!";
      }
  }
}
?>

<div class="row row-about">

  <div class="col-md-3">
  </div>

  <div class="col-md-6">
    <div class="modal-content">
      <form class="form-horizontal" method="post" action="index.php" role="form">
        <div class="modal-header">
          <h4 class="modal-light">ABOUT YOU</h4>
          <div class="validation">
            <?php
              echo $result;
            ?>
          </div>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <div class="col-lg-12">
              <input type="text" name="name" class="form-control"
                id="contact-name" placeholder="Your name"
                value="<?php echo $_POST['name'];?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <input type="email" name="email" class="form-control"
                id="contact-email" placeholder="you@example.com"
                value="<?php echo $_POST['email'];?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-12">
              <textarea class="form-control" rows="8" placeholder=
                              "Your message..." name="msg"><?php
                echo $_POST['msg'];
              ?></textarea>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button class="btn btn-primary btn-sm" type="submit" value=
                        "Send" name="submit">Send</button>
        </div>

    </form>
    </div>
  </div>

</div>

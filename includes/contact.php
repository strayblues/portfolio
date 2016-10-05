<?php

if ($_POST['submit']) {
  if (!$_POST['name']){
    $error="<br/>Wait, what is your name?";
  }
  if (!$_POST['email']){
    $error.="<br/>What's your email address?";
  }
  if (!$_POST['msg']){
    $error.="<br/>Did you write your message?...";
  }
  if (!$_POST['check']){
    $error.="<br/>Are you human or not?!";
  }
  if ($error) {
    $result="There's a problem: $error";
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

<div class="modal fade" id="contact" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-horizontal" method="post" action="index.php" role="form">
        <div class="modal-header">
          <h4>Contact me</h4>
          <?php
            echo $result;?>
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
              <textarea class="form-control" rows="8" placeholder="Your message..." name="msg"><?php
                echo $_POST['msg'];
              ?></textarea>
            </div>
          </div>

          <div class="checkbox">
            <label for="checkbox">
              <input type="checkbox" name="check">I am human
            </label>
          </div>
        </div>

        <div class="modal-footer">
          <button class="btn btn-primary btn-sm" type="submit" value="Submit" name="submit">Send</button>
          <a class="btn btn-default btn-sm" data-dismiss="modal">Cancel</a>
        </div>

    </form>
    </div>
  </div>
</div>

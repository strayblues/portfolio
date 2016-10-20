<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="validate-test.js"></script>

  </head>
  <body>
    <div class="contact-form">
      <input type="text" id="name" placeholder="Your name" value="">
      <br/>
      <input type="email" id="email" placeholder="Your email" value="">
      <br/>
      <textarea type="text" rows="8" id="msg" placeholder="Your message..."></textarea>

    </div>

    <div>
      <button type="submit" value="Send" onclick="isValidForm()">Send</button>
    </div>
    <div class="confirm"></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  </body>
</html>

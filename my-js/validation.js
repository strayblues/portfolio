
function isValidName(){
  if ($("#name").val().length > 0) {
    return "";
  }
  else return "What is your name?<br/>";
}

function isValidEmail(email) {
  var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  if (!filter.test($("#email").val()))  {
      return "What is your email address?<br/>";
  }
  else return "";
}

function isValidMessage(){
  if ($("#msg").val().length > 0) {
    return "";
  }
  else return "What is your message?";
}

function isValidForm(){
  var error = isValidName()+isValidEmail()+isValidMessage();
  if (error.length > 0){
    $(".confirm").html(error);
  }
  else {
    //TODO Write server side in order to actually send an email
    //Fake confirmation, for now...
    $(".confirm").html("Sent!");
  }
}

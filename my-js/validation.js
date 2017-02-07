/*
function isValidName(){
  if ($("#n").val().length > 0) {
    return "";
  }
  else return "What is your name?<br/>";
}

function isValidEmail(email) {
  var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  if (!filter.test($("#e").val()))  {
      return "What is your email address?<br/>";
  }
  else return "";
}

function isValidMessage(){
  if ($("#m").val().length > 0) {
    return "";
  }
  else return "What is your message?";
}

function isValidForm(){
  var error = isValidName()+isValidEmail()+isValidMessage();
  if (error.length > 0){
    $(".status").html(error);
  }
  else {
    //TODO Write server side in order to actually send an email
    //Fake confirmation, for now...
    $(".status").html("Sent!");
  }
}
*/

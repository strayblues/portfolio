$(document).ready(
function(){
  $("#validation").load("errors.txt", showErrors);


});


function check_username(username){
  $.ajax({
    url:"ajaxserverside.php?username="+username,
    success:function(result){
      $("#msg").html(result);
    }
  });
}

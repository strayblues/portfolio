<div class="row row-about about">
  <div class="col-md-6">
    <h2>Education</h2>
    <ul>
      <li>Certificate of Front End Development (Inc. mobile web dev), Holon Institute of Technology, 2016</li>
      <li>Bachelor of Arts in Linguistics, The Hebrew University of Jerusalem, 2015</li>
    </ul>
  </div>


    <script>
    // Use "_" to save time, space and typing
    function _(id){ return document.getElementById(id); }

    // Our submit function
    function submitForm(){
  	_("send").disabled = true; // The user can't double click the btn
    $(".status").html("<p>Please wait...</p>");
  //	_("status").innerHTML = 'Please wait...';
  	var formdata = new FormData(); // An object
  	formdata.append( "n", _("n").value ); // The value is what the use typed in
  	formdata.append( "e", _("e").value );
  	formdata.append( "m", _("m").value );
  	var ajax = new XMLHttpRequest();
  	ajax.open( "POST", "parser.php" );
  	ajax.onreadystatechange = function() {
  		if(ajax.readyState == 4 && ajax.status == 200) {
  			if(ajax.responseText == "success"){
          // Confirm that the email was sent
          $(".status").html('<p>Thanks '+_("n").value+', your message has been sent.</p>');
          setTimeout(function(){_("send").disabled=false}, 5000);
  			} else { // In the event of data processing failure:
          // Output a msg about why the email wasn't sent
  				$(".status").html(ajax.responseText);
          // Re-enable the buttons so user can try again
  				_("send").disabled = false;
  			}
  		}
  	}
  	ajax.send( formdata );
  }
    </script>
  <div class="row row-form">
    <div class="col-md-6">
      <div class="modal-content-inner">
        <div class="contact-form form-horizontal">
          <div class="modal-header">
            <h2 class="modal-header-inner">Contact me</h2>
            <form id="my_form" onsubmit="submitForm(); return false;">
              <div class="form-group">
                <div class="col-lg-12">
                  <input type="text" id="n" placeholder="Your name" class="form-control" required>
                </div>
              </div><!--/form-group-->
              <div class="form-group">
                <div class="col-lg-12">
                  <input type="email" id="e" placeholder="you@example.com" class="form-control" required>
                </div>
              </div><!--/form-group-->
              <div class="form-group">
                <div class="col-lg-12">
                  <textarea type="text" rows="7" id="m" placeholder="Your message..." class="form-control" required></textarea>
                </div>
              </div><!--/form-group-->
          </div>
            <div class="modal-footer">
              <button class="btn btn-primary btn-sm" id="send" type="submit"
                value="Send">Send</button>
            </div>
            <div class="status"></div>
          </div><!--/form class-->
        </form>
      </div> <!-- /modal content -->
    </div>
  </div>




  </div>
</div>

<!--
    <img src="images/unicorn_duckie.png" alt="Unicorn duckie" style="float: right; width: 90%;"></img>
-->

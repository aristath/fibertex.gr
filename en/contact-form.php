<?php 

function contact_form(){
	
// check for a successful form post
	if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";

// check for a form error
	elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";

//actual HTML form
?>
<section class="span6" style="margin-left: 0px;">
  <form method="post" action="./contact-form-submission.php">
    <div class="control-group">
      <label class="control-label" for="inputEmail"><i class="icon-user"></i> Full Name</label>
      <div class="controls controls-row">
        <input type="text" class="input-xxlarge" style="width: 100% !important;" id="inputEmail" name="contact_name" placeholder="Your full name">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
      <div class="controls">
        <input type="text" class="input-xxlarge" style="width: 100% !important;" id="inputEmail" name="contact_email" placeholder="you@yourdomain.com">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="inputEmail"><i class="icon-question-sign"></i> Subject</label>
      <div class="controls">
        <input type="text" class="input-xxlarge" style="width: 100% !important;" id="inputSubject" name="contact_subject" placeholder="Subject">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="inputEmail"><i class="icon-pencil"></i> Message</label>
      <div class="controls">
        <textarea rows="6" class="input-xxlarge" name="contact_message" style="width: 100% !important;" placeholder="Your Message"></textarea>
      </div>
    </div>
    
    <div class="control-group">
      <div class="controls">
      	<input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Send</button>
      </div>
    </div>
  </form>
  <br class="clear">
</section><!-- end left -->

<?php
}
?>

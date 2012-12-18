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
      <label class="control-label" for="inputEmail"><i class="icon-user"></i> Ονοματεπώνυμο</label>
      <div class="controls controls-row">
        <input type="text" class="input-xxlarge" style="width: 100% !important;" id="inputEmail" name="contact_name" placeholder="Το πλήρες ονοματεπώνυμό σας">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
      <div class="controls">
        <input type="text" class="input-xxlarge" style="width: 100% !important;" id="inputEmail" name="contact_email" placeholder="you@yourdomain.com">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="inputEmail"><i class="icon-question-sign"></i> Θέμα</label>
      <div class="controls">
        <input type="text" class="input-xxlarge" style="width: 100% !important;" id="inputSubject" name="contact_subject" placeholder="Θέμα">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="inputEmail"><i class="icon-pencil"></i> Μήνυμα</label>
      <div class="controls">
        <textarea rows="6" class="input-xxlarge" name="contact_message" style="width: 100% !important;" placeholder="Το κείμενό σας"></textarea>
      </div>
    </div>
    
    <div class="control-group">
      <div class="controls">
      	<input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Αποστολή</button>
      </div>
    </div>
  </form>
  <br class="clear">
</section><!-- end left -->

<?php
}
?>

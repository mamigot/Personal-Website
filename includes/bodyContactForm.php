<?php
//Includes the contact form
//Place within Bootstrap's <div class="container"> tags
//==============================================================

function contactForm() {
return <<<HTML
    <div class="page-header">
      <h1>Send me a message! </h1>
    </div> 
    <br>
    <form class="form-horizontal" role="form" action="includes/formEmailContactMe.php" method="POST">
      <div class="form-group">
        <label for="name" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name="name" placeholder="Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="email" class="form-control" name="from" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="message" class="col-lg-2 control-label">Message</label>
        <div class="col-lg-10">
          <textarea class="form-control" rows="3" name="message" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
     </form>
HTML;
}


?>
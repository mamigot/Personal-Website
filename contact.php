<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/head.php');
      echo metaTags();
      echo headerStylesheets();
      echo headerScripts();
    ?>
    
    <title>Contact</title>
    
  </head>

  <body>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyNavBar.php');
      echo navAndAddThis();
    ?>

    
    <div class="container">
    
      <?php
      //Check if the contact form failed because the message was just whitespace / string of spaces
      if(isset($_GET['alert'])){
        if($_GET['alert'] == 'empty-message'){
        echo <<<HTML
          <div class="bs-callout bs-callout-warning">
            <h4>Message Send Failure</h4>
            <p>The body of the message can't be empty!</p>
          </div>
HTML;
        }else{
          //$_GET['alert'] is set but not to anything that we know about
          echo <<<HTML
          <div class="bs-callout bs-callout-warning">
            <h4>Message Send Failure</h4>
            <p>Your message could not be sent at the moment. Please email me at ma2786@nyu.edu !</p>
          </div>
HTML;
        }
      }
      ?>
    
      <?php
        require_once($DOCUMENT_ROOT. 'includes/bodyContactForm.php');
        echo contactForm();
      ?>
      
    </div> <!-- /container -->


    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyScripts.php');
      echo bootstrapBodyScript();
      echo googleAnalytics();
    ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/head.php');
      echo metaTags();
      echo headerStylesheets();
      echo headerScripts();
    ?>
    
    <title>Thank you - CMS</title>
    
  </head>

  <body>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyNavBar.php');
      echo navAndAddThis();
    ?>

     <div class="jumbotron">
      <div class="container">
        <h1>Unsuccessful DB Modification</h1>
        <p>You have not been able to modify the database. </p>
        <p><a class="btn btn-primary btn-lg" href="http://www.miguelamigotgonzalez.com/blog.php">Go to blog &raquo;</a>
      </div>
    </div>
     
    <div class="container">
     <?php
        require_once($DOCUMENT_ROOT. 'includes/bodyMainThreeBlocks.php');
        echo mainThreeBlocks();
      ?>


    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyScripts.php');
      echo bootstrapBodyScript();
      echo googleAnalytics();
    ?>
  </body>
</html>

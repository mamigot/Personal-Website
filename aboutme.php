<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/head.php');
      echo metaTags();
      echo headerStylesheets();
      echo headerScripts();
    ?>
    
    <title>About Me</title>
    
  </head>

  <body>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyNavBar.php');
      echo navAndAddThis();
    ?>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-3">
                <img class="thumbnail" src="data/images/mikelConfirmacion.png"/>
            </div>
            <div class="col-lg-9">
                <h1>About Me</h1>
                <p class="lead">My name is Miguel Amigot Gonzalez and I study Computer Science and Electrical Engineering at New York University. I am fascinated by technology and entrepreneurship and my goal is to develop a product for the public good.</p>
                <p class="lead">What I truly enjoy about Engineering is the design of algorithms as well as the organization and infrastructure of systems: anything from the circuit of an <a href="http://en.wikipedia.org/wiki/Radio-frequency_identification#Tags">RFID tag</a> using transformers and diodes to a scalable API or web service that reads and analyzes data. I'm particularly keen on designing modular, efficient and automized systems, and this is what I intend to continue to learn.</p>
                <p>
                  <a class="btn btn-lg btn-primary" href="http://www.miguelamigotgonzalez.com/contact.php">Contact me &raquo;</a>
                </p>
            </div>
        </div>
        <br>
        <br>
        <h1>Interests</h1>
        <p class="lead">Engineering fascinates me because of the opportunities it provides to make a difference in the world, and I am working to become a great developer and engineer to rise to a position wherein I will be able to do so. </p>
        <p class="lead">Knowledge about business, economics and society is crucial for an entrepreneur. I love to learn every day from sites like <a href="https://news.ycombinator.com/">Hacker News</a>, fluent across a variety of disciplines and rich with the latest and most interesting stories. </p>
        <p class="lead">I am also intrigued by philosophy, literature and religion. I believe that the humanities provide science with an increasingly relevant perspective in our technology-driven world. </p>
        <p>
          <a class="btn btn-lg btn-primary" href="blog.php">Check out my blog &raquo;</a>
        </p>
        
        <br><br>
    
        <?php
          require_once($DOCUMENT_ROOT. 'includes/bodyResume.php');
          echo resumeAccordion();
        ?>
        
        
        <br>
      
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

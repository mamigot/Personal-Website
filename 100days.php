<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/head.php');
      echo metaTags();
      echo headerStylesheets();
      echo headerScripts();
    ?>
    
    <title>100 Days of Algorithms</title>
    
  </head>

  <body>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyNavBar.php');
      echo navAndAddThis();
    ?>

    <div class="jumbotron">
      <div class="container">
        <h1>100 Days of Algorithms</h1>
        <p>Inspired by <a href="http://blog.jenniferdewalt.com/post/56319597560/im-learning-to-code-by-building-180-websites-in-180">this</a> and by the fact that I'd like to get better at algorithms, I'm learning to implement 100 algorithms in 100 days following <a href="http://www.algorist.com/"><i>The Algorithm Design Manual</i></a>.</p>
        <p><a href="https://github.com/miguel5/100-Days-of-Algorithms" class="btn btn-primary btn-lg">View the code on Github &raquo;</a></p>
      </div>
    </div>
    <div class="container">
        
        <div class="row">
          <div class="col-lg-12">
            <a name="next"></a><h2>9.30.2014: <b>Day 0</b></h2>
          </div>
        </div>
        
        <!--
        <br><br>
        <div class="row">
          <div class="col-lg-12">
              <a name="About.com"></a><h2>About.com</h2>
              <p class="lead">Last summer, I interned at <a href="http://about.com">About.com</a> in New York. It was incredible (a longer description is coming, friends).</p>
              <p class="lead"></p>
          </div>
        </div>
        
        <br><br>
        <div class="row">
          <div class="col-lg-12">
            <a name="IBLStudios"></a><h2>IBL Studios Education</h2>
            <p class="lead">I've teamed up with my father and a group of developers, videographers and marketing specialists across the United States and Europe through <a href="http://iblstudios.com/">IBL Studios</a> to bring the latest tech innovations to academic institutions and businesses.</p>
            <p class="lead">Our mission is to provide organizations with the latest educational technology and content, including open source or custom-built platforms, marketing-oriented web development and the production of MOOCs and blended courses. One of our favorite products is the open source, amazing <a href="http://iblstudios.com/products_services/open-source-platforms/open-edx/">edX platform</a> for online courses, which we fully integrate and maintain for educational institutions and businesses that rely on workforce training programs.</p>
          </div>
        </div>
        -->
        
        <br>
                
    </div>
      
    <br><br><hr>


    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyScripts.php');
      echo bootstrapBodyScript();
      echo googleAnalytics();
    ?>
  </body>
</html>

<?php
//Reroute to the last post if none has been set
//e.g. if URL is just miguelamigotgonzalez.com/blog.php
if(!isset($_GET['post'])){
  require_once($DOCUMENT_ROOT. 'includes/blogQueriesDb.php');
  //giveLastPost() returns the URL of the last post
  $locationString = 'Location: http://www.miguelamigotgonzalez.com/blog.php?post='.giveLastPost();
  header($locationString);
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/head.php');
      echo metaTags();
      echo headerStylesheets();
      echo headerScripts();
    ?>
    
    <title>Miguel Amigot Gonzalez</title>

  </head>

  <body>
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyNavBar.php');
      echo navAndAddThis();
    ?>
  
    <div class="container">
      <div class="page-header">
        <h4>I am an entrepreneur and a student of Electrical Engineering and Computer Science at New York University. I write about start-ups, web development and engineering.</h4>
      </div>
    </div>
    
    <div class="welcomeHomies">
      
        <div class="container">
            <p>
              
              
            <!-- View all posts: Button trigger modal (repeated below)-->
            <?php
              //Modal block (button and listing of all blog posts)
              require_once($DOCUMENT_ROOT. 'includes/bodyModal.php');
            ?>
            <!-- end of View all posts modal -->
            
            
            </p>
    
            
    <!-- START OF BLOG POST -->
    
    
    <?php
    
    //Do we want the latest blog post or a specific one?
    require_once($DOCUMENT_ROOT. 'includes/blogQueriesDb.php');
    //postURL is an encoded version of the post's title
    $postURL = $_GET['post'];
    if(isset($postURL)){
      //Call the specific post
      echo giveSpecificPost($postURL);
    }else{
      //Give the latest post
      //giveLastPost() returns the URL of the last post
      echo giveSpecificPost(giveLastPost());
    }

    ?>
  
  <!-- AddThis Smart Layers BEGIN -->
  <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
  
  <!-- <script type="text/javascript">
    var addthis_config = addthis_config||{};
    addthis_share.url = "http://miguelamigotgonzalez.com/blog.php?post=<?php //echo giveLastPost() ?>";
  </script> -->
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51fedad8359c4b03"></script>
  <script type="text/javascript">
    addthis.layers({
      'theme' : 'transparent',
      'share' : {
        'position' : 'left',
        'numPreferredServices' : 5
      }   
    });
  </script>
  <!-- AddThis Smart Layers END -->
        

    <!-- END OF BLOG POST -->
        
    <div class="welcomeHomies">
        <p>
              
              
              
              
            <!-- View all posts: Button trigger modal (repeated below)-->
            <?php
              //Modal block (button and listing of all blog posts)
              //require instead of require_once because we literally want the block from above
              require($DOCUMENT_ROOT. 'includes/bodyModal.php');
            ?>
            <!-- end of View all posts modal -->
            
            
        </p> 
    </div>
    <br>
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyDisqusSystem.php');
      echo disqusSystem();
    ?>
    
    <div class="container">
      <div class="container">
        <div class="container">
      <br>
      
      <?php
        require_once($DOCUMENT_ROOT. 'includes/bodyContactForm.php');
        echo contactForm();
      ?>
      
        </div>
      </div>
    </div> <!-- /container -->
    
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyScripts.php');
      echo bootstrapBodyScript();
      echo googleAnalytics();
    ?>
  </body>
</html>

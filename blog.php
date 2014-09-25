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
    <!-- Replace title of page with title of blog post -->
    <!--<title>Blog</title>-->
    <title>
    <?php
    if(!isset($_GET['post'])){
      require_once($DOCUMENT_ROOT. 'includes/blogQueriesDb.php');
      echo urldecode(giveLastPost());
    }else{
      echo urldecode($_GET['post']);
    }  
    ?>
    </title>
    
    <meta name="description" content="
    <?php
    //Echo the description of either the last post or the specified post
    require_once($DOCUMENT_ROOT. 'includes/blogQueriesDb.php');
    if(isset($_GET['post'])){
      //Call the description and echo it
      echo giveSpecificDescription(urldecode($_GET['post']));
    }
    ?>
    ">
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/head.php');
      //Calls the metaTags() function which returns the generic tags -including the description
      //We want blog posts to have their own descriptions so this description tag is going to get ignored
      echo metaTags();
      echo headerStylesheets();
      echo headerScripts();
    ?>
    
  </head>

  <body>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyNavBar.php');
      echo navAndAddThis();
    ?>
    
    <div class="container">
      <div class="page-header">
        <h4>I am working as a product development engineer at IBL Studios Education. Our mission is to provide academic institutions and businesses with the latest learning and teaching technology, from the open source Open edX platform to fully produced documentary-style courses.</h4>
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
    
    <!-- END OF BLOG POST -->
    
    

 <!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51fedad8359c4b03"></script>
<script type="text/javascript">
  addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    },
    'whatsnext' : {},
    'recommended' : {},
    'linkFilter' : function(link, layer) {
    if (layer == 'thankyou') {
    return false;
    };
    }
  });
</script>
<!-- AddThis Smart Layers END -->
        
        
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
      require_once($DOCUMENT_ROOT. 'includes/bodyScripts.php');
      echo bootstrapBodyScript();
      echo googleAnalytics();
    ?>
    
    <?php
      require_once($DOCUMENT_ROOT. 'includes/bodyDisqusSystem.php');
      echo disqusSystem();
    ?>
    
  </body>
</html>
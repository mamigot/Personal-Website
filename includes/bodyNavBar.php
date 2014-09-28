<?php
//Upper portion of the body
//Contains the navigation bar among other things (please read below)
//==============================================================

//Navigation bar and AddThis buttons
//They share a function because they are bound by the same <div> in the code
function navAndAddThis() {
return <<<HTML
   <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://www.miguelamigotgonzalez.com/index.php">Miguel Amigot Gonzalez</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://www.miguelamigotgonzalez.com/index.php">Home</a></li><!-- class="active" because it's the page we're currently on! -->
            <li><a href="http://www.miguelamigotgonzalez.com/aboutme.php">About Me</a></li>
            <li><a href="http://www.miguelamigotgonzalez.com/contact.php">Contact</a></li>
            <li><a href="http://www.miguelamigotgonzalez.com/blog.php">Blog</a></li>
            <li class="dropdown">
              <a href="http://www.miguelamigotgonzalez.com/projects.php" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php">See all</a></li>
                <li class="divider"></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#About.com">About.com</a></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#IBLStudios">IBL Studios Education</a></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#oakwide">OakWide</a></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#startupCoursera">Stanford's "Startup Engineering"</a></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#disarmingRobot">Disarming robot</a></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#ppm">Polytechnic Playing Machine</a></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#smartCMS">Smart CMS</a></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#responsiveWebDesign">Responsive web design</a></li>
                <li class="divider"></li>
                <li><a href="http://www.miguelamigotgonzalez.com/projects.php#resume">Resume</a></li>
              </ul>
            </li>        
          </ul>
          <!-- AddThis Follow BEGIN -->
        <div class="addthis_toolbox addthis_32x32_style addthis_default_style">
            <a class="addthis_button_facebook_follow" addthis:userid="m.amigot"></a>
            <a class="addthis_button_twitter_follow" addthis:userid="miguelamigot"></a>
            <a class="addthis_button_linkedin_follow" addthis:userid="miguelamigotgonzalez"></a>
            <a class="addthis_button_rss_follow" addthis:userid="http://github.com/miguel5"><img src="http://www.miguelamigotgonzalez.com/data/images/githubButton.png" alt="Github" /></a>
        </div>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51fedad8359c4b03"></script>
        <!-- AddThis Follow END -->

          
        </div><!--/.navbar-collapse -->
      </div>
    </div>
HTML;
}
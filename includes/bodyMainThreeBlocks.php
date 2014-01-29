<?php
//Includes the three blocks below the first, large block of the home page
//Three calls-to-action to check out the 'about me', 'blog' and 'projects' sections of my site
//Place within Bootstrap's <div class="container"> tags
//==============================================================

function mainThreeBlocks() {
return <<<HTML
    <div class="row">
        <div class="col-lg-4">
          <h2>About Me</h2>
          <p>Engineering fascinates me because of the opportunities it provides to make a difference in the world, and I am working to become a great entrepreneur and developer to rise to a position wherein I will be able to do so. </p>
          <p><a class="btn btn-default" href="aboutme.php">About Me &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Blog</h2>
          <p>I write a blog to convey what I am continually learning about software, web development and entrepreneurship, mostly from from <a href="https://news.ycombinator.com/">Hacker News</a>, The Economist's <a href="http://www.economist.com/blogs/freeexchange">Free Exchange</a> and titans like <a href="http://paulgraham.com/articles.html">Paul Graham</a>. I find the new phenomenona in software and start-ups fascinating, and I hope you will too. </p>
          <p><a class="btn btn-default" href="blog.php">Blog &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Projects</h2>
          <p>I'm currently working at OakSuite to launch powerful, all-in-one marketing automation software, but I am also involved in coding and engineering. View my page and send me a message! </p>
          <p><a class="btn btn-default" href="projects.php">Projects &raquo;</a></p>
        </div>
    </div>
HTML;
}


?>
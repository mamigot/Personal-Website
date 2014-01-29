<?php
//Takes finished database queries from blogQueriesDb.php in the form of arrays or objects
//And formats them accordingly
//==============================================================

function formatModals($title, $date, $desc) {
    //Create link (will be added e.g. http://www.miguelamigotgonzalez.com/blog?post=Asynchronous+Processing)
    //http://us2.php.net/manual/en/function.urlencode.php
    $link = urlencode($title);
    return '
    <p class="lead"><a href="http://www.miguelamigotgonzalez.com/blog.php?post='.$link.'">'.$title.'</a></p>
    <h6>'.$date.'</h6>
    <p>'.$desc.'</p>
    ';
}

function formatPost($id, $title, $date, $desc, $post) {
    
return <<<HTML
    <h1>{$title}</h1> <!-- place latest blog post TITLE -->
            <h4>{$date}</h4>
        </div> <!-- /container -->
    </div> <!-- /welcomeHomies -->
    <br>
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="lead">
                  <!-- place latest blog post TEXT here -->
                  {$post}
                </div>
            </div>
        </div>
    </div>
HTML;
    
}




?>
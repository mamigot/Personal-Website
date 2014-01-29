<?php
//Makes PHP Data Object (PDO) queries to the MySQL database

//Writes and reads from the database
//Gets content in the form of arrays or objects
//and passes them to blogFormattingDb.php so it can output it accordingly
//==============================================================
//Include the private database credentials file
require_once($DOCUMENT_ROOT. 'private/dbHostInfo.php');
//Include blogFormattingDb.php
require_once($DOCUMENT_ROOT. 'includes/blogFormattingDb.php');

//Connect to the database if we haven't done so already
if(!isset($DBH)) {
    try {
        $DBH = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
        //See "Exceptions and PDO"
        //http://net.tutsplus.com/tutorials/php/why-you-should-be-using-phps-pdo-for-database-access/
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch (PDOException $e) {
        echo "Fix your connection to the database, homie <br><br>";
        echo $e->getMessage();
    }
}

//Request for modals
function giveModals() {
    //We want to call 2 modals in the page but we don't want to have to make 2 requests
    //Save the string from the first modal onto the variable $output and if the variable is set when the function is called, then no need to make the request
    if(!isset($output)){
        //If it's not set, it means that this is the first request to giveModals() we're receiving
        //FETCH content from the database through FETCH_OBJ (though there are more methods)
        //Get them in reverse order (put latest first)
        global $DBH; //Access it from outside the function
        $STH = $DBH->query('SELECT id, title, date, description FROM blogPosts ORDER BY id DESC'); //maybe we need to call all values on the table
        //Fetch into an object (so badass)
        //And make sure the instantiated class doesn't have a constructor that require that it be called with values
        //Define the class only if it doesn't exist
        if(!class_exists(blogEntry)){
            class blogEntry {
                public $title;
                public $date;
                public $description;
            }
        }
        $STH->setFetchMode(PDO::FETCH_INTO, new blogEntry);
        //As single modals are called through the foreach loop, their string value will be added to that of $output
        $output='';
        foreach($STH as $newEntry) {
            //Displays all the posts in the modal ("View all posts" button)
            //Process through blogShowContent.php
            $title = $newEntry->title;
            $date = $newEntry->date;
            $desc = $newEntry->description;
            //Call the modal formatting function on blogFormattingDb.php
            //Save content into the $output variable to send back to blog.php
            $oneMoreModal = formatModals($title, $date, $desc);
            $output = $output.$oneMoreModal;
        }
        //$output contains every modal, concatenated
        return $output;
    }else{
        //$output has already been set so we can just returcn it
        return $output;
    }
}

//Request for last post's urlencoded title
function giveLastPost() {
    //Figure out the latest inserted ID
    global $DBH; //Access it from outside the function
    $STH = $DBH->prepare('SELECT id, title, date, description, post FROM blogPosts WHERE id = (SELECT MAX(id) FROM blogPosts)');
    $STH->execute();
    //$result is an array
    $result = $STH->fetchAll();
    
    foreach($result as $newEntry) {
        //Save information to an array
        
        //$id = $newEntry[id];
        $title = $newEntry[title];
        //$date = $newEntry[date];
        //$desc = $newEntry[description];
        //$post = $newEntry[post];
    }
    
    return urlencode($title);
}

//Query request for a specific post
function giveSpecificPost($postURL) {
    //$postURL gotten from http://miguelamigotgonzalez.com/blog.php?post=[$postURL]
    $postTitle = urldecode($postURL);
    global $DBH;
    $STH = $DBH->prepare('SELECT id, title, date, description, post FROM blogPosts WHERE title = :passTitle');
    $STH->bindParam(':passTitle', $postTitle);
    $STH->execute();
    $result = $STH->fetchAll();
    
    foreach($result as $newEntry) {
        //Save information to an array
        $id = $newEntry[id];
        $title = $newEntry[title];
        $date = $newEntry[date];
        $desc = $newEntry[description];
        $post = $newEntry[post];
    }
    
    //Variables above contain the information of the last blogpost
    $output = formatPost($id, $title, $date, $desc, $post);
    return $output;
}

//Returns the description of a blog post
//Default value (no parameter) is the last post
function giveSpecificDescription($descParam){
    //Retrieve that specific $descParam (it's a title)
    global $DBH;
    $STH = $DBH->prepare('SELECT id, title, date, description, post FROM blogPosts WHERE title = :passTitle');
    $STH->bindParam(':passTitle', $descParam);
    $STH->execute();
    $result = $STH->fetchAll();
    
    foreach($result as $newEntry) {
        //Save information to an array
        
        //$id = $newEntry[id];
        //$title = $newEntry[title];
        //$date = $newEntry[date];
        $desc = $newEntry[description];
        //$post = $newEntry[post];
    }
    
    return $desc;
}

//Add to the database from the CMS at http://cms.miguelamigotgonzalez.com
function writeNewPost($title, $date, $desc, $post) {
    global $DBH;
    $STH = $DBH->prepare("INSERT INTO blogPosts (title, date, description, post) value (:title, :date, :description, :post)");
    //Add PDO::PARAM_STR so we can input HTML code
    //See http://stackoverflow.com/questions/10942972/php-pdo-bindparam-with-html-content
    $STH->bindParam(":title", $title);
    $STH->bindParam(":date", $date);
    $STH->bindParam(":desc", $desc);
    $STH->bindParam(":post", $post, PDO::PARAM_STR);
    $STH->execute();
}

//Close the database connection
function closeDbConnection() {
    //Close the connection by setting the DBH to null if it exists
    if(isset($DBH)){
        $DBH = null;    
    }
}


?>
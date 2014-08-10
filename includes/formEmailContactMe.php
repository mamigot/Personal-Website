<?php
//Process 'contact me' form by sending messages to contact@miguelamigotgonzalez.com
//==============================================================

//all email will be sent to this address
$to = "contact@miguelamigotgonzalez.com";
//set default values of $subject and $message (to be overriden later)
$message = "";

//save user's data into these variables
$name = htmlspecialchars($_GET['name']);
$fromemail = htmlspecialchars($_GET['from']);
$message = htmlspecialchars($_GET['message']);
 
//check that the message string is not just spaces
// http://stackoverflow.com/questions/2992329/check-if-string-is-just-white-space/2992342#2992342
if(trim($message) == ''){
    //string is only whitespace
    //redirect user to new page
    //peace out
    $url = 'http://www.miguelamigotgonzalez.com/contact.php?alert=empty-message';
    echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    exit();
}

//combine the user's subject with the name
$subject = $subject." (from ".$name.")";
//combine the user's email with the message
$message = $message." ".$fromemail;

//run the mail function and save the result as a boolean
//true if successful
$result = mail($to, $subject, $message);

//redirect user to new page
$url = 'http://www.miguelamigotgonzalez.com/thanksContact.php';
echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
exit();

?>

<?php
//Includes file for code within the <head></head> tags

//Uses heredocs to return HTML from a PHP function
//http://stackoverflow.com/questions/528445/is-there-any-way-to-return-html-in-a-php-function-without-building-the-return
//==============================================================

//Meta tags
function metaTags() {
return <<<HTML
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Views of an entrepreneur, web developer and student of Electrical Engineering and Computer Science at NYU.">
    <meta name="author" content="Miguel Amigot Gonzalez">
HTML;
}

//Stylesheets at the header
function headerStylesheets() {
return <<<HTML
    <!-- Bootstrap core CSS -->
    <link href="http://www.miguelamigotgonzalez.com/stylesheets/bootstrap3/dist/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="http://www.miguelamigotgonzalez.com/stylesheets/customBootstrap.css" rel="stylesheet">
    <link href="http://www.miguelamigotgonzalez.com/stylesheets/cmsApp.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://www.miguelamigotgonzalez.com/stylesheets/bootstrap3/assets/js/html5shiv.js"></script>
      <script src="http://www.miguelamigotgonzalez.com/stylesheets/bootstrap3/assets/js/respond.min.js"></script>
    <![endif]-->
HTML;
}

//Javascript files at the header
function headerScripts() {
return <<<HTML
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="stylesheets/bootstrap3/assets/js/html5shiv.js"></script>
      <script src="stylesheets/bootstrap3/assets/js/respond.min.js"></script>
    <![endif]-->
HTML;
}

//AngularJS
function angularScript() {
return <<<HTML
    <!-- AngularJS // http://angularjs.org/ -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
HTML;
}

//Favicon
function favicon() {
return <<<HTML
    <link rel="icon" type="image/ico" href="http://www.miguelamigotgonzalez.com/favicon.ico"></link> 
    <link rel="shortcut icon" href="http://www.miguelamigotgonzalez.com/favm.ico" type="image/x-icon"></link>
HTML;
}
?>

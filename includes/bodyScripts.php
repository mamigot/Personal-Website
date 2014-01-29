<?php
//Scripts in the body tag <script>
//==============================================================

//Bootstrap core Javascript
//Body <script> tags
function bootstrapBodyScript(){
return <<<HTML
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="stylesheets/bootstrap3/assets/js/jquery.js"></script>
    <script src="stylesheets/bootstrap3/dist/js/bootstrap.min.js"></script>
HTML;
}

//Google Analytics
function googleAnalytics(){
return <<<HTML
    <script type='text/javascript'>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-41384942-1']);
        _gaq.push(['_setDomainName', 'miguelamigotgonzalez.com']);
        _gaq.push(['_trackPageview']);
      
        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
HTML;
}

//Resize the text area automatically
function resizeTextareaAuto(){
return <<<HTML
    <!-- Resize the textarea box automatically -->
    <!-- http://chuvash.eu/2011/12/14/the-cleanest-auto-resize-for-a-textarea/ -->
    <script>
    onload = function() {
    var t = document.getElementsByTagName('textarea')[0];
    var offset= !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width'))) ;

    var resize 	= function(t) {
        t.style.height = 'auto';
        t.style.height = (t.scrollHeight  + offset ) + 'px';	
    }

    t.addEventListener && t.addEventListener('input', function(event) {
        resize(t);
    });

    t['attachEvent']  && t.attachEvent('onkeyup', function() {
        resize(t);
    });
    }
    </script>
HTML;
}


?>
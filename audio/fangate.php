<?php
//Get PHP SDK
require_once 'facebook.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Arnaldur Indriðason – Duell</title>
        <link rel="image_src" href="img/share.jpg">
        <meta property="og:image" content="http://f-bilandia.de/luebbe/indridason/audio/img/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/luebbe/indridason/audio/img/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Arnaldur Indriðason – Duell"/>
        <meta property="og:description" content="Fan werden und den neuen Roman von Krimiautor Arnaldur Indriðason gewinnen!" />
        <meta property="og:url" content="http://f-bilandia.de/luebbe/indridason/audio/weiche.php"/>
        <link rel="stylesheet" href="main.css">
        <script type="text/javascript">
            if (top == self) 
            { 
                top.location = "https://www.facebook.com/LuebbeAudio/app_712246122139805?ref=ts"; 
            }
        </script>
        </head> 
        
     <?php
        // Create our Application instance.
        $facebook = new Facebook( array('appId' => '712246122139805',
        'secret' => '6435089c7c507ef7086483af3d29e308', 'cookie' => true, ));
        $signed_request = $facebook -> getSignedRequest();
        $like_status = $signed_request["page"]["liked"];
        if ($like_status == "1") {
            global $like_status;
        //If the page is liked then display full app.

        ?>
        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '712246122139805', status: true, cookie: true, xfbml: true});
                //Resize the iframe when needed
                FB.Canvas.setAutoResize();
            };
    
            //Load the SDK asynchronously
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                  '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>


     <body>

    <?php 
        
        header("location: index.php");

       

        } else {

        

        ?>
        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '712246122139805', status: true, cookie: true, xfbml: true});
                //Resize the iframe when needed
                FB.Canvas.setAutoResize();
            };
    
            //Load the SDK asynchronously
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                  '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>

        <!-- Fangate-Bild bitte einsetzen -->
        <div>

        <img src="audio/img/fangate.jpg" style="width:800px;">

        
        </div>
        <?php
        }
        ?>

        <script type="text/javascript">
            window.onload = function() {
                FB.Canvas.setAutoGrow();
            }
        </script>



    
    </body>
</html>

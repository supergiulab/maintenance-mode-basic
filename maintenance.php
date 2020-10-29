<?php
/**
 * Plugin Name:       Maintenance Mode Basic for WP
 * Plugin URI:        
 * Description:       Handle the basics maintenace mode with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            SuPerGiu
 * Author URI:        https://supergiulab.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       maintenance-mode-basic
 * Domain Path:       /languages
 */
    /**
        # Custom WP Maintenance page - /wp-content/maintenance.php
            @source: https://www.hongkiat.com/blog/wordpress-maintenance/
        
        # Troubleshooting and issues
            @source: https://kinsta.com/blog/wordpress-maintenance-mode/
        
        # Return http response 503 service unavailable.
            This is important for SEO too!
            @source: https://gist.github.com/timoleinio/5922427
    */
    $protocol = $_SERVER["SERVER_PROTOCOL"];
    if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
    // Send Apache Response - 503 (SEO)
    header( "$protocol 503 Service Unavailable", true, 503 );
    // Set Content Type and UTF-8
    header( 'Content-Type: text/html; charset=utf-8' );
    // Retry After - 10 minutes
    header( 'Retry-After: 600' );
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sito in Manutenzione</title>

    <!-- Style -->
    <link rel="stylesheet" href="./assets/style.min.css">
    
    <!-- Include FontAwesome -->
    <script src="https://kit.fontawesome.com/d75f388fca.js" crossorigin="anonymous"></script>
</head>
<body>
    <main class="cover-image">
        <div id="main-content" class="cover">
            <div class="content">
                <h1>Il sito &egrave; in manutenzione</h1>
                    
                <p>
                    Il sito è momentaneamente in manutenzione, tornate a trovarci pi&ugrave; tardi oppure contattateci via <strong>email</strong> o sulla nostra <strong>pagina Facebook</strong>. <br>
                    <strong>Grazie.</strong>
                </p>
                
                <ul class="site-contact">
                    <li><script type="text/javascript" language="javascript">
                    <!--
                    // Email obfuscator script 2.1 by Tim Williams, University of Arizona
                    // Random encryption key feature coded by Andrew Moulden
                    // This code is freeware provided these four comment lines remain intact
                    // A wizard to generate this code is at http://www.jottings.com/obfuscator/
                    for(coded="7S@haeSBCjawiZ.1U7",key="92QiENVRor06FSh45ykPWjqXMmUBcuYn3gdLIlTpJbD78O1afxGCAtvwKesZzH",shift=coded.length,link="",i=0;i<coded.length;i++)-1==key.indexOf(coded.charAt(i))?(ltr=coded.charAt(i),link+=ltr):(ltr=(key.indexOf(coded.charAt(i))-shift+key.length)%key.length,link+=key.charAt(ltr));document.write("<a href='mailto:"+link+"'><i class=\"fas fa-at\"></i><span>Scrivi una email</span></a>");
                    //-->
                    </script><noscript>Sorry, you need Javascript on to email me.</noscript>
                    </li>
                    <li><a href="https://www.facebook.com/" title="Scrivi un messaggio su Facebook"><i class="fab fa-facebook"></i><span>Scrivi un messaggio su Facebook</span></a></li>
                </ul>
            </div>
        </div>
    </main>
    
    
</body>
</html>
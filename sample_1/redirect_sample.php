<?php
    /* Safe Redirect browser sample */
    // header("Location: http://www.mysite.com/");

    /* 
        Dangerous URL Redirects
        Ref. https://www.owasp.org/index.php/Unvalidated_Redirects_and_Forwards_Cheat_Sheet
     */
    $redirect_url = $_GET['url'];
    header("Location: " . $redirect_url);
 ?>


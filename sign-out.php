<!--PHP logout System by Amin Abdi ->
<?php
    session_start();
    if(session_destroy())
    {
    header("Location: sign-in.php");
    }
?>
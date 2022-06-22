<?php
    $AccesName = $_GET['name'];
    $AccesMail = $_GET['mail'];
    if (strlen($AccesName) > 3 && filter_var($AccesMail, FILTER_VALIDATE_EMAIL)) 
    {    echo "Accesso Granted";
    } else {
        echo "Accesso Denied";
    }
?>
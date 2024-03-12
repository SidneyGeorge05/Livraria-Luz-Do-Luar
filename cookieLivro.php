<?php
    header("Location: index.php");

    $cookie = $_GET['slcCategoria'];

    setcookie('codCookie',$cookie, time()+180);

?>
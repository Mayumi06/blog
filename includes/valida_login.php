<?php 
    $SESSION['url_retoro'] = $_SERVER['PHP_SELF'];

    if(!isset($_SESSION['login'])) {
        header('Location: login_formulario.php');
        exit;
    }
?>
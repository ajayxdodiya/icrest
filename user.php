<?php
if(!isset($_GET['login'])) {
    setcookie("loggedin", "", time() - 360000000, "/");    
    header("Location: index.php");    
} else {    
    setcookie('loggedin', 'Ajay', time() + (86400 * 30), "/");   
    header("Location: index.php");    
}
?>

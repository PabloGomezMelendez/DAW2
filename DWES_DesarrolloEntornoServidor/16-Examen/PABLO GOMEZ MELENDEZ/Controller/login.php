<?php
session_start();
if(isset($_REQUEST['entar'])){
    $_SESSION['isLogin'] = true;
    $_SESSION['name']=$_REQUEST['user'];
    header("Location: index.php");
}
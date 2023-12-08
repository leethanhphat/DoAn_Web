<?php
session_start();
require_once("db_module.php");
$link=null;
taoKetNoi($link);
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['is_admin']);
    unset($_SESSION['user_id']);
    giaiPhongBoNho($link,true);
    header("Location: ../login.php");
} else{    return false;}

?>
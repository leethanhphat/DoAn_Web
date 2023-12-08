<?php session_start(); ?>

<?php if (!isset($_SESSION['user_id'])) {
    include_once('header_nomal.php');
} else {
    include_once('header_login.php');
}
?>
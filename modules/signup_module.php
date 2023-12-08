<?php
require_once("db_module.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $Email = $_POST["Email"];

    // Step 4: Check if the username already exists in the database
    $sql = "SELECT * FROM tbl_users WHERE username = '$username'";
    $link = null;
    taoKetNoi($link);
    $result = chayTruyVanTraVeDL($link, $sql);

    if ($result->num_rows > 0) {
        echo "Username already exists";
    } else {
        $sql = "INSERT INTO tbl_users (username, password, Email, is_admin) VALUES ('$username', '$hashedPassword', '$Email', '0')";
        if (chayTruyVanKhongTraVeDL($link, $sql) === TRUE) {
            echo "Sign up successful";
        } else {
            echo "Error: ";
        }
    }
}

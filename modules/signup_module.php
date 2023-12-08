<?php
require_once("db_module.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_input = $_POST["username-input"];
    $password_input = $_POST["password-input"];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $Email = $_POST["Email"];

    // Step 4: Check if the username already exists in the database
    $sql = "SELECT * FROM tbl_users WHERE Email = '$Email'";
    $link = null;
    taoKetNoi($link);
    $result = chayTruyVanTraVeDL($link, $sql);

    if ($result->num_rows > 0) {
        echo "Username already exists";
    } else {
        $sql = "INSERT INTO tbl_users (username, password, Email, is_admin) VALUES ('$username_input', '$hashedPassword', '$Email', '0')";
        if (chayTruyVanKhongTraVeDL($link, $sql) === TRUE) {
            header("Location: ../login.php");
        } else {
            echo "Error: ";
        }
    }
}

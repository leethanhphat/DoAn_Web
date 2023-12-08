<?php
require_once('db_module.php');

    // Bước 4: Xác thực thông tin đăng nhập của người dùng
    $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Bước 5: Thiết lập phiên người dùng và chuyển hướng đến trang phù hợp dựa trên vai trò người dùng
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["is_admin"] = $row["is_admin"];

        if ($row["is_admin"] == "admin") {
            header("Location: admin.php");
        } else {
            header("Location: user.php");
        }
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không hợp lệ";
    }
<?php

// Bước 1: Tạo kết nối đến cơ sở dữ liệu
$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "db_bookshop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Bước 2: Tạo mẫu đăng nhập sử dụng Bootstrap
?>

<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Đăng nhập</h2>
        <form action="TEST_LOGIN.php" method="POST">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng nhập</button>
        </form>
    </div>
</body>
</html>

<?php
// Bước 3: Tạo tệp login.php để xử lý quá trình đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Bước 4: Xác thực thông tin đăng nhập của người dùng
    $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Bước 5: Thiết lập phiên người dùng và chuyển hướng đến trang phù hợp dựa trên vai trò người dùng
        $row = $result->fetch_assoc();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["is_admin"] = $row["is_admin"];

        if ($row["is_admin"] == "1") {
            header("Location: admin.php");
        } else {
            header("Location: user.php");
        }
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không hợp lệ";
    }
}

// Bước 6: Tạo các tệp admin.php và user.php riêng để xử lý các vai trò tương ứng
?>
<?php
// Bước 7: Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <? session_start(); ?>
    <?php if(isset($_SESSION["user_id"])) {
        header("Location: index.php");
    }
    ?>
    <?php include_once("views/main/header.php") ?>
    <main class="container">
        <div class="row">
            <div class="title col-12 text-center">
                <h2 class="uppercase ">Đăng nhập</h2>
            </div>
            <div class="col-12 col-lg-6">
                <form action="modules/login_module.php" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Tài khoản email" name="email"  required>
                        <label for="email">Tài khoản email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password" required>
                        <label for="password">Mật khẩu</label>
                    </div>

                    <button type="submit" class="btn btn-login-form col-12 btn-secondary my-3">Đăng nhập</button>
                    <a href="signup.php" id="signup-link"><button class="btn btn-login-form col-12 btn-outline-secondary">Tạo tài khoản</button></a>  
                </form>

            </div>
        </div>

    </main>
    <?php include_once("views/main/footer.php") ?>
    <script>
            document.addEventListener('DOMContentLoaded', function() {
        const signupButton = document.getElementById('signup-link');

        // Ngăn chặn hành vi mặc định khi nhấn vào button "Tạo tài khoản"
        signupButton.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ a
            // Thực hiện các hành động khác ở đây nếu cần
            // Ví dụ: chuyển hướng đến trang tạo tài khoản bằng JavaScript
            window.location.href = 'signup.php'; // Đổi đường dẫn tới trang tạo tài khoản
        });
    });
    </script>
</body>

</html>
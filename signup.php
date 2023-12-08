<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
</head>

<body>
    <?php include_once("views/main/header.php");?>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="modules/signup_module.php" method="POST">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email-input" placeholder="Tài khoản email" name="email" required>
                <label for="email-input">Tài khoản email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="username-input" placeholder="Tên đăng nhập" name="username" required>
                <label for="username-input">Tên đăng nhập</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password-input" placeholder="Mật khẩu" name="password" required>
                <label for="password-input">Mật khẩu</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
    <?php include_once("views/main/footer.php");?>
</body>

</html>
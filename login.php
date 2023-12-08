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
    <?php if (isset($_SESSION['user_id'])) {
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
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Ghi nhớ mật khẩu
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Đăng nhập</button>
                </form>
                <a href="signup.php"><button class="btn btn-primary w">chưa có tài khoản</button></a>
            </div>


        </div>

    </main>
    <?php include_once("views/main/footer.php") ?>
</body>

</html>
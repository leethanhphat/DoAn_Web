<?php session_start(); ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php if (($_SESSION['is_admin']) != 1)
        header("Location: signup.php");
    ?>

    <div>

        <h1>Đây là trang admin!</h1>
        <h2>Bạn chỉ vào được trang này sau khi đăng nhập!</h2>
    </div>
    <style>
        body {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 13px;
        }

        #menu {
            margin-bottom: 100px;
            text-align: right
        }

        h1,
        h2 {
            text-align: center;
        }
    </style>
</body>

</html>
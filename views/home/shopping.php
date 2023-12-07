<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop name</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/home.css">

</head>

<body>

    <?php include_once("views/main/header.php") ?>
    <main >
        <div class="container shoping-container " style="margin-top: 10px;">
            <div class="row ">
                <div class="category-list col-3 bg-light ">


                    <div class="list-category">
                        <?php include_once("controllers/show_category.php") ?>
                    </div>
                </div>

                <div class="item-list col-9 bg-light" id="item-list">
                    <div>
                        <?php include_once("controllers/show_item_list.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once("views/main/footer.php") ?>

    <script scr="public/js/search.js"></script>
</body>

</html>
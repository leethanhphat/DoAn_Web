<?php
    require_once("models/category_model.php");
    $cate_model = new CategoryModel();
    $category = $cate_model->getCategoryList();
    echo '<div class="list-group">
    ';
    foreach ($category as $categories) {
        echo '<button type="button" class="list-group-item list-group-item-action uppercase">'.$categories->getCategoryName().'</button>';
    }
    echo '</div>';
?>



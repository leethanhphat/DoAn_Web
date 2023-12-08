<?php
    echo '<div class="list-group">
    ';
    foreach ($categories as $category) {
        echo '<a class="link" href="index.php?categoryid='.$category->getCategoryID().'"><button type="button" class="list-group-item list-group-item-action uppercase">'.$category->getCategoryName().'</button></a>';
    }
    echo '</div>'; 
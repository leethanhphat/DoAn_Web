<?php
    echo '<div class="list-group">
    ';
    foreach ($category as $categories) {
        echo '<a class="link" href="index.php?categoryid='.$categories->getCategoryID().'"><button type="button" class="list-group-item list-group-item-action uppercase">'.$categories->getCategoryName().'</button></a>';
    }
    echo '</div>'; 
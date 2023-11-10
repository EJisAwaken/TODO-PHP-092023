<?php

include "fct/item.php";
include "fct/request.php";
include "config/appName.php";

$items = getItems();
$id = getItems('item');

foreach ($items as $item){
    if ($item['id'] === $id){
        $item['checked'] = !$item['checked'];
        var_dump($item);
    }
};

saveItems($items);

//header('location:index.php');


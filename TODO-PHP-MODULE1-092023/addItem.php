<?php
include "./fct/request.php";
include "./fct/item.php";
include "./config/appName.php";

$intitule = post('intitule');
$fileName = $_POST[$intitule];


$items = getItems();
$items[] = [
    "id" =>uniqid(),
    "checked" => true,
    "intitule" => $intitule];
    saveItems($items);

header('location:index.php');

<?php
require_once __DIR__.'/../model/model.php';
if (isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["salary"])) {
    $id = employees::create($_POST["name"], $_POST["address"], $_POST["salary"]);
    header("Location: edit.php?id=".$id);
}
$datetime = date("Y-m-d H:i:s", time());
require_once __DIR__.'/../view/create_form.php';
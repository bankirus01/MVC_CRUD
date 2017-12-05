<?php
require_once __DIR__.'/../model/model.php';
if (isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["salary"]) && isset($_POST["id"])) {
    employees::updateById($_POST["name"], $_POST["address"], $_POST["salary"], $_GET["id"]);
    header("Location: list.php");
}
$datetime = date("Y-m-d H:i:s", time());
require_once __DIR__.'/../view/edit_form.php';
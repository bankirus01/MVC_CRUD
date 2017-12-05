<?php
require_once __DIR__.'/../model/model.php';
employees::deleteById($_GET["id"]);
header("Location: list.php");
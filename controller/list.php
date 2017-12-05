<?php
require_once __DIR__.'/../model/model.php';
$list = (new employees())->findAll();
require_once __DIR__.'/../view/list_form.php';
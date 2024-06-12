<?php
// controllers/index.php

require '../models/model.php';

$model = new Model();
$data = $model->getData();

require '../views/view.php';
?>

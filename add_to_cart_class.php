<?php

session_start();


if(! isset($_SESSION['class'])){
    $_SESSION['class'] = array();
}

if(! empty($_POST)) {
    $_SESSION['class'] = $_POST;
}

echo json_encode($_SESSION['class']);


<?php

session_start();

if(! isset($_SESSION['room'])){
    $_SESSION['room'] = array();
}

if(isset($_GET['sid'])) {


    $sid = intval($_GET['sid']);

    $input1 = $_GET['input1'];
    $input2 = $_GET['input2'];
    $_SESSION['room'][$sid] = [$input1, $input2];

}

echo json_encode($_SESSION['room']);
<?php
$mysqli = new mysqli('localhost', 'treevago', '', 'treevago');

$mysqli->query("SET NAMES utf8");

if(! isset($_SESSION)){
    session_start();
}
<?php
session_start();

unset($_SESSION['user']);

header("Location: ./treevago_index.php");
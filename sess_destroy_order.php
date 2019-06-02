<?php

session_start();

unset($_SESSION['room']);
unset($_SESSION['class']);

header("Location: ./no-order-member.php");

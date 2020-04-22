<?php
session_start();
$_SESSION['lastIndex'] = $_SESSION['midIndex'] - 1;
header('Location: view.php');
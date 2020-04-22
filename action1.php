<?php
session_start();
$_SESSION['firstIndex'] = $_SESSION['midIndex'] + 1;
header('Location: view.php');

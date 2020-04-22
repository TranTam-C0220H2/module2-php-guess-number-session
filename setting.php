<?php
session_start();
$firstNumber = $_GET['firstNumber'];
$lastNumber = $_GET['lastNumber'];
$lengthArrNumber = ($lastNumber - $firstNumber) + 1;
$arrayNumber[0] = $firstNumber;
for ($i = 1; $i < $lengthArrNumber; $i++) {
    $arrayNumber[$i] = $arrayNumber[$i - 1] + 1;
}
$_SESSION['firstIndex'] = 0;
$_SESSION['lastIndex'] = $lengthArrNumber - 1;
$_SESSION['arrayNumber'] = $arrayNumber;
header('Location: view.php');
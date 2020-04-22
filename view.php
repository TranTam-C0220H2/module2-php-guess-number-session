<?php
session_start();
$_SESSION['midIndex'] = floor($_SESSION['firstIndex'] + ($_SESSION['lastIndex'] - $_SESSION['firstIndex']) / 2);
if ($_SESSION['firstIndex'] <= $_SESSION['lastIndex']) {
    echo $_SESSION['arrayNumber'][$_SESSION['midIndex']].'<br>';
} else {
    echo 'Ban co nho nham ???'.'<br>';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function resetGame() {
            if (confirm('Play again?')) {
                window.location = 'index.php';
            }
        }

        function tooLow() {
            window.location = 'action1.php';
        }

        function tooHigh() {
            window.location = 'action2.php';
        }
    </script>
</head>
<body>
<button onclick="tooHigh()">Too High</button>
<button onclick="tooLow()">Too Low</button>
<button onclick="resetGame()">Correct</button>
</body>
</html>

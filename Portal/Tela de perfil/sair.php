<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['nome']);

header("Location: ../../Portal/Login%20pronta/index.php");
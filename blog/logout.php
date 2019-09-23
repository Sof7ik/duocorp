<?
session_start();

unset($_SESSION['userNickName']);
session_destroy();

header('Location: ../index.php');
exit();
?>

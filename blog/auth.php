<?
session_start();
require ('connection.php');

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];
$loginSubmit = $_POST['loginSubmit'];

/*echo $userEmail;
echo "<br>";
echo $userPassword;
echo "<br>";
echo $loginSubmit;
echo "<br>";*/


if (isset($_POST['loginSubmit'])) {
	$login = mysqli_query($link, "SELECT * FROM `users` WHERE `userEmail` = '$userEmail' AND `userPassword` = '$userPassword';");

	$loginResult = mysqli_fetch_assoc($login);

	$countLoginRows = mysqli_num_rows($login);

	/*print_r ($loginResult);

	echo "<br>";

	echo "Количество строк - " . $countLoginRows;*/


	if ($countLoginRows == 1) {
		$_SESSION['userNickName'] = $loginResult['userNickName'];
		$_SESSION['userEmail'] = $loginResult['userEmail'];
		$_SESSION['userPassword'] = $loginResult['userPassword'];
		$_SESSION['regDate'] = $loginResult['regDate'];
		$_SESSION['idRole'] = $loginResult['idRole'];
	}



	/*echo "<br>";
	echo $_SESSION['userNickName'];
	echo "<br>";
	echo $_SESSION['userEmail'];
	echo "<br>";
	echo $_SESSION['userPassword'];
	echo "<br>";
	echo $_SESSION['regDate'];
	echo "<br>";*/	
}
?>
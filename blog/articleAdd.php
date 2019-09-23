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

/*	print_r ($loginResult);

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

<!DOCTYPE html>
<html>
<head>
	<title>Добавить статью</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="blogstyle/styleAddArticle.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat|Chilanka|Gayathri|Lobster|Manjari|Oswald|Pattaya&display=swap" rel="stylesheet">
</head>
<body>

<header>

	<div class="leftButtons">
		<a class="top" href="#top">Вверх</a>

		<ul class="info"> <!--правое навигационное меню-->
			<li><a class="telNumber" href="tel:+79057661646">+7 (123) 456 78 90</a></li>
			<li style="margin-top: 3%;"><a class="callback" href="callback.php">Свяжитесь со мной</a></li>
		</ul>
	</div>

	<div class="login">
		<?
			if (isset($_SESSION['userNickName'])) {
				echo "<p class='name'>Вы вошли как <a href='cabinet.php'>" . $_SESSION['userNickName'] . "</a></p>";
				?>
				<a class="logout" href="logout.php">ВЫЙТИ</a>
				<a href="blog.php">БЛОГ</a>
				<a href="../index.php">ГЛАВНАЯ СТРАНИЦА</a>

				<?
			}

			elseif (!isset($_SESSION['userNickName'])) {
				?>
				<form action="" method="POST">
					<input type='text' name="email">
					<input type='text' name="password">
					<input type="submit" name="loginSubmit">
				</form>
				<a href="../index.php">ГЛАВНАЯ СТРАНИЦА</a>
				<?
			}
		?>
	</div>

</header>

<div>

	<div class="wrapper">

		<form action="" method="POST">
			<input type="text" class="articleName" name="articleName" required="" autofocus="" autocomplete="off" placeholder="Введите название статьи">
			<textarea name="articleText" placeholder="А сюда текст статьи" required=""></textarea>
			<input type="submit" class="articleSendSubmit" name="articleSendSubmit" value="Опубликовать статью!">
		</form>

		<?
			$articleName = $_POST['articleName'];
			$articleText = $_POST['articleText'];
			$articleSendSubmit = $_POST['articleSendSubmit'];

			if (isset($articleText)) {
				$addArticle = mysqli_query($link, 
					"INSERT INTO `articles`(`idArticle`, `articleName`, `articleText`, `articleDate`) VALUES (NULL, '$articleName', '$articleText', NOW())");
			}

			if ($addArticle) {
				echo "успешно добавлено!";
				echo "<meta http-equiv='refresh' content='3;blog.php'>";
			}
		?>

	</div>

</div>

</body>
</html>

<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->
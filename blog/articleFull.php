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

<!DOCTYPE html>
<html>
<head>
	<title>Блог Антона Овчинникова</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="blogstyle/styleBlog.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat|Chilanka|Gayathri|Lobster|Manjari|Oswald|Pattaya&display=swap" rel="stylesheet">
</head>
<body>

<header>

	<div class="leftButtons">
		<a class="top" href="#top">Вверх</a>

		<ul class="info"> <!--правое навигационное меню-->
			<li><a class="telNumber" href="tel:+79057661646">+7 (123) 456 78 90</a></li>
			<li style="margin-top: 3%;" class="li1"><a class="callback" href="callback.php">Свяжитесь со мной</a></li>
		</ul>
	</div>

	<div class="login">
		<?
			if (isset($_SESSION['userNickName'])) {
				echo "<p class='name'>Вы вошли как <a href='cabinet.php'>" . $_SESSION['userNickName'] . "</a></p>";
				/*echo "Роль - " . $_SESSION['idRole'];*/
					if ($_SESSION['idRole'] == 1) { 
						?>
						<a class="logout" href="articleAdd.php">ДОБАВИТЬ СТАТЬЮ</a>
						<?
					}

				?>
				<a class="logout" href="logout.php">ВЫЙТИ</a>
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

<div class="columns">

	<div class="categoriesLeft">

		<ul class="categorySelect">
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
			<li class="category">Категория 1</li>
		</ul>	 

	</div>	
	
	<div class="articleWrapper">

		<?

		$selectArticles = mysqli_query($link, "SELECT * FROM `articles`;");

		if ($selectArticles) {
			while ($selectArticlesResult = mysqli_fetch_assoc($selectArticles)) {

				?>

				<div class="article">

					<p class="article"> <?echo $selectArticlesResult['articleName']?> </p>
					<p class="hardbass"> <? echo $selectArticlesResult['articleText']?> </p>
					<p class="date"> <?echo $selectArticlesResult['articleDate']?> </p>

				</div>

				<?
			}

			mysqli_free_result($selectArticles);
			
		}

		?>

		

	</div>

	<div class="categoriesRight">

		<h1 style="padding-bottom: 5px; border-bottom: 2px solid blue;">МИНУТКА РЕКЛАМЫ</h1>

		<ul class="categorySelect">
			<li class="category"><a href="https://vk.com/mimiz50">МЕМЫ ТОЛЬКО ДЛЯ ИЗБРАННЫХ</a></li>
			<li class="category"><a href="https://vk.com/softikofficial">ЛЁНЬКА ($chsv++)</a></li>
			<li class="category"><a href="https://vk.com/meister_j">ЕГОРЫЧ ($chsv++)</a></li>
		</ul>	 

	</div>

</div>

</body>
</html>


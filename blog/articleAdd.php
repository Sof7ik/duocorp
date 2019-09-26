<?

require "auth.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Добавить статью</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="blogstyle/styleAddArticle.css">
	<link rel="stylesheet" type="text/css" href="blogstyle/styleFooter.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat|Chilanka|Gayathri|Lobster|Manjari|Oswald|Pattaya&display=swap" rel="stylesheet">
</head>
<body>

<?require "includes/header.php"?>

<div>

	<div class="wrapper">

		<form action="" method="POST">

			<input type="text" class="articleName" name="articleName" required="" autofocus="" autocomplete="off" placeholder="Введите название статьи">
			<h3>Выберите категорию</h3>
			<select name="selectCategoriesToAdd">
				<?
				$selectCategories = mysqli_query($link, "SELECT * FROM `categories`;");
				if ($selectCategories) {
					while ($selectCategoriesResult = mysqli_fetch_assoc($selectCategories)) {
						?>
						<option> <? echo $selectCategoriesResult['categoryId'] ?> </option>
						<?
					}
					mysqli_free_result($selectCategories);
				}
				?>
			</select>
			<textarea name="articleText" placeholder="А сюда текст статьи" required=""></textarea>
			<input type="submit" class="articleSendSubmit" name="articleSendSubmit" value="Опубликовать статью!">
		</form>

		<?
			$articleName = $_POST['articleName'];
			$articleText = $_POST['articleText'];
			$articleSendSubmit = $_POST['articleSendSubmit'];
			$selectCategoriesToAdd = $_POST['selectCategoriesToAdd'];

			if (isset($articleText)) {
				$addArticle = mysqli_query($link, "INSERT INTO `articles` (`idArticle`, `articleName`, `categoryId`, `articleText`, `articleDate`) VALUES (NULL, '$articleName', '$selectCategoriesToAdd', '$articleText', NOW());");
			}

			if ($addArticle) {
				echo "успешно добавлено!";
				echo "<meta http-equiv='refresh' content='3;blog.php'>";
			}
		?>

	</div>

</div>

<?include "../footerBlog.php"?>

</body>
</html>
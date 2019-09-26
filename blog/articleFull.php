<?

require "auth.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Блог Антона Овчинникова</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="blogstyle/styleBlog.css">
	<link rel="stylesheet" type="text/css" href="blogstyle/styleFooter.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat|Chilanka|Gayathri|Lobster|Manjari|Oswald|Pattaya&display=swap" rel="stylesheet">

	<style>

	div.article {
		outline: 2px solid black;
		margin-top: 1.5%;
		padding: 0.5% 0.5%;
		display: block;
		-webkit-line-clamp: 4;  /*количество строк*/ 
		-webkit-box-orient: vertical;
		text-overflow: unset;
	}

	div.article > p.hardbass {
		margin-top: 1%;
		text-indent: 20px;
		text-align: justify;
		padding: 0% 2%;
		overflow: visible;
	}

	</style>

</head>
<body>

<?require "includes/header.php"?>

<div class="columns">

	<? /*include "includes/categories.php"*/ ?>
	
	<div class="articleWrapper">
		<a href='blog.php' class="display">Показать все статьи</a>

		<?
		$articleId = $_GET['id'];
		$selectArticles = mysqli_query($link, "SELECT * FROM `articles` WHERE `idArticle` = '$articleId';");
		$selectCategories = mysqli_query($link, "SELECT `categoryName` FROM `categories`, `articles` WHERE categories.`categoryId` = articles.`categoryId` AND articles.`idArticle` = '$articleId';");
		$selectCategoriesRes = mysqli_fetch_assoc($selectCategories);
		/*print_r($selectCategoriesRes);*/

		if ($selectArticles) {
			while ($selectArticlesResult = mysqli_fetch_assoc($selectArticles)) {

				?>

				<div class="article">

					<p class="category">Категория "<? echo $selectCategoriesRes['categoryName'] ?>"</p>
					<h1 class="article" style="text-align: center;"> <?echo $selectArticlesResult['articleName']?> </h1>
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

<?include "../footerBlog.php"?>

</body>
</html>


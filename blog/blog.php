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
</head>
<body>

<?require "includes/header.php"?>

<div class="columns">

	<? include "includes/categories.php"?>
	
	<div class="articleWrapper">
		<a href='blog.php' class="display">Показать все статьи</a>

		<h1>НОВЕЙШИЕ СТАТЬИ В БЛОГЕ</h1>

		<?

		if (isset($_POST['categorySelectButton'])) {
			while ($selectArticlesWithCategoriesResult = mysqli_fetch_assoc($selectArticlesWithCategories)) {
				?>

				<div class="article">

					<h1 class="article"><a href="articleFull.php?id=<?echo $selectArticlesWithCategoriesResult['idArticle']?>"> <?echo $selectArticlesWithCategoriesResult['articleName']?> </a></h1>
					<p class="hardbass" rows=7> <? echo $selectArticlesWithCategoriesResult['articleText']?> </p>
					<!-- <div class="buttonAndDate"> -->
						
						<!-- <a id="lookMoreArticle" href="javascript:openArticle()" onclick="openArticle()">Показать полностью</a>
						<a id="lookLessArticle" href="javascript:closeArticle()" style='display: none;'>Показать неполностью</a> -->
						<p class="date"> <?echo $selectArticlesWithCategoriesResult['articleDate']?> </p>
					<!-- </div> -->

				</div>

				<?
			}
			mysqli_free_result($selectArticlesWithCategories);
		}
		
		elseif (!isset($_POST['categorySelectButton'])) {
			$selectArticles = mysqli_query($link, "SELECT * FROM `articles` ORDER BY `articleDate` DESC;");

			if ($selectArticles) {
				while ($selectArticlesResult = mysqli_fetch_assoc($selectArticles)) {
					?>
					<div class="article">

						<h1 class="article"><a href="articleFull.php?id=<?echo $selectArticlesResult['idArticle']?>"> <?echo $selectArticlesResult['articleName']?> </a></h1>
						<p class="hardbass" rows=7> <? echo $selectArticlesResult['articleText']?> </p>
						<!-- <div class="buttonAndDate"> -->
							
							<!-- <a id="lookMoreArticle" href="javascript:openArticle()" onclick="openArticle()">Показать полностью</a>
							<a id="lookLessArticle" href="javascript:closeArticle()" style='display: none;'>Показать неполностью</a> -->
							<p class="date"> <?echo $selectArticlesResult['articleDate']?> </p>
						<!-- </div> -->

					</div>
					<?
				}
				mysqli_free_result($selectArticles);
			}
		}

		

		?>	

	</div>

	<div class="categoriesRight">

		<p style="padding-bottom: 5px; border-bottom: 2px solid blue; font-size: 16px; text-align: center;
		vertical-align: middle; font-weight: bold;">МИНУТКА РЕКЛАМЫ</p>

		<ul class="categorySelect">
			<li class="category"><a href="https://vk.com/mimiz50">МЕМЫ ТОЛЬКО ДЛЯ ИЗБРАННЫХ</a></li>
			<li class="category"><a href="https://vk.com/softikofficial">ЛЁНЬКА ($chsv++)</a></li>
			<li class="category" style="margin-bottom: unset"><a href="https://vk.com/meister_j">ЕГОРЫЧ ($chsv++)</a></li>
		</ul>	 

	</div>

</div>

<?include "../footerBlog.php"?>

<script type="text/javascript" src="../script.js"></script>
</body>
</html>
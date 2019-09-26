<div class="categoriesLeft">

	<p style="padding-bottom: 5px; border-bottom: 2px solid blue; font-size: 16px; text-align: center;
	vertical-align: middle; font-weight: bold;">КАТЕГОРИИ</p>

	<form method="POST" action="">

		<ul class="categorySelect">
			<?
			$selectCategories = mysqli_query($link, "SELECT * FROM `categories`;");
			if ($selectCategories) {
				while ($selectCategoriesResult = mysqli_fetch_assoc($selectCategories)) {
					?>
					<li class="category">
						<input type="radio" id="<? echo $selectCategoriesResult['categoryId']?>" 
						value="<? echo $selectCategoriesResult['categoryId'] ?>" name="categorySelectRadio" required="">
						<label class="categorySelect" for="<? echo $selectCategoriesResult['categoryId'] ?>"> <? echo $selectCategoriesResult['categoryName'] ?> </label>
					</li>
					<?
				}
			}
			?>
			<input type="submit" value="Показать" name="categorySelectButton" class="categorySelectButton">
		</ul>
	</form>

	<?
	$categorySelectRadio = $_POST['categorySelectRadio'];
	if (isset($_POST['categorySelectButton'])) {
		$selectArticlesWithCategories = mysqli_query($link, "SELECT * FROM `articles` WHERE `categoryId` = $categorySelectRadio ORDER BY `articleDate` DESC;");
		// $selectArticlesWithCategoriesResult = mysqli_fetch_assoc($selectArticlesWithCategories);
		// echo $categorySelectRadio;
		// print_r($selectArticlesWithCategoriesResult);
	}
	?>

</div>
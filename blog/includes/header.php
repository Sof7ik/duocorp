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
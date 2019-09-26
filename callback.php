<!DOCTYPE html>
<html>
<head>
	<title>Связаться с Антоном Овчинниковым</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/callback.css">
</head>
<body>

<div id="pop-up-container"> <!--тоже скопипастил у ведущего. Это окошко будет появляться при нажатии на кнопку #callback-->
	
	<div id="pop-up">
		
		<h1>Форма заявки</h1>
		
		<form action="send.php" method="POST">
			<input class="login" type="text" name="name"  placeholder="Имя" required autofocus style="margin-top: 5%;">
			<input type="text" name="telefon" placeholder="Телефон, 11 цифр без '+'" required pattern="[0-9]{11}" > <!-- 11 цифр-->
			<input class="login" type="email" name="email" s placeholder="email" required>
			<input class="zakazat_proekt" type="submit" name="zakazat_proekt" required value="Заказать проект">
			<a class="main" href="index.php">На главную</a>
		</form>
	
	</div>

</div>

</body>
</html>


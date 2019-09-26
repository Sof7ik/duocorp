<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/icons/favicon.ico" type="image/png">
	<link href="https://fonts.googleapis.com/css?family=Caveat|Chilanka|Gayathri|Lobster|Manjari|Oswald|Pattaya&display=swap" rel="stylesheet">
	<link id="linkStyle" rel="stylesheet" type="text/css" href="styles/style.css">
	<title>Антон Овичнников - официальный сайт</title>
</head>
	

<body>

<header>
	<div class="leftButtons">
		<a class="top" href="#top">Вверх</a>
		<ul class="leftSocialNav"> <!--левое навигационное меню-->
			<li class="social"><a class="social" href="https://vk.com/strelokk45" target="_blank"><img src="img/icons/vk.png" class="social"></a></li>
			<li class="social"><a class="social" href="" target="_blank"><img src="img/icons/facebook-logo.png" class="social"></a></li>
			<li class="social"><a class="social" href="" target="_blank"><img src="img/icons/twitter-logo-silhouette.png" class="social"></a></li>
			<li class="social"><a class="social" href="" target="_blank"><img src="img/icons/instagram-social-network-logo-of-photo-camera.png" class="social"></a></li>
			<li class="social" style="margin-left: 5%;"><a class="navButton" href="blog/blog.php">БЛОГ</a></li>
			<li class="social" style="margin-left: 5%;"><button id="navButton">ДЛЯ СЛЕПЫХ</button></li>
		</ul>

		

		<ul class="info"> <!--правое навигационное меню-->
			<a class="tel_number" href="tel:+79057661646">+7 (123) 456 78 90</a>
			<a id="callback" href="callback.php">Свяжитесь со мной</a>
		</ul>
	</div>

	<div class="intro"> <!--блок с информацией обо мне-->
		<h1>Антон Овчинников</h1>
		<h3>Кто кого чего когда</h3>
		<a href="portfolio.php" class="lookMore" style="margin: 0 0;">Узнать больше</a>
	</div>

</header>

<div class="clear">

</div>

<section class="aboutMe">

	<h1>ABOUT ME</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>

	<div class="photoAndText">

		<img src="img/avatars/programmerTeacherPhoto.jpg">
		<p class="quote">"Знаешь, вот если студент что-то не доучил в течение семестра, то ему на экзамене надо будет грызть маленький кусочек гранита. А если так, как ВЫ, ничего не делать в течение семестра, то вам не маленький кусочек грызть надо, а памятник "Рабочему и Колхознице" из гранита!"</p>
		<!-- <p class="quoteCopyright">© Викторович</p> -->

	</div>

	<a href="" class="lookMore">TEXT</a>

</section> 

<section class="myProfCourses">

	<h1>КУРСЫ ПОВЫШЕНИЯ КВАЛИФИКАЦИИ</h1>
	
	<ul class="myProfCourses">

		<li>				
			<p>COURSE NAME 1</p>
			<img src="img/icons/worldSkillsDiplome.png">
		</li>

		<li>
			<p class="course2">COURSE NAME 2</p>
			<img src="img/icons/worldSkillsDiplome.png">
		</li>

		<li>
			<p>COURSE NAME 3</p>
			<img src="img/icons/worldSkillsDiplome.png">
		</li>

	</ul>

</section>

<?include "footer.php"?>
<script src='script.js'></script>

</body>
</html>
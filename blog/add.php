<?
session_start();
require ('connection.php');

$articleName = $_POST['articleName'];
$articleText = $_POST['articleText'];
$articleSendSubmit = $_POST['articleSendSubmit'];

if (isset($articleText)) {
	$addArticle = mysqli_query($link, 
		"INSERT INTO `articles`(`idArticle`, `articleName`, `articleText`, `articleDate`) VALUES (NULL, '$articleName', '$articleText', NOW())");
}

if ($addArticle) {
	echo "успешно добавлено!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset='utf-8'>
</head>
<body>

</body>
</html>
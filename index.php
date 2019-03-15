<? $get = @file_get_contents('array.txt');
if(!empty($_POST['rating']))
{
		if(isset($_POST['send']))
		{
		$rating = $get.$_POST['rating'].'::';
		$write = file_put_contents('array.txt', $rating, LOCK_EX);
		}
 }
 else
 {
	echo 'Залиш свою оцінку<br>';
	}
///echo $_POST['rating'];
$get = @file_get_contents('array.txt');
$explode = @explode('::', $get);
$count = count($explode) - 1;
//echo 'данні з файлу'.$get.'<br>';
//echo 'кількість комірок '.$count.'<br>';
//print_r($explode);
$array_sum = array_sum($explode)/$count;
$array_sum = round($array_sum, 2);
//echo '<br>'.$array_sum.'<br>';
$width = $array_sum* 40;
?>
<!DOCTYPE html>
<html>
<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="author" content="Stan Kleshnov">
			<meta name="robots" content="index, follow">
			<link rel="alternate" hreflang="en" href="index.html?language=en">
			<link rel="alternate" hreflang="ru" href="index.html?language=ru">
			<link rel="alternate" hreflang="ua" href="index.html">
			<link rel="icon" href="img/favicon.ico" type="image/x-icon">
			<link rel="stylesheet" href="css/index.css">
			<style>#star{
						width: <? echo $width; ?>px;
						}</style>
			<title>Rating</title>
</head>
<body>
		  <h1>Залишити відгук</h1>



 <?php echo  "Рейтинг $array_sum проголосувало $count" ?>
<div class="star" title="<?php echo  "Рейтинг $array_sum проголосувало $count" ?>"><div id="star"></div></div>
<form action="" method="post" class="post">
<select name="rating">
<option></option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
<button name="send">Надіслати</button>
</form>
</body>
</html>

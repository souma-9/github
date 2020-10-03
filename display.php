<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="author" content="井上">
<title>改行</title>
</head>
<body>
<h1>1-50まで改行しながら出力。3の倍数と3がつく時にこんにちはを出力</h1>
<?php
for ($i = 1; $i <= 50; $i++) {
	echo $i;
	if ($i % 3 == 0 || strpos($i, '3') !== false) {
		echo 'こんにちは';
	}
	echo '<br>';
}
?>
</body>
</html>


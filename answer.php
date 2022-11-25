<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/astyle.css">
</head>
<body>
<?php
$port = $_POST['port'];
$language = $_POST['language'];
$command = $_POST['command'];
$hidden_param = $_POST['hidden_param'];
?>

<p><?php echo $hidden_param ; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<?php if($port == '80') {
    echo "正解！";
} else {
    echo "残念...";
}
?>

<p>②の答え</p>
<?php if($language == 'PHP') {
    echo "正解！";
} else {
    echo "残念...";
}
?>

<p>③の答え</p>
<?php if($command == 'select') {
    echo "正解！";
} else {
    echo "残念...";
}
 ?>
</body>
</html>
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
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = filter_input(INPUT_POST , 'my_name');
$port = $_POST['port'];
$language = $_POST['language'];
$command = $_POST['command'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>

<p><?php echo $my_name ; ?>さんの結果は・・・？</p>
<p>①の答え <?php echo $port; ?>です </p>
<!--作成した関数を呼び出して結果を表示-->
<?php if($port == '80') {
    echo "正解！";
} else {
    echo "残念...";
}
?>

<p>②の答え <?php echo $language; ?>です</p>
<!--作成した関数を呼び出して結果を表示-->
<?php if($language == 'PHP') {
    echo "正解！";
} else {
    echo "残念...";
}
?>

<p>③の答え <?php echo $command; ?></p>
<!--作成した関数を呼び出して結果を表示-->
<?php if($command == 'join') {
    echo "正解！";
} else {
    echo "残念...";
}
 ?>
</body>
</html>
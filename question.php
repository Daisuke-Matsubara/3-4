<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/qstyle.css">
</head>
<body>
    <?php
    $my_name = filter_input(INPUT_POST , 'my_name');
    $port = ["80","22","20","21"];
    $language = ["PHP","Python","JAVA","HTML"];
    $command = ["join","select","insert","update"];
    ?>
    <p>お疲れ様です <?php echo $my_name ; ?> さん</p>
    <!--フォームの作成 通信はPOST通信で-->
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    
    <?php foreach ($port as $value) { ?>
    <input type="radio">
    <?php echo $value;
    }
    ?>

    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($language as $value) { ?>
    <input type="radio">
    <?php echo $value;
    }
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach ($command as $value) { ?>
    <input type="radio">
    <?php echo $value;
    }
    ?>

    <form action = "answer.php" method = "post" >
            <input type = "submit" value = "回答する">
    </form> 

</body>
</html>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
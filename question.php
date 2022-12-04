<link rel="stylesheet" href="css/qstyle.css">
<body>
<?php
    $my_name = $_POST['my_name'];
    $port = ["80","22","20","21"];
    $language = ["PHP","Python","JAVA","HTML"];
    $command = ["join","select","insert","update"];
    ?>
        
<form action = "answer.php" method = "post" >
    <input type="hidden" name="hidden_param" value=<?php echo $my_name ?> />

    <p>お疲れ様です <?php echo $my_name ; ?> さん</p>
    <h2>①ネットワークのポート番号は何番？</h2> 
    <?php foreach ($port as $value) { ?>
    <input type="radio" name="port" value=<?php echo $value ?> />
    <?php echo $value;
    }
    ?>

    <h2>②Webページを作成するための言語は？</h2>
    <?php foreach ($language as $value) { ?>
    <input type="radio" name="language" value=<?php echo $value ?> />
    <?php echo $value;
    }
    ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <?php foreach ($command as $value) { ?>
    <input type="radio" name="command" value=<?php echo $value ?> />
    <?php echo $value;
    }
    ?>
    <br>   
  
        <input type = "submit" value = "回答する" />
    </form> 

</body>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
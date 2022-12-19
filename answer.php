<link rel="stylesheet" href="css/astyle.css">

<body>
<?php
$port = $_POST['port'];
$language = $_POST['language'];
$command = $_POST['command'];
$hidden_param = $_POST['hidden_param'];
?>

<p><?php echo $hidden_param ; ?>さんの結果は・・・？</p>
<?php

function answer($question,$choice,$number) {?>
<p> <?php echo $number ?> の答え</p> <?php
    if($question == $choice) {
        echo "正解！";
    } else {
        echo "残念...";
    } 
    echo '<br>';
} 

answer($port,80,"①");
answer($language,'PHP',"②");
answer($command,'select',"③");

?>

</body>
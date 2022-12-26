<?php
   class Taiyaki {
     public $content;

      public function __construct($nakami) {
         $this->content = $nakami;
      }

      public function whatIsContent() {
         echo '中身は'. $this->content.'だよ。';
      }
   }

   $taiyaki_anko = new Taiyaki("あんこ");
   $taiyaki_anko->whatIsContent();
   echo '<br>';

   $taiyaki_cream = new Taiyaki("クリーム");
   $taiyaki_cream->whatIsContent();
   echo '<br>';
?>

<?php
   class Enemy {
      public $name;
      public $stamina;
      public $attack;
      public static $count = 0;

      public function __construct($name , $stamina = 100 , $attack = 10) {
         $this ->name = $name;
         $this ->stamina = $stamina;
         $this ->attack = $attack;
         Self::$count += 1;
      }

      public function sayMyName() {
         echo $this->name . 'があらわれた!</br>';
      }
      
      public function powerUp() {
         $this ->attack += 10;
         echo '攻撃力が'. $this->attack . 'になった。</br>';
      }

      public static function getEnemyCount() {
         echo Self::$count . '体の敵を作りました！';
      }

   }

   Enemy::getEnemyCount();
     $slime_A = new Enemy('スライム');
     $slime_B = new Enemy('スライム');
     $slime_C = new Enemy('スライム');
     $slime_D = new Enemy('スライム');
     Enemy::getEnemyCount();

    $slime = new Enemy('スライム');
    $slime -> sayMyname();
      $slime -> powerUp();
      $slime -> powerUp();
      $slime -> powerUp();
      echo $slime -> stamina;
      echo $slime -> attack;
      echo '<br>';

   $slime = new Enemy('クリボー',200,20);
   $slime -> sayMyname();
      echo '<br>';
      echo $slime -> stamina;
      echo $slime -> attack;
      
      class Boss extends Enemy {
         public function specialAttack() {
            echo 'すごい強い一撃！';
         }
      }

      $boss = new Boss('竜王');
      $boss->sayMyName();
      $boss->specialAttack();
      echo '<br>';

      $slime = new Enemy('スライム');
        $boss = new Boss('竜王');
        $slime -> sayMyName();
        $boss -> sayMyName();



?>
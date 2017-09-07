<?php
include 'header.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<form action="regist.php" method="post">
  下記コマンドを入力してください。<br />
<?php
   if(!isset($_SESSION['i'])){
       $_SESSION['i'] = 0;
    }else{
          $i = $_SESSION['i'];
          if($_SESSION['hairetudayo'][$i] == 0){
              $i++;
          }
          if($i >= 5){
               $i = 0;
          }
          $_SESSION['i'] = $i;
    }
$p1 = array("cd","pwd","ls","cat","apt-get"); //コマンド入力管理配列初期化
echo 'コマンド:'.$p1[$i]."<br />\n";
?>
  <input type="text" name="command" size="30" value="" /><br />
  <input type="submit" value="入力情報送信" />
</form>
</body>
</html>
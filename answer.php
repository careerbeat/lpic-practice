<?php
include 'header.php';

//answer.php
$u = $_SESSION['i'];
$_SESSION['i'];
$hairetu = array('1','1','1','1','1');


$question = $_POST['question']; //ラジオボタンの内容を受け取る
$answer = $_POST['answer'];   //hiddenで送られた正解を受け取る



//結果の判定
if($question == $answer){
    $hairetu[$u] = 0;
    $_SESSION['hairetudayo'] = $hairetu;
    for ($a = 0; $a <= 4; $a++){
        if($hairetu[$a] == 0){
            $f = 0;
        }
        else
        {
            $f = 1;
        }

    }
    if($f == 1){
        print_r($hairetu);
        header("Location:form.php");
    }else{
        echo "FINISH";
            $f = 0;
    }

}else{
    echo "$question";
    echo "$answer";
    $_SESSION['hairetudayo'] = $hairetu;
        header("Location:form.php");
}
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>簡易クイズプログラム - 結果</title>
</head>
<body>
 
<h2>クイズの結果</h2>
全問正解です！
</body>
</html>
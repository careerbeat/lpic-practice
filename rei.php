<?php
include 'header.php';
include 'constants.php';

$u = $_SESSION['i'];

$question_cd = array('ディレクトリを移動する','ファイルを削除する','CDを作成する','管理者権限を変更する'); //4択の選択肢を設定
$question_pwd = array('カレントディレクトリを確認する','ディレクトリを移動する','ディレクトリを作成する','管理者権限を変更する'); //4択の選択肢を設定
$question_ls = array('現在のディレクトリのファイルとディレクトリを一覧表示','ファイルを削除する','LinuxServerを起動する','何も起こらない'); //4択の選択肢を設定
$question_cat = array('ファイルの中身を表示','猫が表示される','ディレクトリの中身が表示される','そんなコマンドはない'); //4択の選択肢を設定
$question_apt_get = array('パッケージの取得','ProxyServerを起動する','エラーログを表示する','管理者権限を変更する'); //4択の選択肢を設定

$answer_cd = $question_cd[0]; //正解の問題を設定
$answer_pwd = $question_pwd[0]; //正解の問題を設定
$answer_ls = $question_ls[0]; //正解の問題を設定
$answer_cat = $question_cat[0]; //正解の問題を設定
$answer_apt_get = $question_apt_get[0]; //正解の問題を設定

switch ($u) {
    case 0:
        $question = $question_cd;
        $answer = $answer_cd;
        break;
    case 1:
        $question = $question_pwd;
        $answer = $answer_pwd;
        break;
    case 2:
        $question = $question_ls;
        $answer = $answer_ls;
        break;
    case 3:
        $question = $question_cat;
        $answer = $answer_cat;
        break;
    case 4:
        $question = $question_apt_get;
        $answer = $answer_apt_get;
        break;
}

shuffle($question); //配列の中身をシャッフル

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>簡易クイズプログラム</title>
</head>
<body>
 
<h2><?php echo 'コマンド:'.$commands[$u].'の説明はどれ？' ?></h2>
<form method="POST" action="answer.php">
   <?php foreach($question as $value){ ?>
   <input type="radio" name="question" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer" value="<?php echo $answer ?>">
   <input type="submit" value="回答する">
</form>
 
</body>
</html>
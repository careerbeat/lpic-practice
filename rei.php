<?php
 
$title = '�X�}�u���ɎQ�킵�Ă���|�P�����͂ǂ�H';
 
$question = array(); //���̕ϐ��͔z��ł���Ƃ����錾
$question = array('���U�[�h��','�J���b�N�X','�t�V�M�o�i','�J�r�S��'); //4���̑I������ݒ�
 
$answer = $question[0]; //�����̖���ݒ�
 
shuffle($question); //�z��̒��g���V���b�t��
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>�ȈՃN�C�Y�v���O����</title>
</head>
<body>
 
<h2><?php echo $title ?></h2>
<form method="POST" action="answer.php">
   <?php foreach($question as $value){ ?>
   <input type="radio" name="question" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer" value="<?php echo $answer ?>">
   <input type="submit" value="�񓚂���">
</form>
 
</body>
</html>
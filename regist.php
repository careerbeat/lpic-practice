<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$p1 = array("cd","pwd","ls","cat","apt-get"); //�R�}���h���͊Ǘ��z�񏉊���
session_start();
$u = $_SESSION['i'];
if ($_POST['command'] === $p1[$u])
{
header("Location: http://192.168.24.1/rei.php");
}
else
{
header("Location: http://192.168.24.1/form.html");
}
?>

<?php
include 'header.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$p1 = array("cd","pwd","ls","cat","apt-get"); //�R�}���h���͊Ǘ��z�񏉊���
$u = $_SESSION['i'];
if ($_POST['command'] === $p1[$u])
{
header("Location: rei.php");
}
else
{
header("Location: form.php");
}
?>

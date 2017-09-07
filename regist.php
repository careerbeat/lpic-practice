<?php
include 'header.php';
include 'constants.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$u = $_SESSION['i'];
if ($_POST['command'] === $commands[$u])
{
header("Location: rei.php");
}
else
{
header("Location: form.php");
}
?>

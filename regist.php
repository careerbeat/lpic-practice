<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if ($_POST['command'] === "pwd")
{
header("Location: http://192.168.24.1/rei.php");
}
else
{
header("Location: http://192.168.24.1/form.html");
}
?>


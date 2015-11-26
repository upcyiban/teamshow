<?php
$con = mysql_connect("45.62.112.5","yiban","123456");
if (!$con)
{
    die('Could not connect: ' . mysql_error() . '请联系管理员!');
}

// some code
mysql_select_db("yiban", $con);
$content=$name=$email  ="";
$content = mysql_real_escape_string($_POST["message"]);
$name = mysql_real_escape_string($_POST["name"]);
$email = mysql_real_escape_string($_POST["email"]);

$sql = "INSERT INTO yibanshowmessage ( name , email , content ) VALUES ('$name','$email','$content')";

if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}

mysql_close($con);
?>
<script>
    alert('发送成功,返回主页.');
    window.location.href="index.html";
</script>

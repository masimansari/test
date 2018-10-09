<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php
echo "User: ".$_SESSION['user']."<br />";
echo "Pass: ".$_SESSION['pass']."<br />";
?>
</body>
</html>
<script>
alert(Cookie.getCookie("JSESSIONID"));
</script>
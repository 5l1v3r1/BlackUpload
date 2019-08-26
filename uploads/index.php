<?php
$IPAddress = $_SERVER['REMOTE_ADDR'];
echo "<!DOCTYPE html>
<html>
<head>
	<title>403 - Access Denied</title>
</head>
<body>
<h1>Access Denied!</h1>
<p>Oops, You don't have premission to view ".__DIR__." on this server</p>
<p>Your IP: $IPAddress</p>
<hr>
<small>".$_SERVER['SERVER_SOFTWARE']."</small>
</body>
</html>";
http_response_code(403);
?>
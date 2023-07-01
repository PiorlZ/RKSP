<?php

if(!isset($PHP_AUTH_USER))
{
	Header('WWW-Authenticate: Basic realm="Admin Center"');
	Header("HTTP/1.0 401 Unauthorized");
	exit();
}
else
{
	$password = $PHP_AUTH_PW;

	$name = PHP_AUTH_USER;

	if($name != "user")
	{
		Header('WWW-Authenticate: Basic realm="Admin Center"');
		Header("HTTP/1.0 401 Unauthorized");
		exit();
	}
	else
	{
		if($password != "123")
		{
			Header('WWW-Authenticate: Basic realm="Admin Center"');
			Header("HTTP/1.0 401 Unauthorized");
			exit();

		}
	}
}
?>
<a href="start.php"> Вернуться назад</a>
<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: glowna.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Portal QMM</title>
    <style>
        body
        {
            text-align: center;
        }
        
        .przycisk 
        {
            background-color: cadetblue;
        }


        .przycisk:hover 
        {
            background-color: skyblue;
        }
    </style>
    
</head>

<body>
	<form action="zaloguj.php" method="post" style="font-size: 50px">
        
        <a>Logowanie do portalu QMM</a> <br /> <br />
        	
		Login: <br /> <input type="text" name="uzytkownik" style="font-size: 50px"/> <br />
		Hasło: <br /> <input type="password" name="haslo" style="font-size: 50px"/> <br /><br />
		<input type="submit" value="Zaloguj się" class="przycisk" style="font-size: 50px"/>
	
	</form>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>
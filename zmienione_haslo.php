<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}


	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Portal QMM</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	    
</head>

<body>
	
	
	<div class="container">
	
		<div id="logo">
			<?php
               echo '<span style="font-size: 16px;">Użytkownik:</span> <br />';
	           echo $_SESSION['imie']."  ".$_SESSION['nazwisko'];
            ?>
		</div>
        
        <div style="clear:both;"></div>

        <div id="sidebar">
			<div class="optionL"><a href="glowna.php">Strona główna</div>
            <div class="optionL"><a href="logout.php">Wylogowanie</a></div>
			<div class="optionL">Zmiana hasła</div>

            
		</div>
 
		<div id="sidebar">
	
            <h3 class="error">Hasło zostało zmienione.</h3><br /><br />
	
	           <a href="glowna.php" class="optionL">Powrót do strony głównej</a>
	           <br /><br />
            
        </div>
		<div style="clear:both;"></div>
		<div id="footer">
			2020 &copy; WwP/IT
		</div>
	
	</div>
	

    
    
    
</body>
</html>
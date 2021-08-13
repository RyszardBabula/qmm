<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
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
			<div class="optionL">Strona główna</div>
            <div class="optionL"><a href="logout.php">Wylogowanie</a></div>
			<div class="optionL"><a href="zmien_haslo.php">Zmiana hasła</div>
                <br />
            <div class="optionL"><a href="WwP_QM_17_s1.html">WwP QM-17 s1</a></div>
		</div>
 
<!--
        <div id="content">
			<h2>Strona główna portalu QMM </h2>
			
        </div>
-->    
		<div style="clear:both;"></div>
		<div id="footer">
			2020 &copy; WwP/IT
		</div>
	
	</div>
	

    
    
    
</body>
</html>
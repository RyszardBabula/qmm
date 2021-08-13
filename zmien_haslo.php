<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
    if (isset($_POST['haslo1']))
    {
        
		//Udana walidacja? Założenie TAK
		$wszystko_OK=true;
        
		//Sprawdź poprawność hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
        $uzytkownik = $_SESSION['uzytkownik'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
        // Poniższa linia wyświetli na stronie zahashowane hasło
        //echo $haslo_hash; exit();
        
        
        
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
        
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy uzytkownik już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE uzytkownik='$uzytkownik'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_uzytkownikow = $rezultat->num_rows;
				if($ile_uzytkownikow<=0)
				{
					$wszystko_OK=false;
					$_SESSION['e_haslo']="Nie ma tkiego użytkownika!";
				}		

				
				if ($wszystko_OK==true)
				{
					//Zmiana hasła użytkownika
					
					if ($polaczenie->query("UPDATE uzytkownicy SET haslo = '$haslo_hash' WHERE uzytkownik='$uzytkownik'"))
                    {
                        header('Location: zmienione_haslo.php');
                        exit();
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o odwiedziny w innym terminie!</span>';
			//echo '<br />Informacja developerska: '.$e;
		}
        
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
        
        
        <div id="sidebar">
			<div class="optionL"><a href="glowna.php">Strona główna</div>
            <div class="optionL"><a href="logout.php">Wylogowanie</a></div>
			<div class="optionL">Zmiana hasła</div>

            
		</div>
		                  
		<!--<div id="content">-->
        <div id="sidebar">
			
            <form method="post">
        
              <h2>Zmiana hasła </h2>
		      Nowe hasło: <br /> <input type="password" name="haslo1" style="font-size: 50px"/> <br />
		      Potwierdź:  <br /> <input type="password" name="haslo2" style="font-size: 50px"/> <br /><br />
                <?php
                    if (isset($_SESSION['e_haslo']))
			         {
				        echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				        unset($_SESSION['e_haslo']);
			         }
		          ?>
                <input type="submit" value="Zapisz nowe hasło" class="przycisk" style="font-size: 50px"/>
	
	       </form>



            
        </div>

        <div style="clear:both;"></div>
		<div id="footer">
			2020 &copy; WwP/IT
		</div>

	</div>
	

    
    
    
</body>
</html>
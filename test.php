
<?php

// Zapis danych do pliku Excela .xls    
$dane = 'ęóąśłżźćń'."\t".'ĘÓĄŚŁŻŹĆŃ'."\t".'ęĘóÓąĄśŚłŁżŻźŹćĆńŃ'."\t".'eEoOaAsSlLzZzZcCnN';


//$dane = utf8_encode($dane);

//$string_encoded = iconv( mb_detect_encoding( $dane ), 'Windows-1252//TRANSLIT', $dane );
$string_encoded = iconv( mb_detect_encoding( $dane ), 'ISO-8859-2//TRANSLIT', $dane );
//$string_encoded = iconv( mb_detect_encoding( $dane ), 'CP1256//TRANSLIT', $dane );    

    
$plik = @fopen('\\\wrofdc301.fbrakes.com\\WwP2$\\QMM\\09_Share_files\\LPA\\testPL.xls', 'a+');

//fwrite($plik,$dane."\r\n");
fwrite($plik,$string_encoded."\r\n");
fclose($plik);
//************************************************************    


?>


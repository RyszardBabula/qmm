<?php
session_start();

require_once("connect.php");

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
if ($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{

$ok = 0;
$nok = 0;

$uzytkownik = $_SESSION['uzytkownik'];

$DzienAudytu = $_POST["DataAudytu"];
$PoziomAudytu = $_POST["Poziom"];
$Obszar = $_POST["Obszar"];
$Linia = $_POST["Linia"];
$Operacja = $_POST["Operacja"];
$Maszyna = $_POST["Maszyna"];
$Produkt = $_POST["Produkt"];
$Audytor = $_POST["Audytor"];
$Funkcja = $_POST["Funkcja"];
$Audytowany = $_POST["Audytowany"];
$AudytowanaZmiana = $_POST["AudytowanaZmiana"];

$LPA11 = $_POST["LPA11"];
$LPA11K = $_POST["LPA11K"];
$LPA12 = $_POST["LPA12"];
$LPA12K = $_POST["LPA12K"];

if ($LPA11 == "ok") {$ok = $ok +1;}
if ($LPA11 == "nok") {$nok = $nok +1;}
if ($LPA12 == "ok") {$ok = $ok +1;}
if ($LPA12 == "nok") {$nok = $nok +1;}


$BHP21 = $_POST["BHP21"];
$BHP21K = $_POST["BHP21K"];
$BHP22 = $_POST["BHP22"];
$BHP22K = $_POST["BHP22K"];
$BHP23 = $_POST["BHP23"];
$BHP23K = $_POST["BHP23K"];
$BHP24 = $_POST["BHP24"];
$BHP24K = $_POST["BHP24K"];
$BHP25 = $_POST["BHP25"];
$BHP25K = $_POST["BHP25K"];
$BHP26 = $_POST["BHP26"];
$BHP26K = $_POST["BHP26K"];
$BHP27 = $_POST["BHP27"];
$BHP27K = $_POST["BHP27K"];

if ($BHP21 == "ok") {$ok = $ok +1;}
if ($BHP21 == "nok") {$nok = $nok +1;}
if ($BHP22 == "ok") {$ok = $ok +1;}
if ($BHP22 == "nok") {$nok = $nok +1;}
if ($BHP23 == "ok") {$ok = $ok +1;}
if ($BHP23 == "nok") {$nok = $nok +1;}
if ($BHP24 == "ok") {$ok = $ok +1;}
if ($BHP24 == "nok") {$nok = $nok +1;}
if ($BHP25 == "ok") {$ok = $ok +1;}
if ($BHP25 == "nok") {$nok = $nok +1;}
if ($BHP26 == "ok") {$ok = $ok +1;}
if ($BHP26 == "nok") {$nok = $nok +1;}
if ($BHP27 == "ok") {$ok = $ok +1;}
if ($BHP27 == "nok") {$nok = $nok +1;}


$DOK31 = $_POST["DOK31"];
$DOK31K = $_POST["DOK31K"];
$DOK32 = $_POST["DOK32"];
$DOK32K = $_POST["DOK32K"];
//$DOK33 = $_POST["DOK33"];
//$DOK33K = $_POST["DOK33K"];
$DOK33 = "na";
$DOK33K = "";

$DOK34 = $_POST["DOK34"];
$DOK34K = $_POST["DOK34K"];
$DOK35 = $_POST["DOK35"];
$DOK35K = $_POST["DOK35K"];
$DOK36 = $_POST["DOK36"];
$DOK36K = $_POST["DOK36K"];

if ($DOK31 == "ok") {$ok = $ok +1;}
if ($DOK31 == "nok") {$nok = $nok +1;}
if ($DOK32 == "ok") {$ok = $ok +1;}
if ($DOK32 == "nok") {$nok = $nok +1;}
//if ($DOK33 == "ok") {$ok = $ok +1;}
//if ($DOK33 == "nok") {$nok = $nok +1;}
if ($DOK34 == "ok") {$ok = $ok +1;}
if ($DOK34 == "nok") {$nok = $nok +1;}
if ($DOK35 == "ok") {$ok = $ok +1;}
if ($DOK35 == "nok") {$nok = $nok +1;}
if ($DOK36 == "ok") {$ok = $ok +1;}
if ($DOK36 == "nok") {$nok = $nok +1;}


$OPS31 = $_POST["OPS31"];
$OPS31K = $_POST["OPS31K"];
$OPS32 = $_POST["OPS32"];
$OPS32K = $_POST["OPS32K"];
$OPS33 = $_POST["OPS33"];
$OPS33K = $_POST["OPS33K"];

if ($OPS31 == "ok") {$ok = $ok +1;}
if ($OPS31 == "nok") {$nok = $nok +1;}
if ($OPS32 == "ok") {$ok = $ok +1;}
if ($OPS32 == "nok") {$nok = $nok +1;}
if ($OPS33 == "ok") {$ok = $ok +1;}
if ($OPS33 == "nok") {$nok = $nok +1;}


$IPC41 = $_POST["IPC41"];
$IPC41K = $_POST["IPC41K"];
$IPC42 = $_POST["IPC42"];
$IPC42K = $_POST["IPC42K"];
$IPC43 = $_POST["IPC43"];
$IPC43K = $_POST["IPC43K"];
$IPC44 = $_POST["IPC44"];
$IPC44K = $_POST["IPC44K"];
$IPC45 = $_POST["IPC45"];
$IPC45K = $_POST["IPC45K"];
//$IPC46 = $_POST["IPC46"];
//$IPC46K = $_POST["IPC46K"];
$IPC46 = "na";
$IPC46K = "";

if ($IPC41 == "ok") {$ok = $ok +1;}
if ($IPC41 == "nok") {$nok = $nok +1;}
if ($IPC42 == "ok") {$ok = $ok +1;}
if ($IPC42 == "nok") {$nok = $nok +1;}
if ($IPC43 == "ok") {$ok = $ok +1;}
if ($IPC43 == "nok") {$nok = $nok +1;}
if ($IPC44 == "ok") {$ok = $ok +1;}
if ($IPC44 == "nok") {$nok = $nok +1;}
if ($IPC45 == "ok") {$ok = $ok +1;}
if ($IPC45 == "nok") {$nok = $nok +1;}
//if ($IPC46 == "ok") {$ok = $ok +1;}
//if ($IPC46 == "nok") {$nok = $nok +1;}


$POK51 = $_POST["POK51"];
$POK51K = $_POST["POK51K"];
$POK52 = $_POST["POK52"];
$POK52K = $_POST["POK52K"];

if ($POK51 == "ok") {$ok = $ok +1;}
if ($POK51 == "nok") {$nok = $nok +1;}
if ($POK52 == "ok") {$ok = $ok +1;}
if ($POK52 == "nok") {$nok = $nok +1;}


$MON61 = $_POST["MON61"];
$MON61K = $_POST["MON61K"];
$MON62 = $_POST["MON62"];
$MON62K = $_POST["MON62K"];
$MON63 = $_POST["MON63"];
$MON63K = $_POST["MON63K"];
$MON64 = $_POST["MON64"];
$MON64K = $_POST["MON64K"];
//$MON65 = $_POST["MON65"];
//$MON65K = $_POST["MON65K"];
$MON65 = "na";
$MON65K = "";
$MON66 = $_POST["MON66"];
$MON66K = $_POST["MON66K"];
$MON67 = $_POST["MON67"];
$MON67K = $_POST["MON67K"];
$MON68 = $_POST["MON68"];
$MON68K = $_POST["MON68K"];

if ($MON61 == "ok") {$ok = $ok +1;}
if ($MON61 == "nok") {$nok = $nok +1;}
if ($MON62 == "ok") {$ok = $ok +1;}
if ($MON62 == "nok") {$nok = $nok +1;}
if ($MON63 == "ok") {$ok = $ok +1;}
if ($MON63 == "nok") {$nok = $nok +1;}
if ($MON64 == "ok") {$ok = $ok +1;}
if ($MON64 == "nok") {$nok = $nok +1;}
//if ($MON65 == "ok") {$ok = $ok +1;}
//if ($MON65 == "nok") {$nok = $nok +1;}
if ($MON66 == "ok") {$ok = $ok +1;}
if ($MON66 == "nok") {$nok = $nok +1;}
if ($MON67 == "ok") {$ok = $ok +1;}
if ($MON67 == "nok") {$nok = $nok +1;}
if ($MON68 == "ok") {$ok = $ok +1;}
if ($MON68 == "nok") {$nok = $nok +1;}


$NAR71 = $_POST["NAR71"];
$NAR71K = $_POST["NAR71K"];
$NAR72 = $_POST["NAR72"];
$NAR72K = $_POST["NAR72K"];

if ($NAR71 == "ok") {$ok = $ok +1;}
if ($NAR71 == "nok") {$nok = $nok +1;}
if ($NAR72 == "ok") {$ok = $ok +1;}
if ($NAR72 == "nok") {$nok = $nok +1;}


$KOM81 = $_POST["KOM81"];
$KOM81K = $_POST["KOM81K"];
$KOM82 = $_POST["KOM82"];
$KOM82K = $_POST["KOM82K"];
$KOM83 = $_POST["KOM83"];
$KOM83K = $_POST["KOM83K"];
$KOM84 = $_POST["KOM84"];
$KOM84K = $_POST["KOM84K"];
$KOM85 = $_POST["KOM85"];
$KOM85K = $_POST["KOM85K"];

if ($KOM81 == "ok") {$ok = $ok +1;}
if ($KOM81 == "nok") {$nok = $nok +1;}
if ($KOM82 == "ok") {$ok = $ok +1;}
if ($KOM82 == "nok") {$nok = $nok +1;}
if ($KOM83 == "ok") {$ok = $ok +1;}
if ($KOM83 == "nok") {$nok = $nok +1;}
if ($KOM84 == "ok") {$ok = $ok +1;}
if ($KOM84 == "nok") {$nok = $nok +1;}
if ($KOM85 == "ok") {$ok = $ok +1;}
if ($KOM85 == "nok") {$nok = $nok +1;}


$PDOD91 = $_POST["PDOD91"];
$DOD91 = $_POST["DOD91"];
$DOD91K = $_POST["DOD91K"];
$PDOD92 = $_POST["PDOD92"];
$DOD92 = $_POST["DOD92"];
$DOD92K = $_POST["DOD92K"];
$PDOD93 = $_POST["PDOD93"];
$DOD93 = $_POST["DOD93"];
$DOD93K = $_POST["DOD93K"];

if ($DOD91 == "ok") {$ok = $ok +1;}
if ($DOD91 == "nok") {$nok = $nok +1;}
if ($DOD92 == "ok") {$ok = $ok +1;}
if ($DOD92 == "nok") {$nok = $nok +1;}
if ($DOD93 == "ok") {$ok = $ok +1;}
if ($DOD93 == "nok") {$nok = $nok +1;}


$PODS0 = $_POST["PODS0"];

$PODS11 = $_POST["PODS11"];
$PODS12 = $_POST["PODS12"];
$PODS21 = $_POST["PODS21"];
$PODS22 = $_POST["PODS22"];
$PODS31 = $_POST["PODS31"];
$PODS32 = $_POST["PODS32"];
$PODS41 = $_POST["PODS41"];
$PODS42 = $_POST["PODS42"];


$razem = $ok + $nok;

$procent = round((( $ok * 100) / $razem), 2);

if ($procent >= 90) {$ocena = $procent."% - Akceptowalny";}
if ($procent < 90 && $procent >= 75) {$ocena = $procent."% - Akceptowalny z zastrzeżeniami";}
if ($procent < 75) {$ocena = $procent."% - Nieakceptowalny";}



$sql = "INSERT INTO audyt_warstwowy(id_audytu, uzytkownik, data_audytu, poziom_audytu, audytowany_obszar, linia, operacja, maszyna, produkt, audytor, funkcja, audytowany, audytowana_zmiana, lpa11, lpa11k, lpa12, lpa12k, bhp21, bhp21k, bhp22, bhp22k, bhp23, bhp23k, bhp24, bhp24k, bhp25, bhp25k, bhp26, bhp26k, bhp27, bhp27k, dok31, dok31k, dok32, dok32k, dok33, dok33k, dok34, dok34k, dok35, dok35k, dok36, dok36k, ops31, ops31k, ops32, ops32k, ops33, ops33k,ipc41, ipc41k, ipc42, ipc42k, ipc43, ipc43k, ipc44, ipc44k, ipc45, ipc45k, ipc46, ipc46k, pok51, pok51k, pok52, pok52k, mon61, mon61k, mon62, mon62k, mon63, mon63k, mon64, mon64k, mon65, mon65k, mon66, mon66k, mon67, mon67k, mon68, mon68k, nar71, nar71k, nar72, nar72k, kom81, kom81k, kom82, kom82k, kom83, kom83k, kom84, kom84k, kom85, kom85k, dod91p, dod91, dod91k, dod92p, dod92, dod92k, dod93p, dod93, dod93k, osoba_nadzor, nazwisko1, funkcja1, nazwisko2, funkcja2, nazwisko3, funkcja3, nazwisko4, funkcja4, ocena) VALUES ('', '$uzytkownik', '$DzienAudytu', '$PoziomAudytu', '$Obszar', '$Linia', '$Operacja', '$Maszyna', '$Produkt', '$Audytor', '$Funkcja', '$Audytowany', '$AudytowanaZmiana', '$LPA11', '$LPA11K', '$LPA12', '$LPA12K', '$BHP21', '$BHP21K', '$BHP22', '$BHP22K', '$BHP23', '$BHP23K', '$BHP24', '$BHP24K', '$BHP25', '$BHP25K', '$BHP26', '$BHP26K', '$BHP27', '$BHP27K', '$DOK31', '$DOK31K', '$DOK32', '$DOK32K', '$DOK33', '$DOK33K','$DOK34', '$DOK34K', '$DOK35', '$DOK35K', '$DOK36', '$DOK36K', '$OPS31', '$OPS31K', '$OPS32', '$OPS32K', '$OPS33', '$OPS33K', '$IPC41', '$IPC41K', '$IPC42', '$IPC42K', '$IPC43', '$IPC43K', '$IPC44', '$IPC44K', '$IPC45', '$IPC45K', '$IPC46', '$IPC46K', '$POK51', '$POK51K', '$POK52', '$POK52K', '$MON61', '$MON61K', '$MON62', '$MON62K', '$MON63', '$MON63K', '$MON64', '$MON64K', '$MON65', '$MON65K', '$MON66', '$MON66K', '$MON67', '$MON67K', '$MON68', '$MON68K', '$NAR71', '$NAR71K', '$NAR72', '$NAR72K', '$KOM81', '$KOM81K', '$KOM82', '$KOM82K', '$KOM83', '$KOM83K', '$KOM84', '$KOM84K', '$KOM85', '$KOM85K', '$PDOD91', '$DOD91', '$DOD91K', '$PDOD92', '$DOD92', '$DOD92K', '$PDOD93', '$DOD93', '$DOD93K', '$PODS0', '$PODS11', '$PODS12', '$PODS21', '$PODS22', '$PODS31', '$PODS32', '$PODS41', '$PODS42', '$ocena')";


$rezultat = @$polaczenie->query($sql);

    
$max_id = "";
$max_data = "";

$wynik = mysqli_query($polaczenie, "SELECT max(id_audytu) AS max_id, max(data_sys) AS max_data FROM audyt_warstwowy");
$row = mysqli_fetch_array($wynik);
$max_id = $row['max_id'];
$max_data = $row['max_data'];


$polaczenie->close();
    
//************************************************************
// Zapis danych do pliku Excela .xls    
$dane = $max_id."\t".$max_data."\t".$uzytkownik."\t".$DzienAudytu."\t".$PoziomAudytu."\t".$Obszar."\t".$Linia."\t".$Operacja."\t".$Maszyna."\t".$Produkt."\t".$Audytor."\t".$Funkcja."\t".$Audytowany."\t".$AudytowanaZmiana."\t".$LPA11."\t".$LPA11K."\t".$LPA12."\t".$LPA12K."\t".$BHP21."\t".$BHP21K."\t".$BHP22."\t".$BHP22K."\t".$BHP23."\t".$BHP23K."\t".$BHP24."\t".$BHP24K."\t".$BHP25."\t".$BHP25K."\t".$BHP26."\t".$BHP26K."\t".$BHP27."\t".$BHP27K."\t".$DOK31."\t".$DOK31K."\t".$DOK32."\t".$DOK32K."\t".$DOK33."\t".$DOK33K."\t".$DOK34."\t".$DOK34K."\t".$DOK35."\t".$DOK35K."\t".$DOK36."\t".$DOK36K."\t".$OPS31."\t".$OPS31K."\t".$OPS32."\t".$OPS32K."\t".$OPS33."\t".$OPS33K."\t".$IPC41."\t".$IPC41K."\t".$IPC42."\t".$IPC42K."\t".$IPC43."\t".$IPC43K."\t".$IPC44."\t".$IPC44K."\t".$IPC45."\t".$IPC45K."\t".$IPC46."\t".$IPC46K."\t".$POK51."\t".$POK51K."\t".$POK52."\t".$POK52K."\t".$MON61."\t".$MON61K."\t".$MON62."\t".$MON62K."\t".$MON63."\t".$MON63K."\t".$MON64."\t".$MON64K."\t".$MON65."\t".$MON65K."\t".$MON66."\t".$MON66K."\t".$MON67."\t".$MON67K."\t".$MON68."\t".$MON68K."\t".$NAR71."\t".$NAR71K."\t".$NAR72."\t".$NAR72K."\t".$KOM81."\t".$KOM81K."\t".$KOM82."\t".$KOM82K."\t".$KOM83."\t".$KOM83K."\t".$KOM84."\t".$KOM84K."\t".$KOM85."\t".$KOM85K."\t".$PDOD91."\t".$DOD91."\t".$DOD91K."\t".$PDOD92."\t".$DOD92."\t".$DOD92K."\t".$PDOD93."\t".$DOD93."\t".$DOD93K."\t".$PODS0."\t".$PODS11."\t".$PODS12."\t".$PODS21."\t".$PODS22."\t".$PODS31."\t".$PODS32."\t".$PODS41."\t".$PODS42."\t".$ocena;


//$dane = utf8_encode($dane);
//$string_encoded = iconv( mb_detect_encoding( $dane ), 'Windows-1252//TRANSLIT', $dane );
$string_encoded = iconv( mb_detect_encoding( $dane ), 'ISO-8859-2//TRANSLIT', $dane );
//$string_encoded = iconv( mb_detect_encoding( $dane ), 'CP1256//TRANSLIT', $dane );    
//ęĘóÓąĄśŚłŁżŻźŹćĆńŃ
    
    
$plik = @fopen('\\\wrofdc301.fbrakes.com\\WwP2$\\QMM\\09_Share_files\\LPA\\Lista otwartych punktów\\daneSQL_WwP_QM_17_s1.xls', 'a+');
//fwrite($plik,$dane."\r\n");
fwrite($plik,$string_encoded."\r\n");
fclose($plik);
//************************************************************    

}

echo<<<END
<br />
<center>
<h2>Audyt został zapisany w bazie danych </h2>
<br />
<h1>Podsumowanie audytu:  </h1>
<h2>Łączna liczba odpowiedzi:  $razem</h2>
<h2>Liczba OK:  $ok</h2>
<h2>Liczba NOK:  $nok</h2>
<h2>Ocena audytu:  $ocena</h2>
<br />
<br />
<h3><a href="glowna.php">Powrtót do strony głównej</a></h3>
</center>

END
    

?>
<!--
if (!$conn->query($sql)) 
    {
        printf("Error: %s\n", $conn->error);
    }
-->
<?php
//load database connection
    $host = "localhost";		//HOST 
    $user = "root";				//USER_NAME
    $password = "mosi";			//PASSWORD
    $database_name = "serch";	//DATABASE_NAME
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
	
?>

<?php
// $linkers is your address of pics and KOROKi
	$linkers = "http://127.0.0.1/MY%20PROJECT/SEARCH/_shahrak_sanati_tempale/company/";
	$homeLink = "http://127.0.0.1/MY%20PROJECT/SEARCH/_shahrak_sanati_tempale/"; // not set anywhere yet LOL
	
// all
	$siteTtle = "Mosi Search Engine . V: 4.0.0.1";
	$siteDscription = "This is the Private Web Application for SHAHRAK SANATI SHIRAZ.";
	$siteKeywrd = "ttouch.biz,sharak,shiraz";
	$siteAthor = "www.mositech.com";
	
?>
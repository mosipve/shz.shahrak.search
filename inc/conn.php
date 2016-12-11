
 <?php
$servername = "localhost";
$username = "root";
$password = "mosi";
$dbname = "serch";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* $sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn); */
?> 





<?php
// $linkers is your address of pics and KOROKi
	$linkers = "http://127.0.0.1/Presentation_shahrak_new/search_engine/company/";
	$homeLink = "http://127.0.0.1/MY%20PROJECT/SEARCH/_shahrak_sanati_tempale/"; // not set anywhere yet LOL
	
// all
	$siteTtle = "Mosi Search Engine . V: 4.0.0.1";
	$siteDscription = "This is the Private Web Application for SHAHRAK SANATI SHIRAZ.";
	$siteKeywrd = "ttouch.biz,sharak,shiraz";
	$siteAthor = "www.mositech.com";
	
?>

<?php ?>
<!DOCTYPE html> 
<html>
<head>
<title> <?php include("../inc/conn.php"); echo $siteTtle; ?> </title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="style.css" rel="stylesheet">

<style type="text/css">

</style>
	
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>

</head>
<body dir="rtl">

<center>

<?php
$myRes = $_SERVER["QUERY_STRING"];
include("../inc/conn.php"); // database configuration file & variables
// Search from MySQL database table
$tbms = sprintf("%d",$myRes);
//echo $tbms;
$query = $pdo->prepare("select * from town where id = $tbms   LIMIT 0 , 10");
$query->bindValue(1, "%$tbms%", PDO::PARAM_STR);
$query->execute();
// Display search result
			
		if (!$query->rowCount() == 0) {
				echo "<h2>";
				echo "برای دریافت اطلاعات ، گزینه چاپ را انتخاب نمائید . ";
				echo "</h2>";
				echo "<hr>";
				
            while ($results = $query->fetch()) {
								
				echo "<p>";
				echo "<ul class=\"colitems\" id=\"printi\" >";	
				echo "<li >";	
                echo "نام شرکت : <b>".$results['company_name'];
				echo "</b></li><li >";
                echo "نام برند : <u>".$results['berand'];
				echo "</u></li><li >";
                echo "آدرس : <q> ".$results['addres'];
				echo " </q></li><li >";
                echo "تلفن : <i>".$results['tel'];
				echo "</i></li><li >";
				echo "<br />";		
				echo '<img src='.$linkers.$results['company_name']."/1.jpg width=350 height=350 />";
				echo "</li></ul>";		
				echo "</p>";	
echo "<hr>";				
            }
				
        } else {
			echo "<br />";
            echo '<div class="false">هیچ موردی یافت نشد ، لطفا گزینه بازگشت را انتخاب نموده و مجددا اطلاعات را وارد نمائید .</div>';
        }

?>

<ul class="info">
	<li><a href="#" style="font-weight:bold;" onclick="printContent('printi')">&lg;   چاپ صفحه  &lg;</a></li> 
	<li><a href="../index.php">بازگشت</a></li>
</ul>

</center>

</body>
</html> 
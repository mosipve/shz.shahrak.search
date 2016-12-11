<html>
<head>
<title>  شهرک بزرگ صنعتی شیراز - فارس  </title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="newresult.css" rel="stylesheet">
	
	<link rel="stylesheet" href="style-screen.css" type="text/css" media="screen">
	<link rel="stylesheet" href="style-print.css" type="text/css" media="print">

<style type="text/css">
  
    </style>

<script>
<!--
function printPartOfPage(elementId)
{
 var printContent = document.getElementById(elementId);
// var windowUrl = 'about:blank';
// var windowUrl = 'results.php';
 var windowUrl = '';
 var windowName = 'چاپ اطلاعات' + new Date().getTime();
 var printWindow = window.open(windowUrl, windowName, 'right=5000,top=5000,width=0,height=0');

 printWindow.document.write(printContent.innerHTML);
 printWindow.document.close();
 printWindow.focus();
 printWindow.print();
 printWindow.close();
}
// -->
</script>

	
	
</head>
<body dir="rtl">

<div class="myown">

<!-- put these into - Display search result : NEW  -->

	
<div class="header">
  <h2>شهرک بزرگ صنعتی شیراز - فارس</h2>
<!--   <img src="template/1.jpg" alt="t.touch" width="20" height="20" /> -->
  <div id="cls"></div>
</div>


	  <?php 
include("inc/conn.php"); 
$search=(trim($_POST['search']));


$query = "select * from town where company_name LIKE '%$search%' OR berand LIKE '%$search%'  OR addres LIKE '%$search%' OR tel LIKE '%$search%'   LIMIT 0 , 10";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    
		echo "";
				
		echo "<ul class=\"colitemx\">
			<li  style=\"font-weight:bold;\"> راهنما : </li>
			<li> اگر نام مورد جستجو در پائین وجود دارد ، کلید سبز رنگ <i style=\"color:lime;\"> مشاهده و چاپ </i> را لمس کنید . </li>
			<li> در غیر اینصورت کلید نارنجی رنگ <i style=\"color:orange;\"> بازگشت به صفحه جستجو </i> را لمس کنید و مجدد جستجو نمائید . </li>
			
			<li class=\"founders\"><b>موارد یافت شده در جستجوی </b> : <i style=\"color:#3af;\">  $search </i></li>";
		echo "</ul>";
	
		echo '<ul class="infotop"> ';
		echo	'<br /><li><a href="index.php">بازگشت به صفحهء جستجو</a></li>';
		echo '</ul>';
	
    while($row = mysqli_fetch_assoc($result)) {
       
	  $mosiprinti = "printi" + $row['id'] ;
		$comy = $row['id'];
				
				$momopipi = "printDiv" + $row['id'];
		echo '<div id="printDiv.$row[\'id\']">'; 
		echo "<ul class=\"colitems\" >";	
		
				/* 
				echo "<span class=\"right\"  id='$mosiprinti'><li >";	
                echo "نام شرکت : <b>".$row['company_name'];
				echo "</b></li><li >";
                echo "نام برند : <b>".$row['berand'];
				echo "</b></li><li >";
                echo "آدرس : <b>".$row['addres'];
				echo "</b></li><li >";
                echo "تلفن : <b>".$row['tel'];
				echo "</b></li>";		
				echo "</span><span class=\"left\"><img src=company/$comy.jpg /></span>";
		 */
				echo "<span class=\"right\"  id='$mosiprinti'>";	
            echo "<dl>";
				echo "<dt>نام شرکت : </dt><b><dd>".$row['company_name'];
				echo "</dd></b>";
                echo "<dt>نام برند : </dt><b><dd>".$row['berand'];
				echo "</dd></b>";
                echo "<dt>آدرس : </dt><b><dd>".$row['addres'];
				echo "</dd></b>";
                echo "<dt>تلفن : </dt><b><dd>".$row['tel'];
				echo "</dd></b>";	
				echo "<dt>  </dt>";	
				echo '<dd><a href="company/item.php?'.$mosiprinti.'" style=\"font-weight:bold;\" onclick=\"printContent(\'printi'.$row['id'].'\')\">   مشاهده و چاپ  </a></dd>';
			echo "</dl>";				
				echo "</span><span class=\"left\" ><img src=company/$comy.jpg /></span>";
		
				echo '<div id="cls"></div>';	
				
				//echo " <input type=\"button\" class=\"mybutt\" value=\"چاپ اطلاعات\" onclick=\"JavaScript:printPartOfPage('$momopipi');return false;\" /> ";
				
				echo '</ul>';	
		echo '</div>';
		/* echo " <input type=\"button\" class=\"mybutt\" value=\"Print\" onclick=\"JavaScript:printPartOfPage('$momopipi');\" /> "; */

		
    }
} else {
    echo "<br />";
            echo '<div class="false">هیچ موردی یافت نشد ، لطفا گزینه بازگشت را انتخاب نموده و مجددا اطلاعات را وارد نمائید .</div>';
}




?>



	  <!--	PHP CODE`s HERE !		-->
		<ul class="info"> 
			<li><a href="index.php">بازگشت به صفحهء جستجو</a></li>
			
		</ul>
		
</div>

</body>
</html> 
<html>
<head>
<title> شهرک بزرگ صنعتی شیراز - فارس </title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="newresult.css" rel="stylesheet">
	
	<link rel="stylesheet" href="style-screen.css" type="text/css" media="screen">
	<link rel="stylesheet" href="style-print.css" type="text/css" media="print">

<style type="text/css">
  
    </style>

<script>
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>

	
	
</head>
<body dir="rtl">

<div class="myown">

<!-- put these into - Display search result : NEW  -->

	
<div class="header">
  <h1>شهرک بزرگ صنعتی شیراز - فارس</h1>
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
			<hr>
			<li><h3 class=\"h3\">موارد یافت شده </h3></li>";
		echo "</ul>";
	
		echo '<ul class="infotop"> ';
		echo	'<li><a href="index.php">بازگشت به صفحهء جستجو</a></li>';
		echo '</ul>';
	
    while($row = mysqli_fetch_assoc($result)) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		echo '<input name="b_print" type="button" class="ipt"   onClick="printdiv(\'div_print\');" value=" Print ">';
		echo '<div id="div_print">';
		echo "<ul class=\"colitems\" >";	
				$mosiprinti = "printi" + $row['id'] ;
				echo "<span class=\"right\"  id='$mosiprinti'><li >";	
                echo "نام شرکت : <b>".$row['company_name'];
				echo "</b></li><li >";
                echo "نام برند : <b>".$row['berand'];
				echo "</b></li><li >";
                echo "آدرس : <b>".$row['addres'];
				echo "</b></li><li >";
                echo "تلفن : <b>".$row['tel'];
				echo "</b></li>";
                echo '<li><a href="company/item.php?'.$mosiprinti.'" style=\"font-weight:bold;\" onclick=\"printContent(\'printi'.$row['id'].'\')\">&lg;   چاپ صفحه  &lg;</a>';
				echo "</li></span>";		
				echo '</ul>';	
			echo '</div>';
				
		
		
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
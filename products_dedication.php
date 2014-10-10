<!DOCTYPE html>
<html>

<head>
	<title>Red Ribbon Bakeshop Mobile App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="themes/jquery.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.3.min.css" />
		<script src="themes/jquery-1.11.1.min.js"></script>
	<script src="themes/jquery.mobile-1.4.3.min.js"></script>





<style>
.col{
    float:left;
    width:90%;
}

.custom-btn {
    width: 15% !important;
}
</style>
<script>
	setTimeout(function(){
	
	$('#br').fadeIn("medium");
	$('#br').slideUp("slow");
//	$("#promotions").delay("fast").show("fast");
//	$("#more").delay("fast").show("fast");
	$("#more").delay("slow").show("fast");
	});
	

</script>

</head>
<body>

<div data-role="page" >

<div data-role="header" data-position="fixed">
	<h2><div><img src="images/logo1.png" style="max-width:50%;"></div></h2>
	
	<a onClick="document.location.href='products.php'" data-role="button" class="custom-btn" data-icon="back" id="more" ><span style="font-size:12pt;">&nbsp;Back</a>
	
</div>
<div id="br" style="display:none">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</div>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
	
<?php

include 'config.php';
 
$sql="SELECT * FROM tbl_dedication ORDER BY id ASC";
// OREDER BY id DESC is order result by descending
 
$result=mysql_query($sql);
 
	$cols=2;		// Here we define the number of columns
	echo "<table style=\"width:100%\">";	// The container table with $cols columns
	do{
		echo "<tr>";
		for($i=1;$i<=$cols;$i++){	// All the rows will have $cols columns even if
									// the records are less than $cols
			$row=mysql_fetch_array($result);
			if($row){
				$img = $row['dedication_image'];
?>

 <td>
            <table >
             <div class="col" style="padding-left:5%">
			 <br>
				<div id="bestseller1" class="item" style="background-color:#ffffff;height:100%;width:100%;box-shadow: 2px 3px 2px #888888;">
                        <div style="height:100%;width: 100%;padding-top:10%">
					
						<center>
						<a onClick="document.location.href='product_dedication_product.php?id=<?php echo $row['id']; ?>'"  >
						<?php echo '<img src="data:image/png;base64,' . base64_encode($row['dedication_image']) . '" width="80%" height="50%" />'; ?><br /></a>
						</center>
						<div style="background-color:#fcfcfc;width: 100%;height: 100%;" >
						<p style="font-size:11pt;color:red;padding-top:10px;padding-left:10px;"><?php echo $row['dedication_name']; ?></p>
						
						</div>
						</div>
					</div>&nbsp;
					<br>
           </div>
           </table>
        </td>

<?php
			}
			else{
				echo "<td>&nbsp;</td>";	//If there are no more records at the end, add a blank column
			}
		}
	} while($row);
	echo "</table>";
 ?>		


</body>





</div>
</body>
</html>

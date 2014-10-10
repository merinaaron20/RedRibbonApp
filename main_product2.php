
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>

<?php 
include 'config.php';
	 
	// get value of id that sent from address bar 
	$id=$_GET['id'];
	$sql="SELECT * FROM tbl_promotions WHERE id='$id'";
	$result=mysql_query($sql);
	$rows=mysql_fetch_array($result);
	 
?>
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
	</head>
<script>

$(document).ready(function(){
$("#back").click(function(){
	location.href="main2.php";
})
});

</script>
<script>
	setTimeout(function(){
	
	$('#pic').slideToggle("slow");
	
	
	});
	
</script>

<style>
.table_price {
	margin:0px;padding:0px;
	width:100%;
	border:0px solid #000000;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.table_price table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.table_price tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.table_price table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.table_price table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.table_price tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.table_price tr:hover td{
	
}
.table_price tr:nth-child(odd){ background-color:#fcfcfc; }
.table_price tr:nth-child(even)    { background-color:#ffffff; }.table_price td{
	vertical-align:middle;
	
	
	border:0px solid #000000;
	border-width:0px 0px 0px 0px;
	text-align:left;
	padding:12px;
	font-size:15px;
	font-family:sans-serif;
	font-weight:normal;
	color:#000000;
}.table_price tr:last-child td{
	border-width:0px 0px 0px 0px;
}.table_price tr td:last-child{
	border-width:0px 0px 0px 0px;
}.table_price tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.table_price tr:first-child td{
		background:-o-linear-gradient(bottom, #e9e9e9 5%, #e9e9e9 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #e9e9e9) );
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #e9e9e9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e9e9e9", endColorstr="#e9e9e9");	background: -o-linear-gradient(top,#e9e9e9,e9e9e9);

	background-color:#e9e9e9;
	border:0px solid #000000;
	text-align:left;
	border-width:0px 0px 0px 0px;
	font-size:15px;
	font-family:sans-serif;
	font-weight:bold;
	color:#000000;
}
.table_price tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #e9e9e9 5%, #e9e9e9 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #e9e9e9) );
	background:-moz-linear-gradient( center top, #e9e9e9 5%, #e9e9e9 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#e9e9e9", endColorstr="#e9e9e9");	background: -o-linear-gradient(top,#e9e9e9,e9e9e9);

	background-color:#e9e9e9;
}
.table_price tr:first-child td:first-child{
	border-width:0px 0px 0px 0px;
}
.table_price tr:first-child td:last-child{
	border-width:0px 0px 0px 0px;
}
</style>

<style>
.custom-btn {
    width: 15% !important;
}

#container1 {
    float:left;
    width:100%;
}
#col {
    float:left;
    width:80%;
}

#col1 {
    float:left;
    width:50%;
}
#col2 {
    float:right;
    width:50%;
}
</style>

<body>
<div data-role="header" data-position="fixed">
	<h2><div><img src="images/logo1.png" style="max-width:50%;"></div></h2>
	<a id="back" data-role="button" class="custom-btn" data-icon="back"><span style="font-size:12pt;">&nbsp;Back</a>
</div>


 



<div data-role="content">
<br/>
		<div id="pic"  style="background-color:#ffffff;height:100%;box-shadow: 2px 3px 2px #888888;display:none;">
			<div style="background-color:#ffffff;width: 100%;height: 100%;padding-top:1px;">
			<center>
				<div><?php echo '<img src="data:image/png;base64,' . base64_encode($rows['product_image']) . '" style="max-width:100%;height: 100%;" />'; ?></div>
			
			</center>
			</div>
			<div style="background-color:#312e2e;width: 100%;height: 0.2%" >			
			</div>
		</div>

		<div  style="background-color:#ffffff;height:100%;box-shadow: 2px 3px 2px #888888;">
			<div style="width: 100%;height: 100%;">
				<p style="font-size:20pt;color:red;padding-left:15px;padding-top:10px;"><?php echo $rows['product_name']; ?></p>	
			</div>	
		</div>
		
		<br/>
		<div style="background-color:#a9a9a9;height:100%;box-shadow: 2px 3px 2px #888888;">		
			<div style="background-color:#ffffff;width: 100%;height: 100%;padding-top:1px;" >
				<p style="padding-top:10px;padding-left:15px;"><b>PRODUCT DETAILS</b></p>	
				<p style="padding-left:15px;padding-right:15px;"><?php echo $rows['product_details_1']; ?></p>	
				<p style="padding-left:15px;padding-right:15px;"><?php echo $rows['product_details_2']; ?></p>
				<p style="padding-left:15px;padding-right:15px;"><?php echo $rows['product_details_3']; ?></p>			
			</div>
		</div>

		<br>
		
		<div style="background-color:#a9a9a9;height:100%;box-shadow: 2px 3px 2px #888888;">		

			<div style="background-color:#ffffff;width: 100%;height: 100%;padding-top:1px;" >
				<p style="padding-top:10px;padding-left:15px;"><b>PRODUCT PRICE</b></p>	
				
				
				<div style="width: 98%;padding-left:1%;" class="table_price" >
				<table style="width:100%">
					<tr>
						<td>PRODUCT NAME:</td>
						<td>PRICE:</td>
					</tr>
					<tr>
						<td><?php echo $rows['product_name_row_1']; ?></td>
						<td><b><?php echo $rows['product_price_row_1']; ?></b></td>
					</tr>
					<tr>
						<td><?php echo $rows['product_name_row_2']; ?></td>
						<td><b> <?php echo $rows['product_price_row_2']; ?></b></td>
					</tr>
					<tr>
						<td><?php echo $rows['product_name_row_3']; ?></td>
						<td><b> <?php echo $rows['product_price_row_3']; ?></b></td>
					</tr>
					<tr>
						<td><?php echo $rows['product_name_row_4']; ?></td>
						<td><b> <?php echo $rows['product_price_row_4']; ?></b></td>
					</tr>
					</table>
				</div>
				
			</div>
			
		</div>		

</div>

		<br>


</body>
</html>
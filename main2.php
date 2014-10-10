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
		.bg {
			background-image: url(images/aw.jpg);
			background-size: cover;
			background-repeat: no-repeat;
		}

		
.custom-btn {
    width: 15% !important;
}

#container1 {
    float:left;
    width:100%;
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
<script>
	setTimeout(function(){
	
	$('#br').fadeIn("medium");
	$('#br').slideUp("slow");
//	$("#promotions").delay("fast").show("fast");
//	$("#more").delay("fast").show("fast");
	$("#more").show("fast");
	});
	

</script>
</head>
<body>

<div data-role="page" id="bg" >

<div data-role="header" data-position="fixed">
	<h2><div><img src="images/logo1.png" style="max-width:50%;"></div></h2>
	<a href="#nav-panel" data-role="button" class="custom-btn" data-icon="bars" id="more"  ><span style="font-size:12pt;">&nbsp;More</a>
	
</div>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php

include 'config.php';
 
$sql="SELECT * FROM tbl_promotions ORDER BY id ASC";
// OREDER BY id DESC is order result by descending
 
$result=mysql_query($sql);


?>




<?php
 
// Start looping table row
while($rows = mysql_fetch_array($result)){
?>

<div id="br" style="display:none">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
<div role="main" class="ui-content jqm-content jqm-fullwidth">
	<div style="background-color:#ff0000;height:220px;box-shadow: 2px 3px 2px #888888;">
		<div style="width: 100%;height: 12%;">
		
			&nbsp;&nbsp;&nbsp;<img src="images/small_2.png" style="max-width:10%;height: 20px;padding-top:5px;">
		</div>
		<a onClick="document.location.href='main_product2.php?id=<?php echo $rows['id']; ?>'"  >
		<div style="background-color:#ffffff;width: 100%;height: 80%;padding-top:1px;" >
		<?php echo '<img src="data:image/png;base64,' . base64_encode($rows['promotion_image']) . '" width="50%" height="99%" />'; ?></a>
		<div id="col2"><div style="padding-left:10px;padding-right:10px;">
			<p style="color:red;resize: none;" ><?php echo $rows['promotion_head_title']; ?></p>
			
			<hr align="left" width="50%" style="height:2px;border-width:0;background-color:red;">
			
			
			<p width="50%" height="20%"><?php echo $rows['promotion_body_title']; ?></p></div>
		</div>	
		</div>
		
	</div>

</div>
<?php
// Exit looping and close connection 
}
mysql_close();
?>

	<div data-role="panel" id="nav-panel" data-theme="none" data-display="reveal" data-dismissible="false" data-position-fixed="true"  data-position="left" >

        <ul data-role="listview">
		
		<li data-icon="false"><a href="#panel-fixed-page2"></a></li>
		<li data-icon="false"><a href="#panel-fixed-page2"></a></li>
            <li data-icon="delete"><a href="#" data-rel="close">Close</a></li>
			<li data-icon="false"><a href="#panel-fixed-page2" ><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
		<!-- 	  <li data-icon="false"><a onClick="document.location.href='location.html'">&nbsp;&nbsp;&nbsp;Red Ribbon Location</a></li>-->
		<!--		<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>-->
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-heart" onClick="document.location.href='best_sellers2.php'">Best Sellers</a></li>
			    <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-shop"onClick="document.location.href='products2.php'">Products</a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a  class="ui-btn ui-btn-icon-left ui-icon-star"href="#"><span style="color: #333333;">Promotions</span></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-comment" onClick="document.location.href='main_forum2.php'">Topic</a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left" id="panel_about_the_app"></a></li>
                <li data-icon="false"><a href="#panel-fixed-page2"></a></li>
		<li data-icon="false"><a href="#panel-fixed-page2"></a></li>
        </ul>
    </div>




</div>
</body>

 

 


</body>
</html>

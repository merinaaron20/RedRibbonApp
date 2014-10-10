<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="themes/jquery.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.3.min.css" />
	<script src="themes/jquery-1.11.1.min.js"></script>
	<script src="themes/jquery.mobile-1.4.3.min.js"></script>

<script>
	setTimeout(function(){
	
	$('#br').fadeIn("medium");
	$('#br').slideUp("slow");
//	$("#promotions").delay("fast").show("fast");
//	$("#more").delay("fast").show("fast");
	$("#more").delay("slow").show("fast");
	});
	

</script>

<style type="text/css">
		#bg1 {
			background-image: url(images/aw.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			background-size:100% 100%;
		}
.custom-btn {
    width: 15% !important;
}
</style>

</head>
<body>

<div data-role="page" >

<div data-role="header" data-position="fixed">
	<h2><div><img src="images/logo1.png" style="max-width:50%;"></div></h2>
	<a href="#nav-panel" data-role="button" class="custom-btn" data-icon="bars" id="more" ><span style="font-size:12pt;">&nbsp;More</a>
</div>

<div data-role="content" >
	<div id="br" style="display:none">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	</div>

	<div style="background-color:#ff0000;height:190px;box-shadow: 2px 3px 2px #888888;">
		<div style="width: 100%;height: 12%;">
		
			&nbsp;&nbsp;&nbsp;<img src="images/small_2.png" style="max-width:10%;height: 80%;padding-top:5px;">
		</div>	
		<a onClick="document.location.href='products_cake.php'">
		<div style="background-color:#ffffff;width: 100%;height: 80%;">
		<center>
			<div><img src="images/products_main/products_cake.jpg" style="max-width:100%;height: 100%;"></div>
		</center>
		</div>	
		</a>
	</div>
	
	<br/>
	
	<div style="background-color:#ff0000;height:190px;box-shadow: 2px 3px 2px #888888;">
		<div style="width: 100%;height: 12%;">
		
			&nbsp;&nbsp;&nbsp;<img src="images/small_2.png" style="max-width:10%;height: 80%;padding-top:5px;">
		</div>	
		<a onClick="document.location.href='products_rolls.php'">
		<div style="background-color:#ffffff;width: 100%;height: 80%;">
		<center>
			<div ><img src="images/products_main/products_rolls.jpg" style="max-width:100%;height: 100%;"></div>
		</center>
		</div>	
		</a>
	</div>
	
	<br/>
	
		<div style="background-color:#ff0000;height:190px;box-shadow: 2px 3px 2px #888888;">
		<div style="width: 100%;height: 12%;">
		
			&nbsp;&nbsp;&nbsp;<img src="images/small_2.png" style="max-width:10%;height: 80%;padding-top:5px;">
		</div>	
		<a onClick="document.location.href='products_dedication.php'">
		<div style="background-color:#ffffff;width: 100%;height: 80%;">
		<center>
			<div ><img src="images/products_main/products_dedication.jpg" style="max-width:100%;height: 100%;"></div>
		</center>
		</div>	
		</a>
	</div>
	
	<br/>
	
		<div style="background-color:#ff0000;height:190px;box-shadow: 2px 3px 2px #888888;">
		<div style="width: 100%;height: 12%;">
		
			&nbsp;&nbsp;&nbsp;<img src="images/small_2.png" style="max-width:10%;height: 80%;padding-top:5px;">
		</div>	
		<a onClick="document.location.href='products_pastries.php'">
		<div style="background-color:#ffffff;width: 100%;height: 80%;">
		<center>
			<div ><img src="images/products_main/products_pastries.jpg" style="max-width:100%;height: 100%;"></div>
		</center>
		</div>	
		</a>
	</div>
	
	<br/>
	<!--
		<div style="background-color:#ff0000;height:190px;box-shadow: 2px 3px 2px #888888;">
		<div style="width: 100%;height: 12%;">
		
			&nbsp;&nbsp;&nbsp;<img src="images/small_2.png" style="max-width:10%;height: 80%;padding-top:5px;">
		</div>	
		
		<div style="background-color:#ffffff;width: 100%;height: 80%;">
		<center>
			<div ><img src="images/products_main/products_cakesbydesign.jpg" style="max-width:100%;height: 100%;"></div>
		</center>
		</div>	
	</div>
	-->

</div>


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
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-heart" onClick="document.location.href='best_sellers.php'">&nbsp;&nbsp;&nbsp;Best Sellers</a></li>
			    <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-shop" href="#"><span style="color: #333333;">&nbsp;&nbsp;&nbsp;Products</span></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-star" onClick="document.location.href='main.php'">&nbsp;&nbsp;&nbsp;Promotions</a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-comment" onClick="document.location.href='main_forum.php'">&nbsp;&nbsp;&nbsp;Topic</a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left" id="panel_about_the_app"></a></li>
                <li data-icon="false"><a href="#panel-fixed-page2"></a></li>
		<li data-icon="false"><a href="#panel-fixed-page2"></a></li>
        </ul>
    </div>



</div>
</body>
</html>

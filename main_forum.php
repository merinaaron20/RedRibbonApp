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
	setTimeout(function(){
	
	$('#br').fadeIn("fast");
	$('#br').slideUp("medium");
//	$("#promotions").delay("fast").show("fast");
//	$("#more").delay("fast").show("fast");
	});
	

</script>

<style>

.custom-btn {
    width: 15% !important;
}


.right{
    float:right;
}

.left{
    float:left;
}



</style>
<style type="text/css">
body {

    background-repeat:repeat-y;
    background-position:center center;
    background-attachment:scroll;
    background-size:100% 100%;
}
.ui-page {
    background: transparent;
}
.ui-content{
    background: transparent;
}
</style>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>

<?php
 
include 'config.php';
 
$sql="SELECT * FROM fquestions ORDER BY id DESC";
// OREDER BY id DESC is order result by descending
 
$result=mysql_query($sql);

?>
	
<body>

<div data-role="header" data-position="fixed">
	<h1><div><img src="images/logo1.png" style="max-width:50%;"></div></h1>
	<a href="#nav-panel" data-role="button" class="custom-btn" data-icon="bars" ><span style="font-size:12pt;">&nbsp;More</a>
</div>
	<div role="main" class="ui-content jqm-content jqm-fullwidth">
<div id="br" style="display:none">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


	</div>
	


	

<?php
while($rows = mysql_fetch_array($result)){
?>



<div >
<a style="background-color:#fcfcfc;height:100%;border-color:#ff0000;border-radius: 0px 20px 10px 40px;box-shadow: 2px 3px 2px #888888;" class="ui-btn" onClick="document.location.href='view_topic.php?id=<?php echo $rows['id']; ?>'" >


<div >
<table style="width:100%">


<tr>
<td><font color="red"><img align="left" width="6%" src="images/comments-o.png"/><span style="padding-left:1%">by: <?php echo $rows['name']; ?></span></font>
<p style="padding-left:7%"><?php echo $rows['topic']; ?></p></td>
</tr>
<tr>
<td>


<hr>
<p style="padding-left:6%"><span class="left"><font size="2pt;" color="#9197a3" ><?php echo $rows['reply']; ?> REPLIES | <?php echo $rows['view']; ?> VIEWS</span> <span class="right">&nbsp;<?php echo $rows['datetime']; ?><font></span> 
</td>
</tr>
</table>
</div>
</a>




<div>

</div>		


</div>


<?php
// Exit looping and close connection 
}
mysql_close();
?>

</div>
<div data-role="footer" data-position="fixed">
<div data-role="navbar">
        <ul>
            <li><a  data-icon="comment"><span span style="color: #ff0000;">Forum</span></a></li>
            <li><a  onClick="document.location.href='login.html'" data-icon="user">Account</a></li>
        </ul>
</div><!-- /navbar -->
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
			    <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-shop" onClick="document.location.href='products.php'">&nbsp;&nbsp;&nbsp;Products</a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-star" onClick="document.location.href='main.php'">&nbsp;&nbsp;&nbsp;Promotions</a></li>
                <li data-icon="false"><a span style="color: #333333;" class="ui-btn ui-btn-icon-left ui-icon-comment">&nbsp;&nbsp;&nbsp;Topic</span></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left" id="panel_about_the_app"></a></li>
                <li data-icon="false"><a href="#panel-fixed-page2"></a></li>
		<li data-icon="false"><a href="#panel-fixed-page2"></a></li>
        </ul>
	</div>
</body>
 

<!--
<tr>
<td style="" colspan="5" align="right" bgcolor="#E6E6E6"><a onClick="document.location.href='new_topic.php'"><strong>Create New Topic</strong> </a></td>
</tr>
-->




	
<script type="text/javascript">
	var lform = $("#loginform");
	function verifyLoginfirst(){
		if($( "#login_username" ).val() == "" || $( "#login_password" ).val() == "")
		{
			$( "#popupUserPass" ).popup( "open" );
		return;
		}
			$.getJSON("php_files/login.php?callback=?",lform.serialize(), function(data)
			{
			
				if (data.allow == "yes")
				{
				
					localStorage.setItem("username", data.username);			//just some login scripts nothing special
					localStorage.setItem("user_id",data.user_id);
					
					location.href="main_forum2.php";
				}
				else if(data.allow == "no")				//responses  no - does not exist maybe= incoreect password and none problem with internet
				{
					$( "#popupUserPassReg" ).popup( "open" );

				}
				else if(data.allow == "maybe")
				{
				 
					$( "#popupIncorrectPass" ).popup( "open" );

				}else{
					$( "#popupInternetProb" ).popup( "open" );
				}
			}).fail(function(data){
				
				$( "#popupInternetProb" ).popup( "open" );
				
				
			});
		}
		


		
</script>




</html>
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


<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>

<?php
 

 include 'config.php';
 
$sql="SELECT * FROM fquestions ORDER BY id DESC";
// OREDER BY id DESC is order result by descending
 
$result=mysql_query($sql);

?>


<?php
if(isset($_POST['Submit']))
{

include 'config.php';

$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];

 
$datetime=date("D j/n/Y g:i A.", time()); //create date time

$sql="INSERT INTO fquestions(topic, detail, name,  datetime)VALUES('$topic', '$detail', '$name', '$datetime')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }


header("Location: main_forum2.php");

mysql_close();

}
?>
<script>
	setTimeout(function(){
	
	$('#br').fadeIn("medium");
	$('#br').slideUp("slow");
//	$("#promotions").delay("fast").show("fast");
//	$("#more").delay("fast").show("fast");
	});
	

</script>

	<script>
	setTimeout(function(){
	
	$('#br').fadeOut("medium");
	$('#br').slideUp("slow");
//	$("#promotions").delay("fast").show("fast");
//	$("#more").delay("fast").show("fast");

	});

	//checked if loged in
	$(document).ready(function(){
	var localStorageUsername = window.localStorage.getItem("username");

		if(localStorageUsername == "" || localStorageUsername == null){
			
		}else{
			$("#txt-username").html("<b>Welcome, "+localStorageUsername+"!</b>");
			
		}
			
			$("#btn-logout").click(function(){
			window.localStorage.setItem("user_id","");
			window.localStorage.setItem("username","");	

				});
			$("#create").click(function(){
				
				$('#qq').slideToggle("medium");
				});
			
	});
	

			
</script>

<script>
window.onload = function(){
      var val = localStorage.getItem('username'); // or localStorage.value

      if(val == null)
          val = "First try";

     document.getElementById("name").value = val;
}


</script>
<script>
function validate() {
   if (!$.trim($("#topic").val())) {
         
         return false;
    } else {
        return true;
    }
}

function validate() {
   if (!$.trim($("#detail").val())) {
         
         return false;
    } else {
        return true;
    }
}

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
</head>
<body>

<div data-role="header" data-position="fixed">
	<h2><div><img src="images/logo1.png" style="max-width:50%;"></div></h2>
	<a href="#nav-panel" data-role="button" class="custom-btn" data-icon="bars" ><span style="font-size:12pt;">More</span></a>
<!--	<a class="custom-btn" href="#popupLogin" data-rel="popup" data-position-to="window" data-icon="edit" data-transition="slidedown"><span style="font-size:12pt;">&nbsp;Create</span></a>
-->	<a data-role="button" class="custom-btn" data-icon="edit" id="create"><span style="font-size:12pt;">Create</span></a>
	</div>
	
	<div role="main" class="ui-content jqm-content jqm-fullwidth">
<center>
<p style="padding-top:1%;padding-bottom:1%;"id="txt-username"></p>
</center>


<div id="qq" style="display:none">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate()" target="_self">
<textarea placeholder="Write a topic..." name="topic" style="resize:none" type="text" id="topic"></textarea></textarea>
<textarea placeholder="Write a detail..." name="detail" style="resize:none" id="detail"></textarea>
<input name="name" type="hidden" id="name" size="45">
<div style="width:30%">
<input type="submit" name="Submit" value="Send">
</div>
</form>
</div>





<?php
 
// Start looping table row
while($rows = mysql_fetch_array($result)){
?>


<div >
<a style="background-color:#fcfcfc;height:100%;border-color:#ff0000;border-radius: 0px 20px 10px 40px;box-shadow: 2px 3px 2px #888888;" class="ui-btn" onClick="document.location.href='view_topic2.php?id=<?php echo $rows['id']; ?>'" >


<div >
<table style="width:100%">


<tr>
<td><img align="left" width="7%" src="images/comments-o.png"/><span style="padding-left:1%"><font color="red">by: <?php echo $rows['name']; ?></span></font>
<p style="padding-left:8%"><?php echo $rows['topic']; ?></p></td>
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
            <li><a  onClick="document.location.href='main_forum.php'" id="btn-logout" data-icon="delete">Logout</a></li>
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
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-heart" onClick="document.location.href='best_sellers2.php'">&nbsp;&nbsp;&nbsp;Best Sellers</a></li>
			    <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-shop" onClick="document.location.href='products2.php'">&nbsp;&nbsp;&nbsp;Products</a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left ui-icon-star" onClick="document.location.href='main2.php'">&nbsp;&nbsp;&nbsp;Promotions</a></li>
                <li data-icon="false"><a span style="color: #333333;" class="ui-btn ui-btn-icon-left ui-icon-comment">&nbsp;&nbsp;&nbsp;Topic</span></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2"><hr></a></li>
				<li data-icon="false"><a href="#panel-fixed-page2" ></a></li>
                <li data-icon="false"><a class="ui-btn ui-btn-icon-left" id="panel_about_the_app"></a></li>
                <li data-icon="false"><a href="#panel-fixed-page2"></a></li>
		<li data-icon="false"><a href="#panel-fixed-page2"></a></li>
        </ul>
    </div>

</body>
</html>
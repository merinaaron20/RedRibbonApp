
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php
 

include 'config.php';
 
// get value of id that sent from address bar 
$id=$_GET['id'];
$sql="SELECT * FROM fquestions WHERE id='$id'" ;
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
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
	

<style>
.custom-btn {
    width: 15% !important;
}


.right{
    float:right;
}
</style>	
<body>

<div data-role="header" data-position="fixed">
	<h2><div><img src="images/logo1.png" style="max-width:50%;"></div></h2>
	<a onClick="document.location.href='main_forum.php'"  data-role="button" class="custom-btn" data-icon="back" id="more"  ><span style="font-size:12pt;">&nbsp;Back</a>
	
</div>
<div data-role="footer" data-position="fixed">
<div data-role="navbar">
        <ul>
            <li><a  data-icon="comment"><span span style="color: #ff0000;">Forum</span></a></li>
            <li><a  onClick="document.location.href='login.html'" data-icon="user">Account</a></li>
        </ul>
</div><!-- /navbar -->
</div>	
<center>
<div style="height:100%;width:99%;" >
<div style="background-color:#fcfcfc;height:100%;border-color:#ff0000;border-radius: 0px 20px 10px 40px;box-shadow: 2px 3px 2px #888888;" class="ui-btn" >


<div >
<table style="width:100%;" style="padding-bottom:2px">


<tr>
<td ><font color="#333333"><img align="left" width="5%" src="images/comments-o.png"/><span style="padding-left:1%"><strong><?php echo $rows['topic']; ?></strong></span></font>
<p style="padding-left:6.2%"><?php echo $rows['detail']; ?></p></td>
</tr>
<tr>
<td>

<hr align="right" width="94%" style="height:2px;border-width:0;background-color:gray;">
<span style="padding-left:6%;"><span class="left"><font color="red" size="2pt;">by: <?php echo $rows['name']; ?></font></span>  <span class="right"><font size="2pt;" color="#9197a3" >&nbsp;<?php echo $rows['datetime']; ?></font></span></span>
</td>
</tr>
</table>
</div>
</div>





<div>

</div>		


</div>
</center>


 
<?php
 
 // Switch to table "forum_answer"
$sql2="SELECT * FROM fanswer WHERE question_id='$id' ORDER BY a_id DESC";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
?>
<center>
<div style="height:100%;width:98.5%;">
<div style="background-color:#f6f7f8;height:100%;border-color:#ff0000;border-radius: 5px 5px 5px 5px;box-shadow: 2px 3px 2px #888888;" class="ui-btn" >


<div >
<table style="width:100%">


<tr>
<td ><font color="#333333"><span><?php echo $rows['a_answer']; ?></span></font></td>
</tr>
<tr>
<td>

<hr>
<span class="left"><font color="red" size="2pt;">by: <?php echo $rows['a_name']; ?></font></span> <span class="right"><font size="2pt;" color="#9197a3" >&nbsp;<?php echo $rows['a_datetime']; ?></font></span> 
</td>
</tr>
</table>
</div>
</div>
</div>
</center>
 

<?php
}
 
$sql3="SELECT view FROM fquestions WHERE id='$id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 
// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO fquestions(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}
 
// count more value
$addview=$view+1;
$sql5="update fquestions set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>

<BR>
<!--
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table >
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id"  value=""></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
-->
</body>
</html>
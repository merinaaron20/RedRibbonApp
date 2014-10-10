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
if(isset($_POST['Submit']))
{

include 'config.php';

$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];

 
$datetime=date("D j/n/Y g:i A.", time()); //create date time

$sql="INSERT INTO tbl_fquestions(topic, detail, name,  datetime)VALUES('$topic', '$detail', '$name', '$datetime')";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close();

}
?>

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
</style>	

</head>
<body>



<center>

<div style="width:99%;" >

<div style="background-color:#fcfcfc;border-radius: 0px 20px 10px 40px;box-shadow: 2px 3px 2px #888888;" class="ui-btn" >



<br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table>
<tr width="100%">
<td width="100%"><textarea name="topic" type="text" id="topic"></textarea></textarea>
<textarea name="detail" id="detail"></textarea>
<input name="name" type="hidden" id="name" size="45">
</td>
<td>
<input type="submit" name="Submit" value="Send">
</td>
</tr>
</table>
</form>








<div>

</div>		


</div>

</center>
</div>
</body>
</html>
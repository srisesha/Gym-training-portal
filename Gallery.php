<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.ss
{

	 text-decoration:none;
	 text-align:center;
	// color:black;
	 font-size:25px;
	 //color:#953163;
	
	 
}
.gal
{
	border:10px solid white;
	 box-shadow:0px 0px 40px #7BB0A6;

	 transition: transform 1s;
}
.gal:hover
{
	transform: scale(1.3,1.3);
}
.aa
{
	text-align:center;
	//background-color:#83D6DE;
	background-color:black;
	color:white;
	height:50px;
	
}
.aa:hover
{
	//background-color:#1DABB8;
 background-color:#bdc3c7;
 //color:black;
 
}
.bb
{
	height:100;
}
a
{
	color:white;
}
a:hover
{
	//color:black;
}
div
{
	text-align:justify;
	width:300px;
	line-height:25px;
}
.mm
{
	border:4px double black;
}
.mm:hover
{
	width:300px;
	height:300px;
}
</style>

<script>
var i=0;
var a=new Array(4);
a[0]=new Image();
a[0].src="images/b1.jpg";

a[1]=new Image();
a[1].src="images/b2.jpg";

a[2]=new Image();
a[2].src="images/b3.jpg";

a[3]=new Image();
a[3].src="images/b4.jpg";

function slide()
{
	//alert("hai"+i);
	document.getElementById("m1").src=a[i].src;
	
	i=i+1;
	if(i==4)
	{
		i=0;
	}
	setTimeout("slide();",1500);
}
</script>
</head>

<body onload="slide();">
<?php
include("Connection.php");
?>

<table width="100%" height="700" border="0" cellspacing="0">
<tr>
<td width="20%">
<table width="100%" height="100%" cellspacing="0" border="0" style="color:white;" >
<tr height="100"><td ><img src="images/l.png"  width="100%" height="100%" /></td></tr>
<tr><td class="aa"><img src="images/home-icon.png" width="30" />&nbsp;&nbsp;&nbsp;<a href="Home.php" class="ss">Home</a></td></tr>
<tr><td class="aa"><img src="images/t.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Training.php" class="ss">Training</a></td></tr>
<tr><td class="aa"><img src="images/trophy.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Programs.php" class="ss">Programs</a></td></tr>
<tr><td class="aa"><img src="images/g1.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Gallery.php" class="ss">Gallery</a></td></tr>
<tr><td class="aa"><img src="images/a.png" width="30" /> &nbsp;&nbsp;&nbsp;<a href="Admin.php" class="ss">Admin</a></td></tr>

</table>
</td>
<td width="60%">
<table bgcolor="#D2D7D3" border="0">
<tr><td ><img src="" id="m1"  width="1000" height="250"  /></td></tr>
<tr><td  align="center" height="50" style="font-family:Algerian;font-weight:bold;font-size:20px;">
PHOTO GALLERY!!

</td></tr>
<tr>
<td>
<table width="90%" align="center" cellpadding="10">
<tr>
<td><img src="images/ga1.png" class="gal" width="200" height="200" /></td>
<td><img src="images/ga2.jpg" class="gal" width="200" height="200" /></td>
<td><img src="images/ga3.jpg" class="gal" width="200" height="200" /></td>
</tr>
<tr>
<td><img src="images/ga5.jpg" class="gal" width="200" height="200" /></td>
<td><img src="images/ga6.jpg"class="gal" width="200" height="200" /></td>
<td><img src="images/ga9.jpg" class="gal" width="200" height="200" /></td>
</tr>

</table>
</td>

</tr>
</table>



</td>
<td width="20%">
<img src="images/g2.jpg" height="800" width="100%"/>

</td>
</tr>
<tr bgcolor="#34495e" style="color:white;" height="50">
<td align="center" colspan="3">
<marquee>Copyright @ Fitness Training 2017</marquee>
</td>
</tr>

</table>
</body>
</html>
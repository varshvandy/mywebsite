<?php include("register.html");
$a=$_POST["name"];
$b=$_POST["phone"];
$c=$_POST["email"];
$d=$_POST["table no:"];
$e=$_POST["items"];
$f=$_POST["quantity"];
$con=mysql_connect("localhost","root","");
mysql_select_db("restaurant");
mysql_query("insert into register(name,phone,email,table no:,items,quantity) values('$a','$b','$c','$d','$e','$f')");
echo("ORDERED SUCCESSFULLY");
mysql_close($con);
?>

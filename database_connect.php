<?php
$conn=mysqli_connect("localhost","root","","indraprastha_hotel");
if(!$conn)
echo "<center><h2>[Error in database connection]</h2></center>".mysqli_connect_error()."<br>";
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['customer_ID']))
{
  include "database_connect.php";
  session_start();
   $customer_ID=$_POST['customer_ID'];
   $sql="SELECT `cust_id`, `fname`, `lname`, `email`, `gender`, `check_in`, 
   `check_out`, `No_of_per`, `room_no`, `room_type`, `hotel_id` FROM `customer` WHERE `cust_id`=$customer_ID";
   $result= mysqli_query($conn,$sql);
   $sql_room="SELECT `price` FROM `room` WHERE `cust_id`=$customer_ID";
   $result_room=mysqli_query($conn,$sql_room);
   $num = mysqli_num_rows($result);
   $num_room=mysqli_num_rows($result_room);
   if($num==1)
   {
   while($row= mysqli_fetch_assoc($result)) 
   {
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
         <link rel="stylesheet" href="booking.css">
     </head>
     <body>
    <div class = "nav_head">
    <div class = "head-book">
    <a href="Home.php" style=" color: white;">Home</a>
    <a href="#" style="text-decoration: none;">&nbsp;&nbsp;</a>
    <a href="logout.php" style=" color: white;" >Sign Out</a>
    </div>
   </div>
    <center>
    <div class="details">
    <h2>Customer Booking Details are as follows:</h2><br>
     <span class="book_labels">Hotel ID: <?= $row['hotel_id'] ?></span><br><br>
     <span class="book_labels">Customer_ID: <?= $row['cust_id'] ?></span><br><br>
     <span class="book_labels">First Name: <?= $row['fname'] ?></span><br><br>
    <span class="book_labels">Last Name: <?= $row['lname'] ?></span><br><br>
     <span class="book_labels">Email-ID: <?= $row['email'] ?></span><br><br>
     <span class="book_labels">Gender: <?= $row['gender'] ?></span><br><br>
     <span class="book_labels">Check In Date: <?= $row['check_in'] ?></span><br><br>
     <span class="book_labels">Check Out Date: <?= $row['check_out'] ?></span><br><br>
     <span class="book_labels">Number of Guests: <?= $row['No_of_per'] ?></span><br><br>
     <span class="book_labels">Room Number: <?= $row['room_no'] ?></span><br><br>
     <span class="book_labels">Room Type: <?= $row['room_type'] ?></span><br>
   </div>
   </center>
     </body>
     </html>
    <?php
   }
   }
   if($num_room==1 && $num==1)
   {
     while($row_num=mysqli_fetch_assoc($result_room))
     {
       ?>
       <center>
       <div class="amount">
       <div class="book_labels">Amount paid: Rs.<?= $row_num['price'] ?></div><BR>
     </div>
     </center>
       <?php
     }
   }
  else
   {
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
       <link rel="stylesheet" href="booking.css">
     </head>
     <body>
     <div class="err">
       <center>
       <div class = "nav_head">
       <div class = "head-book">
       <a href="Home.php" style=" color: white;">Home</a>
       <a href="#" style="text-decoration: none;">&nbsp;&nbsp;</a>
       <a href="Search.php" style=" color: white;">Search</a>
       <a href="#" style="text-decoration: none;">&nbsp;&nbsp;</a>
       <a href="logout.php" style=" color: white;" >Sign Out</a>
       </div>
       </div>
        <div class="message">
        <h3>You have entered invalid Customer-ID</h3>
        </div>
        </CENTER>
        </div>
     </body>
     </html>
    <?php
   }
  }
}
?>
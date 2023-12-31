<?php
session_start();
 if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
 {
     header("location: loginform.php");
     session_unset();
    die();
    //echo" login done";
 }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
</head>
<body>
    <div class = "link_head">
        <div class = "hed-book">
            <a href="search.php" style=" color: white;">Search</a>
            <a href="#" style="text-decoration: none;">&nbsp;&nbsp;</a>
            <a href="logout.php" style=" color: white;" >Sign Out</a>
        </div>
</body>
</html>
<?php
        $showAlert=false;
        $showError=false;
 if($_SERVER['REQUEST_METHOD']=="POST")
{
 if(isset($_POST['book']))
    {   include "database_connect.php";
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $gender=$_POST["gender"];
        $check_in=$_POST["check_in"];
        $check_out=$_POST["check_out"];
        $No_of_per=$_POST["No_of_per"];
        $room_no=$_POST["room_no"];
        $room_type=$_POST["room_type"];
        $hotel_id=$_POST["hotel_id"];
        $no_of_days=$_POST["no_of_days"];
        $p=$_POST['price'];
        $pri=($p)*($no_of_days);
            $sql_cust="INSERT INTO `customer`(`fname`, `lname`, `email`, `gender`, 
            `check_in`, `check_out`, `No_of_per`, `room_no`, `room_type`, `hotel_id`) 
            VALUES ('$fname','$lname','$email','$gender','$check_in','$check_out','$No_of_per',
            '$room_no','$room_type','$hotel_id')";
            $result_cust=mysqli_query($conn,$sql_cust);
            if($result_cust)
            {
                $showAlert=true;
            }
        else
        {
           $showError=true;
        }
   }
}
?>
<?php
        $showAlert=false;
        $showError=false;
 if(isset($_POST['book']))
    {   include "database_connect.php";
        $room_no=$_POST["room_no"];
        $room_type=$_POST["room_type"];
        $no_of_days=$_POST["no_of_days"];
        $p=$_POST['price'];
        $pri=($p)*($no_of_days);
            $sql="INSERT INTO `room`(`room_no`, `room_type`, `price`) VALUES ('$room_no','$room_type','$pri')";
           $result=mysqli_query($conn,$sql);
        //     if($result)
        //     {
        //         $showAlert=true;
        //     }
        // else
        // {
        //    $showError=true;
        // }
   }
?>
<?php
 if(isset($_POST['book']))
 {
     include "database_connect.php";
     $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
     $sql_id="SELECT * FROM `customer` WHERE `fname`='$fname' AND `lname`='$lname' AND `email`='$email'";
      $result_id=mysqli_query($conn,$sql_id);
      $num_id= mysqli_num_rows($result_id);
      if($num_id==1)
      {
          while($row_id=mysqli_fetch_assoc($result_id))
          {
              ?>
              <div class="book_display">
            <center>
              <h2>Your Booking ID is <?= $row_id['cust_id']?></h2>
            </center>
              </div>
              <?php
          }
      }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainnew.css">
    <title>Rooms</title>
</head>
<body>
   <?php
    // if($showAlert)
    // {
    //     echo"<CENTER><h3>Your account has been successfully created and you can proceed to login</h3></CENTER><BR>";
    // }
    // if($showError)
    // {
    //     echo "<CENTER><h3></h3></CENTER><BR>";
    // }
    ?>
    <center>
    <div class = "head-head">
        <div class = "book">
            <form class = "book-form" method="POST" action="Rooms.php">
            <label for="hotel">Hotel-ID:</label>
            <input type="text" name="hotel_id" placeholder="Hotel-ID"><br>
            <label for="adults">First Name:</label>
            <input type="text" name="fname" placeholder="FIRST NAME" required><br>
            <label for="adults">Last Name:</label>
            <input type="text" name="lname" placeholder="LAST NAME" required><br>
            <label>E-mail ID:</label>
            <input type="email" name="email" placeholder="Email@gmail.com" required ><br>
            <label>Gender:</label>
            <div class='gen'>
            <center>
            <input type="radio" name="gender" value="Male"><span>Male</span>
            <input type="radio" name="gender" value="Female"><span>Female</span>
            <input type="radio" name="gender" value="Other">Other
            </center>
            </div>
          
                <div class = "form-item">
                    <label for = "checkin-date">Check In Date: </label>
                    <input type = "date" id = "chekin-date" name="check_in" required >
                </div>
                <div class = "form-item">
                    <label for = "checkout-date">Check Out Date: </label>
                    <input type = "date" id = "chekout-date" name="check_out" required>
                </div>
                 <div class = "form-item">
                    <label for = "">Number of Days: </label>
                    <input type = "number"  name="no_of_days" required>
                </div>
                <!-- <div class = "form-item">
                    <label for = "children">Children: </label>
                    <input type = "number" min = "1" value = "1" id = "children" required>
                </div>--> 
                <div class = "form-item">
                    <label for = "rooms">No. of Persons: </label>
                    <input type = "number" min = "1 " value = "1 " id = "rooms" name="No_of_per"required>
                </div>
                <div>
                    <label for="room_type">Room type:</label>
                    <br>
                    <div class="form-item">
                        <select name="room_type" id="room_type">
                            <option value="select" disabled selected>Select</option>
                            <option value="Luxury Rooms">Luxury Rooms</option>
                            <option value="Delux Rooms">Delux Rooms</option>
                            <option value="Premium Rooms">Premium Rooms</option>
                        </select>
                    </div>
                <label for="room_type">Room Price:</label>
                <br>
                 <div class="form-item">
                        <select name="price" id="room_type">
                            <option value="select" disabled selected>Select</option>
                            <option value="4999">Luxury Rooms: Rs.4999</option>
                            <option value="7999">Delux Rooms: Rs.7999</option>
                            <option value="9999">Premium Rooms: Rs.9999</option>
                        </select>
                    </div>
                <div class="form-item">
                <label for="room_type">Room Number:</label>
                <input type="number" name="room_no" placeholder="Room No.">
                </div>
                </div>
                <div class = "form-item">  
                <input type = "submit" name = "book" class="mk" onclick="aler()" style=" margin: 16px 0;
                font-size: 30px;
                font-weight: bold;
                border: 3px solid #fff;
                background: transparent;
                padding: 10px 15px;
                background: rgba(0, 0, 0, 0.3);
                color: #fff;
                cursor: pointer;
                transition: var(--transition);">
                </div>
    </center>
            </form>
        </div>
        </div>            
        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h1>rooms</h1>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "img1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Rooms</h3>
                        <p>Adorned with elements of art and exquisite Indian motifs, our cherished Luxary Rooms offer calming views of the lush cityscape. Unwind amidst sheer comfort and sophistication whether you’re on holiday or on business.</p>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                               30 Sq.Mt
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Complimentary Wifi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Upto Four Guest
                            </li>
                        </ul>
                        <p></p>
                        <p class = "rate">
                            <span >&#8377;4999.00 /</span> Per Night
                        </p>
                       <!-- <button type = "button" class = "btn">book now</button>-->
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "img2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Delux Rooms</h3>
                     <p>With warm undertones and elegant design elements, our Delux Rooms feature carved wooden panels, and rich tapestry conveying Indian luxury. These are the perfect retreat, whether you’re travelling for leisure or for work.</p>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                35 Sq.Mt
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Complimentary Wifi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Upto Four Guest
                            </li>
                        </ul>
                        
                        <p class = "rate">
                            <span>&#8377;7999.00 /</span> Per Night
                        </p>
                        <!--<button type = "button" class = "btn">book now</button>-->
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "img3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Premium Rooms</h3>
                       <p>Our signature Premium Rooms are a haven of luxury and comfort. These spacious corner rooms are larger than most rooms and offer personalised service with fine attention to detail. Exclusive benefits include complimentary one-way airport transfer, daily breakfast and evening cocktail hours at the lounge, round-the-clock butler service and a host of other privileges</p>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                             45 Sq. Mt
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Complimentary Wifi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Upto Six Guest
                            </li>
                        </ul>
                        <p class = "rate">
                            <span>&#8377;9999.00 /</span> Per Night
                        </p>
                        <!--<button type = "button" class = "btn">book now</button>-->
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>
        <script>
           function aler()
            {
                alert("Your room has been booked sucessfully");
            }
        </script>

</body>
</html>
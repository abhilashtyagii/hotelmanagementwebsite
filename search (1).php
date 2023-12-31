<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<input id='search-btn' type='checkbox'/>
    <label for='search-btn'>Show search bar</label>
    <input id='search-bar' type='text' placeholder='Search...'/>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search3.css">
</head>
<body>

    <div class="flexbox">
        <div class="search">
          <h1>Search for room details</h1>
          <h3>Click on search icon, then type the customer ID.</h3>
          <div>
            <input type="text" placeholder="Search . . ." required>
          </div>
        </div>
      </div>
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<input id='search-btn' type='checkbox'/>
    <label for='search-btn'>Show search bar</label>
    <input id='search-bar' type='text' placeholder='Search...'/>, initial-scale=1.0">
    <title>Search Details</title>
    <link rel="stylesheet" href="search3.css">
    <!-- <link rel="stylesheet" href="mainnew.css"> -->
</head>
<body>
<div class = "head-head">
        <div class = "hed-book">
            <a href="Home.php" style=" color: white;">Home</a>
            <a href="#" style="text-decoration: none;">&nbsp;&nbsp;</a>
            <a href="logout.php" style=" color: white;" >Sign Out</a>
        </div>
</div>
    <div class="flexbox">
        <div class="search">
          <h1>Search for Room details</h1>
          <h3>Type the customer ID,then click on search icon.</h3>
          <div>
            <form action="booking_details.php" method="POST">
            <input type="text" placeholder="Customer_ID......" name="customer_ID" required>
            <span class="submit"><input type="submit" value="Search"></input></span>
          </div>
</form>
        </div>
      </div>
    
</body>
</html>
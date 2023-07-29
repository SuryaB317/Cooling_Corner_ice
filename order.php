
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your Orders</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styling File -->
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="./assets/css/style1.css">

     
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">



    <!--bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- bootstrap with the weblinks -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Header starts -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="logo2.png" alt="img" width="60" height="30" loading="lazy" class="d-inline-block align-top"> Cooling Corner</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar" aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="navbar-nav ms-auto">
                        <!-- <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li> -->
                        <li class="nav-item"><a href="registered-user.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="user-about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="user-contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item active"><a href="order.php" class="nav-link">In Basket</a></li>
                        <li class="nav-item"><a href="user-logout.php" class="nav-link">Log Out</a></li>
                    </ul>

            
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->
    
<div class="container text-light m-5">
  <h2>CART</h2>

  <div class="row">
  <?php
  $total = 0;
  $cost = 0;
  session_start();
  $em = $_SESSION['uname'];
  echo "<h1>".$em."</h1>";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "icecream";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $query1 = "SELECT * FROM cart where uid = '$em'";
  $result = $conn->query($query1);

  if ($result->num_rows > 0) {
    echo "<table class='table'>";
    echo "<thead><tr><th>Name</th><th>Price</th><th>Quantity</th><th>Cost</th><th></th></tr></thead>";
    echo "<tbody>";
    $uid = ""; // Define $uid variable before the while loop
    while ($row= $result->fetch_assoc()) {
      $pid = $row['pid'];
      $uid = $row['uid'];
      $query2 = "SELECT * FROM cart where uid = '$em'";
      $result2 = $conn->query($query2);
      $row2 = $result2->fetch_assoc();
      echo "<tr>";
      echo "<td>".$row2['uid']."</td>";
      echo "<td>".$row2['price']."</td>";
      echo "<td>".$row['quantity']."</td>";
      
     echo $cost = (int)$row['quantity'] *(int) $row2['price'];
     echo $total = $total + $cost;
      echo "<td>".$cost."</td>";
      echo "<td><form method='POST'>";
      echo "<input type='hidden' name='id' value='$pid'>	";
      echo "<button type='submit' name='delete' class='btn btn-dark'>Remove</button></form></td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  } else {
    echo "No items in the cart.";
  }
  echo "<h2> Total: ".$total."$</h2>";

  if (isset($_POST['delete'])) {
    $clickedId = $_POST['id'];
    $query = mysqli_query($conn, "DELETE FROM cart WHERE pid = '$clickedId' AND uid = '$uid'");
    echo $clickedId."".$uid;
    header("location:cart.php");
  }

  $conn->close();
  ?>
  <button type="submit" name="btn" style="width:120px;margin: 0 auto" class="btn btn-primary">BUY</button>
</div>
</div>
</body>
</html>
<?php

?>


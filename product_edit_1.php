
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index File</title>
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
                        <li class="nav-item"><a href="admin_page.php" class="nav-link">Admin_home</a></li>
                        <li class="nav-item active"><a href="product_edit_1.php" class="nav-link">Edit</a></li>
                        <li class="nav-item"><a href="user-logout.php" class="nav-link">Log Out</a></li>
            
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->
<?php
session_start();
if (isset($_POST['btn']))	
	{
    $clickedId = $_POST['id'];
    echo "Clicked ID: " . $clickedId;
	$_SESSION['id']=$clickedId;
	header("location:product_edit_2.php");
}

if (isset($_POST['delete']))	
	{
    $clickedId = $_POST['id'];
	$connect = mysqli_connect("localhost", "root", "", "icecream");
	$query=mysqli_query($connect,"delete from products where id='$clickedId'");
}

?>
<html>
<head>
  <title>package</title>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .card {
      height: 100%;
    }

    .card-image-container {
      position: relative;
      padding-top: 100%; /* Set the aspect ratio as per your preference (e.g., 1:1 for square) */
      overflow: hidden;
    }

    .card-image-container img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>


<div class="container m-5">
  <h2 style="color:#fff">Products</h2>

  <div class="row">
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "icecream";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * FROM products";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $imageData = $row['image'];
        ?>
        <div class="col-lg-3 col-md-6 mb-4 p-10">
          <div class="card ">
            <div class="card-image-container ">
              <img src="data:image/jpeg;base64,<?= base64_encode($imageData) ?>" alt="Card image">
            </div>
            <div class="card-body">
              <h4 class="card-title"><?= $row['name'] ?></h4>
              <p class="card-text text-dark">Price: <?= $row['price'] ?>Rs.</p>
			  <form method='POST'><input type="hidden" name="id" value="<?php echo  $row['id'] ?> ">
			  <button type="submit" name="btn" style="width:200px;background-color: #35bed4; color: #fff ;border:4px solid #fff; border-radius: 50px">Update</button>
        <br>
			  <button type="submit" name="delete" style="width:200px;background-color: #d43535; color: #fff ;border:4px solid #fff; border-radius: 50px">delete </button></form>

            </div>
          </div>
        </div>
     <?php
      }
    }
    $conn->close();
    ?>
  </div>
</div>

</body>
</html>

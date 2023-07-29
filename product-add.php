
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
                        <!-- <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li> -->
                        <li class="nav-item"><a href="user-about.php" class="nav-link">About</a></li>
            
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->

 
  <div class="card" style="width:400px;margin: 0 auto">

  <!-- Existing form fields -->

  <input type="text" name="id" style="width:300px;margin: 0 auto" class="form-control mt-3" placeholder="id">
  <input type="file" name="image" style="width:300px;margin: 0 auto" class="form-control mt-3">
<input type="text" style="width:300px;margin: 0 auto" name="nme" class="form-control mt-3" placeholder="name">
<input type="text" style="width:300px;margin: 0 auto" name="price" class="form-control mt-3" placeholder="price">
<br>
<br>

	
  <button type="submit" name="btn" style="width:200px;margin: 0 auto" class="btn btn-dark">upload</button>
  <br>
  <br>
  
  </div>
  </div>
</form>
</body>
</html>
<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "icecream");

if (isset($_POST['btn']))
 {
  // Retrieve form data
  $t1 = isset($_POST['id']) ? $_POST['id'] : '';
  $t2 = isset($_POST['nme']) ? $_POST['nme'] : '';
  $t3 = isset($_POST['price']) ? $_POST['price'] : '';

  // Handle image upload
  $image = $_FILES['image']['tmp_name']; // Path to the temporary uploaded file
  $imageData = file_get_contents($image); // Retrieve the image data

 $qry = mysqli_prepare($connect, "INSERT INTO product (id, image, name, price) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($qry, 'ssss', $t1, $imageData, $t2, $t3);

  // Execute the prepared statement
  mysqli_stmt_execute($qry);

  if (mysqli_stmt_affected_rows($qry) > 0) {
    echo "Data inserted successfully!";
  } else {
    echo "Error: " . mysqli_error($connect);
  }

  mysqli_stmt_close($qry);


}
?>
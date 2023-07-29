

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
                        <li class="nav-item"><a href="logout.php" class="nav-link">Log Out</a></li>
            
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->
    <?php
session_start();
$id = $_SESSION['id'];
$connect = mysqli_connect("localhost", "root", "", "icecream");
$query = mysqli_query($connect, "SELECT * FROM products WHERE id='$id'");
$row = $query->fetch_assoc();
?>

<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function previewImage(event) {
      var reader = new FileReader();
      reader.onload = function() {
        var output = document.getElementById('preview');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
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

<br>
<center><h1><b>Upload Product</b></h1></center>
<form name="form" method="post" name="form1" action="" enctype="multipart/form-data">
  <div class="container m-3 d-flex justify-content-center" style="width: 600px;position:absolute; left
  :25%; margin-bottom:100px;">
   
       <div class="card b-5 " style="width:400px;margin: 0 auto;">
      <!-- Existing form fields -->
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">id</span>
        </div>
        <input type="text" name="id" style="width:300px;margin: 0 auto" value="<?php echo $row['id']; ?>" class="form-control" placeholder="id" readonly>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">image</span>
        </div>
        <input type="file" name="image" style="width:300px;margin: 0 auto" class="form-control" onchange="previewImage(event)">
      </div>

      <div class="card-image-container">
        <img id="preview" src="data:image/jpeg;base64,<?= base64_encode($row['image']) ?>" alt="Card image">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Flavour</span>
        </div>
        <input type="text" style="width:300px;margin: 0 auto" name="name" class="form-control" value="<?php echo $row['name']; ?>" placeholder="name">
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Price</span>
        </div>
        <input type="text" style="width:300px;margin: 0 auto" name="price" class="form-control" placeholder="price" value="<?php echo $row['price']; ?>">
      </div>

      <br>
      <br>

      <button type="submit" name="btn" style="width:200px;margin: 0 auto" class="btn btn-dark">Update</button>
      <br>
      <br>
    </div>
  </div>
  </div>

</form>
</body>
</html>

<?php
if (isset($_POST['btn'])) {
  // Retrieve form data
  $t2 = isset($_POST['name']) ? $_POST['name'] : '';
  $t3 = isset($_POST['price']) ? $_POST['price'] : '';

  // Handle image upload
  $image = $_FILES['image']['tmp_name']; // Path to the temporary uploaded file
  $imageData = file_get_contents($image); // Retrieve the image data

  $qry = mysqli_prepare($connect, "UPDATE products SET image = ?, name = ?, price = ? WHERE id = ?");
  mysqli_stmt_bind_param($qry, 'ssss', $imageData, $t2, $t3, $id);

  if (mysqli_stmt_execute($qry)) {
	  
	    ?>
<script language="javascript">
alert("Updated Successfully");
window.location.href="product_edit_1.php";
</script>
<?php

  } else {
    echo "Error: " . mysqli_error($connect);
  }

  mysqli_stmt_close($qry);
}
?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-success px-2 back-to-top">
    <i class="fa fa-angle-double-up"></i>
    </a>
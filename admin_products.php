
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
                        <li class="nav-item"><a href="admin_page.php" class="nav-link">Admin_Home</a></li>
                        
                        <li class="nav-item active"><a href="admin_products.php" class="nav-link">Add New</a></li>
                        <li class="nav-item "><a href="user-logout.php" class="nav-link">logout</a></li>
            
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->

<!DOCTYPE html>
<html>
<head>
  <title>Admin Products</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container text-light m-5" style="width:auto; max-width:auto">
  <div class="container m-auto">
    <div class="h2 d-flex justify-content-center">Admin Products</div>

    <!-- Display success or error messages if any -->
    <?php
    if (isset($_GET['message'])) {
      echo '<div class="alert alert-primary">' . $_GET['message'] . '</div>';
    }
    ?>
    <!-- Add New Product Form -->
    <div class="h4 d-flex justify-content-center">Add New Product</div>
    <form method="POST" name="form1" action="" enctype="multipart/form-data">
    <div class="form-row d-flex justify-content-center">
        <div class="col-md-4">
                   
      <div class="form-group">
        <label for="name">Product ID</label>
        <input type="text" class="form-control" id="id" name="id" required>
      </div>
        </div>
    </div>
    <div class="form-row d-flex justify-content-center">
        <div class="col-md-4">
      <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
        </div>
    </div>
    <div class="form-row d-flex justify-content-center">
        <div class="col-md-4">
      <div class="form-group">
        <label for="price">Product Price</label>
        <input type="number" class="form-control" id="price" name="price" required>
      </div>
        </div>
    </div>
    <div class="form-row d-flex justify-content-center">
        <div class="col-md-4">
      <div class="form-group">
        <label for="image">Product Image</label>
        <input type="file" class="form-control-file" id="image" name="image" required>
      </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary m-3" name="btn">Add Product</button>
    </div>
    </form>
    </div>

    <!-- Product List -->
    <!-- <h4>Product List</h4> -->

<?php
$connect = mysqli_connect("localhost", "root", "", "icecream");

if (isset($_POST['btn']))
 {
  // Retrieve form data
 $t1 = isset($_POST['id']) ? $_POST['id'] : '';
 $t2 = isset($_POST['name']) ? $_POST['name'] : '';
 $t3 = isset($_POST['price']) ? $_POST['price'] : '';

  // Handle image upload
  $image = $_FILES['image']['tmp_name']; // Path to the temporary uploaded file
  $imageData = file_get_contents($image); // Retrieve the image data

 $qry = mysqli_prepare($connect, "INSERT INTO products (id, image, name, price) VALUES (?, ?, ?, ?)");
  mysqli_stmt_bind_param($qry, 'ssss', $t1, $imageData, $t2, $t3);

  // Execute the prepared statement
  mysqli_stmt_execute($qry);

  if (mysqli_stmt_affected_rows($qry) > 0) {
    
    echo "Data inserted successfully!";
    ?>
    <script language="javascript">alert("Data Inserted Successfully.")</script>
    <?php
  } else {
    echo "Error: " . mysqli_error($connect);
  }

  mysqli_stmt_close($qry);


}
?>
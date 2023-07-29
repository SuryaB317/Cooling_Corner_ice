<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register form</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body class="bg-light">

     <!-- Header starts -->
     <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="logo2.png" alt="img" width="60" height="30" loading="lazy" class="d-inline-block align-top"> Ice-Cream</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar" aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="register.php " class="nav-link">Register</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="log in.php" class="nav-link">Log in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->

    <!-- PHP Starts -->
      <?php
      session_start();
      $connect=mysqli_connect("localhost","root","","icecream");
      if(isset($_POST['btn'])){
        $t1 = isset($_POST['fullname'])? $_POST['fullname']:'';
        $t2 = isset($_POST['mobile'])? $_POST['mobile']:'';
        $t3 = isset($_POST['email'])? $_POST['email']:'';
        $t4 = isset($_POST['password'])? $_POST['password']:'';
        $t5 = isset($_POST['c_password'])? $_POST['c_password']:'';

        $qry = mysqli_query($connect,"INSERT INTO user_detail (name, mobile, email, passowrd, c_password) VALUES ('$t1','$t2','$t3','$t4','$t5')");
        if($qry){
          ?>
          <script language= "javascript">
            alert("registered Successfully");
            window.location.href="register.php";
          </script>
          <?php
        }
        else{
          echo "Error:" .mysqli_error($connect);
        }
      }
      ?>
    <!-- Content -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <form  method="POST">
                <!-- 
                    Fullname [text]
                    number [number]
                    email [email]
                    message [textarea]
                    source [select]
                 -->
                <div class="form-group">
                  <label for="fullname">Full Name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="fullname"
                    placeholder="Enter your Full name"
                    required
                  />
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mobile">Mobile no.</label>
                      <input
                        type="number"
                        name="mobile"
                        class="form-control"
                        placeholder="+91 9876543212"
                        required
                        id="phoneHelp"
                      />
                      <small id="phoneHelp" class="form-text text-muted">
                        We won't share your number with anyone else.
                      </small>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        placeholder="abc@gmail.com"
                        required
                        aria-describedby="emailHelp"
                      />
                      <small id="emailHelp" class="form-text text-muted">
                        We'll never share your email with anyone else.
                      </small>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="c_password">Confirm Password</label>
                      <input
                        type="password"
                        name="c_password"
                        id="c_password"
                        placeholder="Confirm Password"
                        class="form-control"
                        required
                      />
                    </div>
                  </div>
                </div>

                <div class="form-group form-check text-center">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="termsAgreement"
                    required
                  />
                  <label class="form-check-label" for="termsAgreement">
                    I agree to terms and conditions.
                  </label>
                </div>

                <div class="form-group text-center">
                  <button type="reset" class="btn btn-secondary">Reset</button>

                  <button class="btn btn-success" type="submit">
                    <i class="fa fa-external-link mr-1"></i>
                    Register
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="./assets/js/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script src="./assets/js/bootstrap.min.js"></script>
  </body>
</html>

//from admin_products.php
    
// Fetch products from the database and display them in a table
    // Replace database connection details with your own
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "icecream";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo '<table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Name</th>
                  <th>Product Price</th>
                  <th>Product Image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>';
      while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['price'] . '</td>
                <td><img src="' . $row['image'] . '" height="50"></td>
                <td>
                  <a href="edit_product.php?id=' . $row['id'] . '" class="btn btn-primary btn-sm">Edit</a>
                  <a href="delete_product.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>';
      }
      echo '</tbody></table>';
    } else {
      echo '<p>No products found.</p>';
    }

    $conn->close();
    ?>

  </div>
</body>
</html>

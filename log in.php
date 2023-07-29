
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login form </title>

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
                        <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                        <!-- <li class="nav-item"><a href="register.php " class="nav-link">Register</a></li> -->
                        <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item active"><a href="log in.php" class="nav-link">Log in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->

    <?php
session_start();

$servername = "localhost"; 
$username = "root";        
$password = "";           
$dbname = "icecream";  

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 5: Retrieve the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $password = $_POST["password"];

    

    //  Compare the entered username and password with the admin  or any registered user
    $adminUsername = "surya317";
    $adminPassword = "surya123";

    if ($fullname === $adminUsername && $password === $adminPassword) {
        // Admin login successful
      
        echo "Admin login successful!";
        header("location:admin_page.php");
    } else {
        // Check if the entered credentials match any registered user in the database
        $sql = "SELECT * FROM users WHERE fullname = '$fullname' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // User login successful
            echo "User login successful!";
            $_SESSION['uname']= $fullname;
            header("location:registered-user.php");
        } else {
            // Login failed
            echo "Invalid username or password!";
        }
    }
}

$conn->close();
?>

    <!-- Content -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="card">
            <div class="card-body">
              <form class="needs-validation" action=" " method="POST" name="form" novalidate>
                <div class="mb-3" style="position: relative">
                  <label for="fullname" class="form-label">User Name</label>
                  <input
                    type="text"
                    name="fullname"
                    id="fullname"
                    class="form-control"
                    placeholder="username"
                    required
                  />
                  <div class="valid-feedback">Looks good!</div>

                  <div class="invalid-feedback">Please enter your Username.</div>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                    class="form-control"
                    required
                  />
                  <div class="invalid-feedback">
                    Please enter your password.
                  </div>
                </div>

                <div class="mb-3 d-grid">
                  <button class="btn btn-success" type="submit" name="submit">
                    <i class="fa fa-unlock-alt me-1"></i>
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="pt-3 text-center">
            <small class="">
              Don't have an account?
              <a href="./register.php" style="color:aliceblue">Register now</a>
            </small>
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

    <script>
      //Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        "use strict";
        window.addEventListener(
          "load",
          function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
              forms,
              function (form) {
                form.addEventListener(
                  "submit",
                  function (event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                  },
                  false
                );
              }
            );
          },
          false
        );
      })();
    </script>
  </body>
  </html>


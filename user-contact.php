<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>

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

  <body class="bg-white">
    <!-- Header -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a href="/" class="navbar-brand">
            <img
              src="logo2.png"
              width="30"
              height="30"
              alt="Ice Cream"
              loading="lazy"
              class="d-inline-block align-top"
            />
           Cooling Corner
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#myNavBar"
            aria-controls="myNavBar"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="myNavBar">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a href="registered-user.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="user-about.php" class="nav-link">About</a>
              </li>
              <li class="nav-item active">
                <a href="user-contact.php" class="nav-link">Contact</a>
              </li>
              
              <li class="nav-item">
                <a href="user-service.php" class="nav-link">Service</a>
              </li>
              <li class="nav-item">
                <a href="user-logout.php" class="nav-link">Log Out</a>
</li>
              

              <!-- <li class="nav-item">
                <a href="log in.php" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
              </li> -->
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- End Header -->
<!--php starts-->
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $source = $_POST["source"];
    $message = $_POST["message"];

    // Validate and sanitize the data (you can add more validation if needed)
    $name = htmlspecialchars($name);
    $gender = htmlspecialchars($gender);
    $mobile = htmlspecialchars($mobile);
    $email = htmlspecialchars($email);
    $source = htmlspecialchars($source);
    $message = htmlspecialchars($message);

    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "icecream";

    // Create a new PDO instance
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare and execute the SQL statement
        $stmt = $conn->prepare("INSERT INTO contact (name, gender, mobile, email, source, message) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $gender, $mobile, $email, $source, $message]);

        echo "Data forwarded successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>
<!-- PHP Ends -->

    <!-- Content -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-8">
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe
                class="col-md-12"
                height="800"
                id="gmap_canvas"
                src="https://maps.google.com/maps?q=Trichy&z=13&output=embed"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
              ></iframe>
            </div>
            <style>
              /* .mapouter {
                position: relative;
                text-align: right;
                height: 500px;
                width: 600px;
              }
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 500px;
                width: 600px;
              } */
            </style>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <i class="fa fa-envelope mr-2"></i>
              Contact us anytime!
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <!-- 
                    name [text]
                    number [number]
                    email [email]
                    message [textarea]
                    source [select]
                 -->
                <div class="form-group">
                  <label for="name">Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter your name"
                  />
                </div>
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <div class="ml-2 form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      value="Male"
                      id="gender"
                    />
                    <label class="form-check-label" for="gender">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="female"
                      value="Female"
                    />
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="others"
                      value="Others"
                    />
                    <label class="form-check-label" for="others">Others</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile no.</label>
                  <input
                    type="text"
                    name="mobile"
                    class="form-control"
                    placeholder="+91 9876543212"
                  />
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                    placeholder="abc@gmail.com"
                    aria-describedby="emailHelp"
                  />
                  <small id="emailHelp" class="form-text text-muted">
                    We'll never share your email with anyone else.
                  </small>
                </div>
                <div class="form-group">
                  <label for="source">Came from</label>
                  <select name="source" id="source" class="form-control">
                    <option value="">--Select Option--</option>
                    <option value="Media">Media</option>
                    <option value="YouTube">Youtube</option>
                    <option value="By Mouth">By Mouth</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea
                    name="message"
                    id="message"
                    rows="5"
                    class="form-control"
                    placeholder="Enter message briefly"
                  ></textarea>
                </div>
                <div class="form-group form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="exampleCheck1"
                  />
                  <label class="form-check-label" for="exampleCheck1">
                    I agree to terms and conditions.
                  </label>
                </div>

                <div class="form-group">
                  <button class="btn btn-primary btn-block" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-success px-2 back-to-top" style="position: absolute;right:0%; top:120%">
       <i class="fa fa-angle-double-up"></i>
    </a>

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
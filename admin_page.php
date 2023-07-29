<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purchase Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/style1.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">
    <!-- Libraries Stylesheet -->
    <link href="./assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="./assets/css/lightbox.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


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
                        <li class="nav-item active"><a href="admin_page.php" class="nav-link">Admin_Home</a></li>
                        <li class="nav-item"><a href="admin_products.php" class="nav-link">Add New</a></li>                        
                        <li class="nav-item"><a href="product_edit_1.php" class="nav-link">Update</a></li>
                        <li class="nav-item"><a href="user-logout.php" class="nav-link">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->

    <div class="container m-5 text-light ">
        <h1>Admin Page</h1>
        <div class="container">

        
        <?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icecream";

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data from the contact table
    $stmt = $conn->query("SELECT * FROM contact");
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container bg-success text-light p-5">
        <h1>Contact List</h1>
        <table class="table text-light">
            <thead>
                <tr >
                    <th style="color: #fff;">ID</th>
                    <th class="text-light">Name</th>
                    <th class="text-light">Gender</th>
                    <th class="text-light">Mobile</th>
                    <th class="text-light">Email</th>
                    <th class="text-light">Source</th>
                    <th class="text-light">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact) : ?>
                    <tr>
                        <td><?php echo $contact['id']; ?></td>
                        <td><?php echo $contact['name']; ?></td>
                        <td><?php echo $contact['gender']; ?></td>
                        <td><?php echo $contact['mobile']; ?></td>
                        <td><?php echo $contact['email']; ?></td>
                        <td><?php echo $contact['source']; ?></td>
                        <td><?php echo $contact['message']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>


    </div>
      
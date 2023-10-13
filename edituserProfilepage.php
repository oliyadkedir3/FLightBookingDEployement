<?php
include "db.inc.php";
include "validation.inc.php";

session_start();
$isLoggedIn = isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true;
if (isset($_SESSION['email'])) {
    $email = setup_input($_SESSION['email']);
    $sql = "SELECT * FROM user_table WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result === false) {
        die("Query failed: " . $conn->error);
      }
    else {
        $row = $result->fetch_assoc();
        $name = $row['name'];

}   
}else if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
  $name = "admin";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_FILES["image"])) {
    $fid = $row['id'];
    $sql = "UPDATE user_table SET name = ?, email = ?, profileimage = ?, accountbalance = ? WHERE id = '$fid'";
        $stmt = $conn->prepare($sql);
        if($stmt){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $acctbal = $_POST['actbal'];
          $file_tmp_view = $_FILES["image"]["tmp_name"][0];
          $file_data_view = file_get_contents($file_tmp_view);

          $stmt->bind_param("ssss", $name, $email, $file_data_view, $acctbal);
          $stmt->execute();

          // Check if the update was successful
          if ($stmt->affected_rows > 0) {
            $message = "User Updated Successfully.";
            echo '<script>alert("' . $message . '");</script>';
          } else {
            echo "Failed to update the hotel.";
          }
        }
        }
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conteNT="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Hub</title>
    <!--css-->
    <link rel="stylesheet" href="stylet.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
<!--Header-->
    <header class="header">
            <a href="#" class="logo">FLIGHT HUB
                <div class='bx bxs-plane-alt' id="plane icon" ></div>
            </a>
                <uL class="navbar">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="index.php">Services</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="index.php">Reviews</a></li>
                </uL>
                <div class="dropdown" <?php if (!$isLoggedIn) echo 'style="display: none;"';?>>
                    <div class="dropdown-text"><?php echo $name; ?><div class="fas fa-user" id="user"></div></div>
                    <div class="dropdown-content">
                        <a href="userProfilepage.php">Profile</a>
                        <a href="animatedLogin.php">Logout</a>
                    </div>
                </div>

    </header>
    <section class="userprofile">
    <?php 

    echo '<form method="POST" action="edituserProfilepage.php" enctype="multipart/form-data">';
    echo '<div class="user-info">';
    echo '<label for="file-input">Image:</label>';
    echo '<input id="file-input" type="file" name="image[]" accept="image/*" multiple>';
    echo '<label for="name">Name:</label>';
    echo '<input type="text" id="name" name="name"">';

    echo '<label for="email">Email:</label>';
    echo '<input type="email" id="email" name="email">';

    echo '<label for="actbal">Account Balance</label>';
    echo '<input type="text" name="actbal" id="actbal">';
    echo '<input type="submit" value="Submit">';
    echo '</div>';
    echo '</form>';
    echo '</div>'
    ?>
    
    </section>

    <footer>
    <div class="footer-container">
      <div class="about-section">
        <h3>The sky's the limit!</h3>
        <p>Compare and book cheap flights from anywhere, to everywhere</p>
      
      <div class="links">
        <ul>
          <li><a href="#">About us</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Help</a></li>
          <li><a href="#">Cookie policy</a></li>
        </ul>
      </div>
        </div>
      <div class="partners-section">
        <h3>Some of Our Air-line Partners</h3>
        <hr>
        <div class="partner-logos">
          <img src="/u/ethlogo.png">
          <img src="/u/kisspng-addis-ababa-ethiopian-airlines-charles-de-gaulle-a-airline-5ac4d65a96f561.1409619115228493706183.png" alt="Partner 2">
          <img src="/u/turkish.png" alt="Partner 3">
          <img src="/u/unitedairlin.png" alt="Partner 4">
          <img src="/u/flyemirates.png" alt="Partner 5">
        </div>
      </div>
      <div class="contacts">
        <div class="contact-us">
            <h3>Contact Us</h3>
            <h3>Platform 9<sup>3</sup>/<sub>4</sub>, King's Cross Station</h3>
            <p>Phone +251-9876543</p>
            <p>Email: support@flighthub.com</p>
        </div>
        <div class="fh3"><h3>Follow Us</h3></div>
        <div class="social-media">
            <div class="icon">
            <i class="fab fa-facebook fa-3x"></i>
            <span class="icon-text">Facebook</span>
          </div>
        
          <div class="icon">
            <i class="fab fa-instagram fa-3x"></i>
            <span class="icon-text">Instagram</span>
          </div>
        
          <div class="icon">
            <i class="fab fa-twitter fa-3x"></i>
            <span class="icon-text">Twitter</span>
          </div>   
        </div>
    </div>
    <div class="additional-info">
      <p>&copy; 2023 FlightHub ltd 1600 - the future. All rights reserved.</p>
      <p>Terms of Service | Privacy Policy</p>
    </div>
  </footer>
  <script src="index.js"></script>
    </body>
    </html>


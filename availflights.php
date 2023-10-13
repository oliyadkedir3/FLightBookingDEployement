<?php
include "db.inc.php";
include "validation.inc.php";

session_start();
$isLoggedIn = isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true;
if (isset($_SESSION['email'])) {
    $email = setup_input($_SESSION['email']);
    $sql = "SELECT name FROM user_table WHERE email = '$email'";
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
$sql1 = "SELECT * FROM flights_table";
    $result2 = $conn->query($sql1);
    if ($result2 === false){
      die("Query Failed: ".$conn->error);
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
    <section class="availflight">
      <div class="havail"><h1>Available Flights</h1></div>
      <?php
      if($result2->num_rows > 0){
        while($row2 = $result2->fetch_assoc()){
          $airicon =  "data:image/jpeg;base64," . base64_encode($row2['airline']);
          $price = $row2['price'];
          $deptdate = $row2['departure_date'];
          $depttime = $row2['departure_time'];
          $arrivdate = $row2['arrival_date'];
          $arrivtime = $row2['arrival_time'];
          $detpcity = $row2['departure_city'];
          $arrivcity = $row2['arrival_city'];
          $flightid = $row2["id"];
          echo '<div class="divavail">';
          echo '<img class="airline-img" src="' . $airicon . '" alt="airline Image">';
          echo '<div class="price"><p>'. $price .'$</p></div>';
          echo '<div class="planeicon"><img src="u/flyingplane.svg" alt="flyingplane"></div>';
          echo '<div class="deptdatetime"><p>'. $deptdate .', '. $depttime .'</p></div>';
          echo '<div class="arrivdatetime"><p>'. $arrivdate .', '. $arrivtime .'</p></div>';
          echo '<div class="deptcity"><p>'. $detpcity .'</p></div>';
          echo '<div class="arrivcity"><p>'. $arrivcity .'</p></div>';
          echo '<div class="book"><a href="flightbookinpage.php?fid='. $flightid .'">Book</a></div>';
          echo '</div>';
        }
      }
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
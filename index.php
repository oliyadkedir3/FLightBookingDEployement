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
        $name = explode(" ",$row['name'])[0];
    }
}else if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"){
    $name = "admin";
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
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                </uL>
                <div class="dropdown" <?php if (!$isLoggedIn) echo 'style="display: none;"';?>>
                    <div class="dropdown-text"><?php echo $name; ?><div class="fas fa-user" id="user"></div></div>
                    <div class="dropdown-content">
                        <a href="userprofilepage.php">Profile</a>
                        <a href="availflights.php">Flights</a>
                        <a href="logoutlogic.php">Logout</a>
                    </div>
                </div>

    </header>
<!--home page-->
 <section class="home" id="home">
        <div class="home-text">
            <h1>The sky's the limit!</h1>
            <p>We strive for your satisfaction. Choose us, and
            find the best flights <br> to your destination.</p>
            <a href="#" class="home-btn" id="exp">EXPLORE</a>
            <!--form id="form">
               
            </form-->
        </div>
</section>

<!--container-->
<section class="container">
    <div class="text">
        <h2>Start your trip<br> by choosing one of our services!</h2>
    </div>
    <div class="slider">
        <div class="container-box" data-bg-image="u/pexels-benjamin-suter-2700532.jpg">
          <div class="container-img">
            <i class='bx bxs-briefcase-alt-2 bx-lg'></i>
          </div>
          <h4>For every business type</h4>
          <p>We can take the stress out of business<br> travel,
            so you can focus on what's important.</p>
        </div>
        <div class="container-box" data-bg-image="u/pexels-cameron-casey-1157255.jpg">
          <div class="container-img">
            <i xclass='bx bx-money bx-lg'></i>
          </div>
          <h4>For every budget</h4>
          <p>We offer a wide range of travel <br> services
            to meet your budget and needs.</p>
        </div>
        <div class="container-box" data-bg-image="u/pexels-stefan-stefancik-127905.jpg">
          <div class="container-img">
            <i class='bx bxs-map bx-lg'></i>
          </div>
          <h4>For every option</h4>
          <p>We offer over 150 travel <br> destinations
            to fulfill your desires.</p>
        </div>
      </div>
      
</section>
<!--services-->
<section id="services">
    <form id="serve">
    <div id="lgs">
        <a href="#" class="logo" id="secLogo" >FLIGHT HUB
            <div class='bx bxs-plane-alt fly-animation' id="planeicon"></div>
        </a>
    </div>
    <div id="ds">
         
        <div class="First">
            <label for="tType">Type</label>
            <select name="travelType" id="tType">
                <option value="Round" selected>Round Trip</option>
                <option value="oneWay">One-Way</option>
                <option value="multi">Multi-City</option>
            </select>
            <label for="dpt">Departing From</label>
            <select name="departing" id="dpt" required>
                <option value="Novalidate">Departing From</option>
                <option value="dc1">Pyongyang, North Korea</option>
                <option value="dc2">Scranton, Pennsylvania, United States</option>
                <option value="dc3">Hogwarts School of Witchcraft and Wizardry, United Kingdom</option>
                <option value="dc4">Quahog, Rhode Island, United States</option>
                <opyion value="dc5">Wadiya, somehwere in the middle-east</opyion>
                <option value="dc6">Asgard, planet</option>
                <option value="dc7">Winterfell, castle</option>
                <option value="dc8">District 12, Panem</opuion>
                <option value="dc9">Gotham City, Ethiopia</opuion>
                <option value="dc10">Narnia, Some land</opuion>
            </select>
            <label for="arr">Arriving At</label>
            <select name="ariving" id="arr" required>
                <option value="Novalidate">Arriving At </option>
                <option value="ac1">Pyongyang, North Korea</option>
                <option value="ac2">Scranton, Pennsylvania, United States</option>
                <option value="ac3">Hogwarts School of Witchcraft and Wizardry, United Kingdom</option>
                <option value="ac4">Quahog, Rhode Island, United States</option>
                <opyion value="ac5">Wadiya, somehwere in the middle-east</opyion>
                <option value="ac6">Asgard, planet</option>
                <option value="ac7">Winterfell, castle</option>
                <option value="ac8">District 12, Panem</option>
                <option value="ac9">Gotham City, Ethiopia</option>
                <option value="ac10">Narnia, Some land</option>
            </select>
        </div>
        <div class="second">
            <label for="dates"> Date</label>
            <input name="Tdate" id="dates" type="date"> 
            <br>
            <label for="passangers">Passangers</label>
            <div id="Pslct">
                <select name="passangersOn" id="passangers">
                    <option value="p1">Infant(0-24 months)</option>
                    <option value="p2">Child(2-11 years)</option>
                    <option value="p3">Teenagers(12-18 years)</option> 
                    <option value="p4" selected>Adult(18-70 years)</option>
                    <option value="p5">Seinor(70 and older)</option>
                </select>
                <input name="spin" id="sp" type="number" value="1" step="1" min="0" max="10"> 
            </div>
            <button id="search-button" type="summit">
                <i class="fas fa-search fa-1x" id="sic"></i>  Search Flight</button>
        </div>
    </div>
    </form>
</section>
<!--testimonials-->
<section id="reviews">
    <div class="outerdiv">
        <div class="innerdiv">
            <!--first review-->
            <div class="Tone elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://media.newyorker.com/photos/5aeb586479f6430aaa0f9d19/1:1/w_1111,h_1111,c_limit/Wright-Kim-Jong-Un-Profile.jpg" alt=""> 
                    </div>
                    <div class="Tdetails">
                        <p class="name">Kim Jung Un</p>   
                        <p class="cred">Leisure traveler</p>  
                    </div>
                </div>
                <div class="review">
                    <h4>Too easy to use </h4>
                    <p>
                        "I am very happy with your services. I would highly recommend Flight Hub to anyone who is looking to book a flight.
                        However, there is one small problem. Your website is so easy to use that I have been spending all of my time booking flights and none of my time ruling my country. As a result, my people are starting to get restless.
                        I am not sure what to do. I love your website, but I also need to focus on my work.
                        Any suggestions?""
                    </p>
                </div>
            </div>
            <!--second review-->
            <div class="Ttwo elements">
            <div class="Tcontent">
                <div class="Timgbox">
                    <img src="https://i.pinimg.com/originals/09/b3/fb/09b3fbfe0ce5a4857f53d97690e9cb61.jpg" alt="">
                </div>
                <div class="Tdetails">
                    <p class="name">Dwight K.Schrute</p>
                    <p class="cred">Avid travler</p>
                </div>
            </div>
            <div class="review">
                <h4>Guter Service</h4>
                <p>
                    "I love this flight booking website! I booked a flight to Scranton in just a few minutes, and I didn't even have to call Jim for help."
                </p>
            </div>
            </div>
            <!--third review-->
            <div class="Tthree elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://i.pinimg.com/564x/e4/85/21/e48521a0921130886b08c82336031256--alan-rickman-severus-snape-professor-severus-snape.jpg" alt="">
                    </div>
                    <div class="Tdetail">
                        <p class="name">Professor Severus Snape</p>
                        <p class="cred">First time customer</p>
                    </div>
                </div>
                <div class="reviews">
                    <h4>Snape's seal of approval</h4>
                    <p>
                        "Me and Lily, my wife, have been using this flight booking website for years now and we have never been disappointed.
                        Flight Hub is so easy to use, even a potions master like me can figure it out. The prices are competitive, and the customer 
                        service is excellent. We would highly recommend this website to anyone who is looking to book a flight, even if they are a Death Eater."
                    </p>
                </div>
            </div>
            <!--fourth--> 
            <div class="Tfour elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRduPeo0BOfr38ReiQqSaQk4Wt_Bj1Sx2QX_w&usqp=CAU" alt="">
                    </div>
                    <div class="Tdetail">
                        <p class="name">Stewie Grifin</p>
                        <p class="cred">Business Traveler</p>
                    </div>
                </div>
                <div class="reviews">
                    <h4>Trust me!</h4>
                    <p>
                        "I'm Stewie Griffin, from my travles, I can sat Flight Hub is the best flight booking website out there. 
                        It's so easy to use, even a baby could do it."
                    </p>
                </div>
            </div>
            <!--fifth-->
            <div class="Tfive elements">
                <div class="Tcontent">
                    <div class="Timgbox">
                        <img src="https://arktimes.com/wp-content/uploads/2019/04/2247958-movie_review1-1.jpg" alt="">
                    </div>
                    <div class="Tdetails">
                        <p class="name">Admiral General Aladeen</p>
                        <p class="cred">Premium customer</p>
                    </div>
                </div>
                <div class="review">
                    <h4>Service fit for a king!</h4>
                    <p>
                        "I am Admiral General Aladeen, the supreme ruler of Wadiya. I am also a frequent flyer,
                         and I have used many different flight booking websites. I can honestly say that Flight Hub is the best of the best. The website is easy to use, the prices are competitive,
                          and the customer service is excellent. I highly recommend Flight Hub to anyone who is looking to book a flight."
                    </p>
                </div>
            </div>
        </div>
    </div> 
</section>
<!--idk yet maybe footer yay-->
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
  
<!--js script-->
<script src="script.js"></script>
</body>
</html>
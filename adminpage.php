<?php
include "db.inc.php";
include "validation.inc.php";

// Check if the form is submitted
$sql = "SELECT u.name, u.profileimage, f.flight_number, f.departure_city, f.departure_date, f.departure_time,
f.arrival_city, f.arrival_date, f.arrival_time, f.airline, f.price, f.seat_capacity, uf.booking_date, uf.id
FROM user_table u
JOIN user_flights_history_table uf ON u.id = uf.user_id
JOIN flights_table f ON uf.flight_id = f.id";
$result3 = $conn->query($sql);
$sql2 = "SELECT u.name, u.profileimage, f.flight_number, f.departure_city, f.departure_date, f.departure_time,
f.arrival_city, f.arrival_date, f.arrival_time, f.airline, f.price, f.seat_capacity, uf.booking_date, uf.id
FROM user_table u
JOIN user_flights_history_table uf ON u.id = uf.user_id
JOIN flights_table f ON uf.flight_id = f.id";
$result4 = $conn->query($sql2);
if ($result3 === false){
  die("Query Failed: ".$conn->error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_FILES["image"]) && isset($_POST['fid'])) {

        $fid = $_POST['fid'];
        // Prepare the SQL statement to update images in the database
        $sql = "UPDATE flights_table SET flight_number = ?, departure_city = ?, arrival_city = ?, departure_date = ?, departure_time = ?, arrival_date = ?, arrival_time = ?, airline = ?, price = ?, seat_capacity WHERE id = '$fid'";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
          // Retrieve form data
          $flight_number = $_POST["flight_number"];
          $departure_city = $_POST["departure_city"];
          $file_tmp_view = $_FILES["image"]["tmp_name"][0];
          $file_data_view = file_get_contents($file_tmp_view);
          $arrival_city = $_POST["arrival_city"];
          $departure_date = $_POST["departure_date"];
          $departure_time = $_POST["departure_time"];
          $arrival_date = $_POST["arrival_date"];
          $arrival_time = $_POST["arrival_time"];
          $price = $_POST["price"];
          $seat_capacity = $_POST["seat_capacity"];

          // Bind the parameters and execute the statement
          $stmt->bind_param("ssssssssss", $flight_number, $departure_city, $arrival_city, $departure_date, $departure_time, $arrival_date, $arrival_time, $file_data_view, $price, $seat_capacity);
          $stmt->execute();

          // Check if the update was successful
          if ($stmt->affected_rows > 0) {
            $message = "Flight Updated Successfully.";
            echo '<script>alert("' . $message . '");</script>';
          } else {
            echo "Failed to update the hotel.";
          }
        }
  } else if (isset($_POST['did'])) {

      // Retrieve the ID of the row to delete
      $id = $_POST["did"];
  
      // Prepare the SQL statement to delete the row
      $sql = "DELETE FROM flights_table WHERE id = ?";
      $stmt = $conn->prepare($sql);
  
      if ($stmt) {
          // Bind the parameter and execute the statement
          $stmt->bind_param("i", $id);
          $stmt->execute();
  
          // Check if the deletion was successful
          if ($stmt->affected_rows > 0) {
              $message = "Row deleted successfully.";
              echo '<script>alert("' . $message . '");</script>';
          } else {
              $message = "No rows were deleted.";
              echo '<script>alert("' . $message . '");</script>';
          }
  
          // Close the statement
          $stmt->close();
      } else {
          $message = "Error preparing the SQL statement: " . mysqli_error($conn);
          echo '<script>alert("' . $message . '");</script>';
      }
  
      // Close the database connection
      mysqli_close($conn);
  
  
  } else if(isset($_FILES["image"])) {

    // Prepare the SQL statement to insert images into the database
    $sql = "INSERT INTO flights_table (flight_number, departure_city, arrival_city, departure_date, departure_time, arrival_date, arrival_time, airline, price, seat_capacity) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

        if ($stmt) {
          // Retrieve form data
          $flight_number = $_POST["fnumber"];
          $departure_city = $_POST["dcity"];
          $file_tmp_view = $_FILES["image"]["tmp_name"][0];
          $file_data_view = file_get_contents($file_tmp_view);
          $arrival_city = $_POST["acity"];
          $departure_date = $_POST["ddate"];
          $departure_time = $_POST["dtime"];
          $arrival_date = $_POST["adate"];
          $arrival_time = $_POST["atime"];
          $price = $_POST["price"];
          $seat_capacity = $_POST["scap"];

          // Bind the parameters and execute the statement
          $stmt->bind_param("ssssssssss", $flight_number, $departure_city, $arrival_city, $departure_date, $departure_time, $arrival_date, $arrival_time, $file_data_view, $price, $seat_capacity);
          $stmt->execute();

        // Check if the insertion was successful
        if ($stmt->affected_rows > 0) {
          $message = "Added New Flight Successfully.";
        echo '<script>alert("' . $message . '");</script>';
        } else {
          echo "Failed to store the image in the database: " . $_FILES["images"]["name"][$i] . "<br>";
        }
      

      // Close the statement
      $stmt->close();
    } else {
      echo "Error preparing the SQL statement: " . mysqli_error($conn);
    }
    

    // Close the database connection
    mysqli_close($conn);
  } else {
    echo "<div><p>No files selected or error during upload.</p></div>";
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
    <header class="header" style="background: linear-gradient(to right, #b238e0, #ff00ff);">
            <a href="#" class="logo">FLIGHT HUB
                <div class='bx bxs-plane-alt' id="plane icon" ></div>
            </a>
            <uL class="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#">Admin Page</a></li>
            </uL>
    </header>
    <aside>
  <ul>
    <li class="parent-dropdown">
      <i class="fas fa-tachometer-alt ficon"></i> Dashboard
      <ul class="nested-dropdown">
        <li class="nested-dropdown-item" data-target="statistics">Statistics</li>
        <li class="nested-dropdown-item" data-target="notifications">Notifications</li>
      </ul>
    </li>
    <li class="parent-dropdown">
      <i class="fas fa-plane ficon"></i> Flight Management
      <ul class="nested-dropdown">
        <li class="nested-dropdown-item" data-target="add-flight">Add flights</li>
        <li class="nested-dropdown-item" data-target="edit-flight">Edit flights</li>
        <li class="nested-dropdown-item" data-target="delete-flight">Delete flights</li>
      </ul>
    </li>
    <li class="parent-dropdown">
      <i class="fas fa-book ficon"></i> Booking Management
      <ul class="nested-dropdown">
        <li class="nested-dropdown-item" data-target="view-bookings">View bookings</li>
        <li class="nested-dropdown-item" data-target="update-status">Update booking status</li>
        <li class="nested-dropdown-item" data-target="manage-availability">Manage seat availability</li>
      </ul>
    </li>
  </ul>
</aside>
<div class="body-content" id="add-flight">
  <!-- Add Flight body content goes here -->
  <h1> Add a flight</h1>
  <form action="adminpage.php" method="POST" enctype="multipart/form-data">
  <div class="flight-container">
    <div class="flight-content">
      <label for="fnumber">Flight Number</label>
      <input type="text" name="fnumber" id="fnumber">
    </div>
    <div class="flight-content">
      <label for="dcity">Departure City</label>
      <input type="text" name="dcity" id="dcity">
    </div>
    <div class="flight-content">
      <label for="acity">Arrival City</label>
      <input type="text" name="acity" id="acity">
    </div>
    <div class="flight-content">
      <label for="ddate">Departure Date</label>
      <input type="date" name="ddate" id="ddate">
    </div>
    <div class="flight-content">
      <label for="dtime">Departure Time</label>
      <input type="time" name="dtime" id="dtime" step="1">
    </div>
    <div class="flight-content">
      <label for="adate">Arrival Date</label>
      <input type="date" name="adate" id="adate">
    </div>
    <div class="flight-content">
      <label for="atime">Arrival Time</label>
      <input type="time" name="atime" id="atime" step="1">
    </div>
    <div class="flight-content">
      <label for="airicon">Airline Icon</label>
      <input type="file" name="image[]" accept="image/*" id="airicon" multiple/>
    </div>
    <div class="flight-content">
      <label for="price">Price</label>
      <input type="number" name="price" id="price">
    </div>
    <div class="flight-content">
      <label for="scap">Seat Capacity</label>
      <input type="number" name="scap" id="scap">
    </div>
    <div class="flight-content">
      <button type="submit">Add</button>
    </div>
  </div>
  </form>
</div>
<div class="body-content" id="edit-flight">
  <!-- Edit Flight body content goes here -->
  <h1> Update a flight</h1>
  <form action="adminpage.php" method="POST" enctype="multipart/form-data">
  <div class="flight-container">
    <div class="flight-content">
      <label for="fid">Flight Id</label>
      <input type="number" name="fid" id="fid">
    </div>
    <div class="flight-content">
      <label for="fnumber">Flight Number</label>
      <input type="text" name="fnumber" id="fnumber">
    </div>
    <div class="flight-content">
      <label for="dcity">Departure City</label>
      <input type="text" name="dcity" id="dcity">
    </div>
    <div class="flight-content">
      <label for="acity">Arrival City</label>
      <input type="text" name="acity" id="acity">
    </div>
    <div class="flight-content">
      <label for="ddate">Departure Date</label>
      <input type="date" name="ddate" id="ddate">
    </div>
    <div class="flight-content">
      <label for="dtime">Departure Time</label>
      <input type="time" name="dtime" id="dtime" step="1">
    </div>
    <div class="flight-content">
      <label for="adate">Arrival Date</label>
      <input type="date" name="adate" id="adate">
    </div>
    <div class="flight-content">
      <label for="atime">Arrival Time</label>
      <input type="time" name="atime" id="atime" step="1">
    </div>
    <div class="flight-content">
      <label for="airicon">Airline Icon</label>
      <input type="file" name="image[]" accept="image/*" id="airicon" multiple/>
    </div>
    <div class="flight-content">
      <label for="price">Price</label>
      <input type="number" name="price" id="price">
    </div>
    <div class="flight-content">
      <label for="scap">Seat Capacity</label>
      <input type="number" name="scap" id="scap">
    </div>
    <div class="flight-content">
      <button type="submit">Update</button>
    </div>
  </div>
  </form>
</div>
<div class="body-content" id="delete-flight">
  <!-- Delete Flight body content goes here -->
  <h1>Delete a flight</h1>
  <form action="adminpage.php" method="POST">
  <div class="delete-container">
    <div class="delete-content">
      <label for="did">Flight Id</label>
      <input type="number" name="did" id="did">
    </div>
    <div class="delete-content">
      <button type="submit">Delete</button>
    </div>
  </div>
</div>
</div>
<div class="body-content" id="view-bookings">
  <!-- View Bookings body content goes here -->
  <?php
  $bookings = array();
  while($row4 = $result3->fetch_assoc()){
      $flightNo= $row4['flight_number'];
      $airlinedata = $row4['airline'];
      $airline = "data:image/jpeg;base64," . base64_encode($airlinedata);
      $profiledata = $row4['profileimage'];
      $profile = "data:image/jpeg;base64," . base64_encode($profiledata);
      $name = $row4['name'];
      $deptcity = $row4['departure_city'];
      $depttime = $row4['departure_time'];
      $deptdate = $row4['departure_date'];
      $arrcity = $row4['arrival_city'];
      $arrtime = $row4['arrival_time'];
      $arrdate = $row4['arrival_date'];
      $arrprice = $row4['price'];
      $arrseat = $row4['seat_capacity'];
      $arrbookingdate = $row4['booking_date'];
      $ufid = $row4['id'];
    
      echo '<div class="booking-container">';
      echo '<div class="profile-img-container">';
      echo '<img class="profile-img" src="' . $profile . '" alt="profile Image">';
      echo '<p>'. $name .'</p>';
      echo '</div>';
      echo '<div class="airline-logo-container">';
      echo '<img class="airline-img" src="' . $airline . '" alt="airline Image">';
      echo '</div>';
      echo '<div class="flight-content-container">';
      echo '<p>Flight Number: ' . $flightNo . '</p>';
      echo '<p>Departure City: ' . $deptcity . '</p>';
      echo '<p>Arrival City: ' . $arrcity . '</p>';
      echo '<p>Departure Date and Time: ' . $deptdate . ' '. $depttime .'</p>';
      echo '<p>Arrival Date and Time: ' . $arrdate . ' '. $arrtime .'</p>';
      echo '<p>Price: ' . $arrprice . '</p>';
      echo '<p>Seat Capacity: ' . $arrseat . '</p>';
      echo '<p>Booking Date: ' . $arrbookingdate . '</p>';
      echo '</div>';
      echo '</div>';
    }
    ?>
</div>

    <script src="admin.js"></script>
</body>
</html>
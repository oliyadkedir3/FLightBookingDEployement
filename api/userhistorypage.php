<div class="body-content" id="statistics">
  <!-- Statistics body content goes here -->
  <p>statistics page</p>
</div>
<div class="body-content" id="notifications">
  <!-- Notifications body content goes here -->
  <p>notifications page</p>
</div>
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
<div class="body-content" id="update-status">
  <!-- View Bookings body content goes here -->
  <?php
  while($row5 = $result4->fetch_assoc()){
      $flightNo1= $row5['flight_number'];
      $airlinedata1 = $row5['airline'];
      $airline1 = "data:image/jpeg;base64," . base64_encode($airlinedata1);
      $profiledata1 = $row5['profileimage'];
      $profile1 = "data:image/jpeg;base64," . base64_encode($profiledata1);
      $name1 = $row5['name'];
      $deptcity1 = $row5['departure_city'];
      $depttime1 = $row5['departure_time'];
      $deptdate1 = $row5['departure_date'];
      $arrcity1 = $row5['arrival_city'];
      $arrtime1 = $row5['arrival_time'];
      $arrdate1 = $row5['arrival_date'];
      $arrprice1 = $row5['price'];
      $arrseat1 = $row5['seat_capacity'];
      $arrbookingdate1 = $row5['booking_date'];
      $ufid1 = $row5['id'];
    
      echo '<div class="updating-container">';
      echo '<div class="profile-img-container">';
      echo '<img class="profile-img" src="' . $profile1 . '" alt="profile Image">';
      echo '<p>'. $name1 .'</p>';
      echo '</div>';
      echo '<div class="airline-logo-container">';
      echo '<img class="airline-img" src="' . $airline1 . '" alt="airline Image">';
      echo '</div>';
      echo '<div class="flight-content-container">';
      echo '<p>Flight Number: ' . $flightNo1 . '</p>';
      echo '<p>Departure City: ' . $deptcity1 . '</p>';
      echo '<p>Arrival City: ' . $arrcity1 . '</p>';
      echo '<p>Departure Date and Time: ' . $deptdate1 . ' '. $depttime1 .'</p>';
      echo '<p>Arrival Date and Time: ' . $arrdate1 . ' '. $arrtime1 .'</p>';
      echo '<p>Price: ' . $arrprice1 . '</p>';
      echo '<p>Seat Capacity: ' . $arrseat1 . '</p>';
      echo '<p>Booking Date: ' . $arrbookingdate1 . '</p>';
      echo '</div>';
      echo '</div>';
      echo '<div class="buttonclass">';
      echo '<a class="sucanc" href="adminpage.php?fid='. $ufid1 .'&confirmation='. true .'>';
      echo '<a class="faianc" href="adminpage.php?fid='. $ufid1 .'&confirmation='. false .'>';
      echo '</div>';
    }
    ?>
</div>
<div class="body-content" id="update-status">
  <!-- Update Status body content goes here -->
  
</div>
<div class="body-content" id="manage-availability">
  <!-- Manage Availability body content goes here -->
  
</div>
<div class="body-content" id="view-accounts">
  <!-- View Accounts body content goes here -->
</div>
<div class="body-content" id="activity-tracking">
  <!-- Activity Tracking body content goes here -->
</div>
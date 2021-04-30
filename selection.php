<!DOCTYPE html>
<html>
<title>High Wycombe Community Fridge</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/main.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="index.php" class="w3-bar-item w3-button">Community Fridge</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="store.php" class="w3-bar-item w3-button">Packages</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="images/food.jpg" alt="High Wycombe" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Select your package:</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

    <div class="container">
  <form action="function/insert.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="pnumber" name="phonenumber" placeholder="Your phone number...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email address...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Packages</label>
      </div>
      <div class="col-75">
        <select id="packages" name="packages">
          <option value="vegetable">Vegetable Package</option>
          <option value="ambient">Ambient Package</option>
          <option value="household">Household Items Packages</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Observation</label>
      </div>
      <div class="col-75">
        <textarea id="observation" name="observation" placeholder="If you need any extra items, please write here..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>High Wycombe Community Fridge</p>
</footer>

</body>
</html>

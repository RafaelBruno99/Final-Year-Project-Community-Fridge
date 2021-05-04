<!DOCTYPE html>
<html>
<title>Admin - Users</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/main.css">
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="../admin.php" class="w3-bar-item w3-button">Admin - User Page</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="stock.php" class="w3-bar-item w3-button">Stock</a>
      <a href="users.php" class="w3-bar-item w3-button">Users</a>
      <a href="../admin.php" class="w3-bar-item w3-button">Orders</a>
    </div>
  </div>
</div>

<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="../images/high-wycombe-banner.jpg" alt="High Wycombe" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Orders</h1>
  </div>
</header>

<div class="w3-content" style="max-width:1100px" id="orders">

  <table class="styled-table">
      <thead>
          <tr>
              <th>User ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>User Type</th>
          </tr>
      </thead>
      <tbody>
          <?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysqli_connect("localhost", "root", "", "project_database");
            
            // Check connection
            if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            
            $sql = "SELECT userID, FirstName, LastName, Email, userType FROM users";
            $result = $link-> query($sql);

            if($result-> num_rows > 0){
              while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["userID"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Email"]."</td><td>".$row["userType"]."</td></tr>";
              }
              echo "</tbody>";
            }
            else {
              echo "0 Result";
            }
            $link-> close();

          ?>
      </tbody>
  </table>
    
  
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
<p>High Wycombe Community Fridge</p>
</footer>

</body>
</html>

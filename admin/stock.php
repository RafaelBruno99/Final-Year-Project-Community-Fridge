<!DOCTYPE html>
<html>
<title>High Wycombe Admin Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="../css/main.css">
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="../admin.php" class="w3-bar-item w3-button">Community Fridge Admin Page</a>
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
    <h1 class="w3-xxlarge">Stock</h1>
  </div>
</header>

<div class="w3-content" style="max-width:1100px" id="orders">

<div class="w3-row w3-padding-64" id="about">
        <button class="button-design2" id="myBtn">Add Stock</button>
</div>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
      <div class="container">
        <form action="function/insertstock.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-25">
              <label for="pname">Product Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="pname" name="pname" placeholder="Product Name...">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="quantity">Quantity</label>
            </div>
            <div class="col-75">
              <input type="text" id="quantity" name="quantity" placeholder="Quantity">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="image">Image</label>
            </div>
            <div class="col-75">
              <input type="file" name="image">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="packages">Packages</label>
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
            <input type="submit" name="upload" value="Submit">
          </div>
       </form>
      </div>
   </div>
</div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <table class="styled-table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Product Name</th>
              <th>Quantity</th>
              <th>Package</th>
              <th>Image</th>
              <th>Delete</th>
          </tr>
      </thead>
      <tbody>
          <?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $link = mysqli_connect("localhost", "root", "", "project_database");
            $sql = "SELECT id, pname, quantity, image, packages FROM stock";
            $result = mysqli_query($link, $sql);

              while ($row = mysqli_fetch_array($result)) {
                echo "<tr><td>".$row["id"]."</td>";
                echo "<td>".$row["pname"]."</td>";
                echo "<td>".$row["quantity"]."</td>";
                echo "<td>".$row["packages"]."</td>";
                echo "<td><img src='../images/".$row["image"]."' width='150' length='200'</td>";
                echo "<td><form action='../function/delete.php' method='post'><button name='deletestock' value='".$row["id"]."'>Delete</button></form></td></tr>";
              }
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

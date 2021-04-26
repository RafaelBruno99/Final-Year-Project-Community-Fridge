<!DOCTYPE html>
<html>
<title>High Wycombe Community Fridge</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/main.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
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
    <h1 class="w3-xxlarge">High Wycombe Community Fridge</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/vegetables.jpg" class="w3-round w3-image w3-opacity-min" alt="Fridge" width="600" height="750">
    </div>
    <form method="POST" action="selection.php">
      <div class="w3-col m6 w3-padding-large">
        <h1 class="w3-center">Vegetable Package</h1><br>
        <button class="button-design" type="submit">ORDER</button>  
        <p class="w3-large"> Donec in vestibulum diam, vitae feugiat urna. Aliquam justo diam, egestas in sodales quis, elementum nec lacus. Pellentesque a venenatis libero. Vivamus eget dignissim purus. Suspendisse convallis neque purus, vel venenatis massa accumsan sit amet. Nunc facilisis, diam sed suscipit blandit, sapien ipsum tincidunt odio, non mollis sapien nunc at ligula. Morbi rhoncus risus id lectus ornare, ut tincidunt nulla pharetra. Ut placerat diam a pharetra sollicitudin.</p>
      </div>
    </form>

  </div>
  
  <hr>
  
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/ambient.jpg" class="w3-round w3-image w3-opacity-min" alt="Fridge" width="600" height="750">
    </div>

    <form method="POST" action="selection.php">
      <div class="w3-col m6 w3-padding-large">
        <h1 class="w3-center">Ambient Food Package</h1><br>
        <button class="button-design" type="submit">ORDER</button>
        <p class="w3-large"> Donec in vestibulum diam, vitae feugiat urna. Aliquam justo diam, egestas in sodales quis, elementum nec lacus. Pellentesque a venenatis libero. Vivamus eget dignissim purus. Suspendisse convallis neque purus, vel venenatis massa accumsan sit amet. Nunc facilisis, diam sed suscipit blandit, sapien ipsum tincidunt odio, non mollis sapien nunc at ligula. Morbi rhoncus risus id lectus ornare, ut tincidunt nulla pharetra. Ut placerat diam a pharetra sollicitudin.</p>
      </div>
    </form>
  </div>

  <hr>
  
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/household.jpg" class="w3-round w3-image w3-opacity-min" alt="Fridge" width="600" height="750">
    </div>
    <form method="POST" action="selection.php">
      <div class="w3-col m6 w3-padding-large">
        <h1 class="w3-center">Household Item Package</h1><br>
        <button class="button-design" type="submit">ORDER</button>
        <p class="w3-large"> Donec in vestibulum diam, vitae feugiat urna. Aliquam justo diam, egestas in sodales quis, elementum nec lacus. Pellentesque a venenatis libero. Vivamus eget dignissim purus. Suspendisse convallis neque purus, vel venenatis massa accumsan sit amet. Nunc facilisis, diam sed suscipit blandit, sapien ipsum tincidunt odio, non mollis sapien nunc at ligula. Morbi rhoncus risus id lectus ornare, ut tincidunt nulla pharetra. Ut placerat diam a pharetra sollicitudin.</p>
      </div>
     </form> 
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>

<html>
  <head>
      <title>Community Fridge</title>
      <link rel="stylesheet" href="css/login.css">
  </head>

  <body>
    
    <div class="hero">
    <h1>Community Fridge Login & Registration</h1>
      <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Login</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
        </div>
        <div class='social-icons'>
          <img src="images/fb.png">
          <img src="images/tw.png">
          <img src="images/gp.png">
        </div>
        <form id="login" method="post"  action="function/validation.php" class="input-group">
          <input type="text" name="email" class="input-field" placeholder="Email">
          <input type="password" name="password" class="input-field" placeholder="Enter Password"></br></br>
          <div class="user-selection">
              <label class="label" for="userType">I am a: </label></br>
                  <select id="userType" name="userType">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                  </select>
          </div>
          <input type="checkbox" class="check-box"><span>Remember Password</span>
          <button type="submit" class="submit-btn" name="login"> Login in</button>
        </form>
        <form id="register" action="function/adduser.php" method="post" class="input-group">
          <input type="text" name="firstname" class="input-field" placeholder="First Name">
          <input type="text" name="lastname" class="input-field" placeholder="Last Name">
          <input type="email" name="email" class="input-field" placeholder="Email">
          <input type="password" name="password" class="input-field" placeholder="Enter Password"></br>
          <div class="user-selection">
              <label class="label" for="userType">I am a: </label></br>
                  <select id="userType" name="userType">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                  </select></br></br>
          </div>
          <button type="submit" class="submit-btn"> Register</button>
        </form>
      </div>
    </div>
    <script>
      var x = document.getElementById('login');
      var y = document.getElementById('register');
      var z = document.getElementById('btn');

      function register() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
      }
      function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
      }

    </script>
  </body>
</html>
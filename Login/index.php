<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head >
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body style="background-image: url('BG2.jpg');">
  <center><br><br>
      <img src="logo2.png" align="right" height="100px" width="100px">
      <img src="Logo.png" align="left" height="100px" width="100px">
      
    </center>
    <div class="center" >
      <h1 style="color:white;">Login</h1>
      <form method="post">
        <div class="txt_field">
          <input style="color:white;" type="text" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input style="color:white;" type="password" required value="" id="myInput" input type="checkbox" onclick="myFunction()">>
          
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" >
        </div>
      </form>
    </div>
    <section class="home-section">
    <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  </body>
</html>

<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>

    <div class="wrapper">
      <div class="header">
        <center><span id="title">School Programming Club</span><br></center>
        <center><span id="desc">Welcome Admin!</span></center>
      </div>
    <div class="form">
    <form action="" method="post">
    <div class="loginBox">
      <img src="ser.png" class="user">
      <h2 id="cek">Log In Here</h2>
        <?php
          $user = $_POST['email'];
          $pass = $_POST['password'];
          if (($user == "maharani@gmail.com") && ($pass == "26")) {
            echo "Login Anda Berhasil";
          }
          else {
            echo "Periksa Kembali Data Anda"; }
         ?>
      </form>

    </div>
    </div>
  </body>
</html>

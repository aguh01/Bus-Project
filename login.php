<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['name']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM registers WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: user-Form.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

?>
<!DOCTYPE html>
<html lang="en" style="height: 900px;width: 1200px;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ONLINE SYSTEM</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=ea5d3e176cee5313dd0a6cd75083e1b8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/header-1.css?h=1d9cdfbfdab44465cf687b11fa86f32a">
    <link rel="stylesheet" href="assets/css/header-2.css?h=71f541770d3d6448ae513a56bf9848df">
    <link rel="stylesheet" href="assets/css/header.css?h=ea730f3945ca3ebf3e00d7727601eb91">
    <link rel="stylesheet" href="assets/css/styles.css?h=d41d8cd98f00b204e9800998ecf8427e">
    <link rel="stylesheet" href="assets/css/unyama2.css?h=9e6ba6555a885e8e8d7829ecf7ee716d">
</head>

<body style="background: var(--bs-gray);">
    <div style="width: 1000px;">
        <header style="height: 250px;color: var(--bs-gray-900);background: var(--bs-gray-700);margin-top: 19px;width: 1080px;margin-left: 80px;margin-right: 0px;padding-left: 8px;border-width: 5px;border-style: inset;border-radius: 18px;"><img style="margin-left: 10px;height: 150px;width: 250px;margin-top: 43px;" src="assets/img/bus%20icon2.jpg?h=f8b0e3967579f5f68af6c0428d5ecd08">
            <h1 class="text-center" style="text-align: center;margin-top: -156px;font-weight: bold;padding-left: 150px;height: 100px;padding-top: 30px;">ONLINE-BUS REGISTRATION&nbsp;</h1>
            <p style="height: 50px;text-align: center;font-size: 19px;font-weight: bold;font-style: italic;color: var(--bs-gray-200);padding-left: 64px;padding-top: -19px;">EASY, FAST AND RELIABLE SERVICES</p>
        </header>
    </div>
    <div style="height: 425px;color: var(--bs-gray);margin-top: 0px;">
        <div style="height: 400px;color: var(--bs-gray);background: var(--bs-gray);width: 540px;margin-top: 95px;margin-left: 84px;">
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="height: 100px;padding-top: 0px;margin-top: 19px;">
                <div class="carousel-inner" style="border-radius: 14px;color: rgba(33,37,41,0);background: #ffffff;border: 5px solid var(--bs-gray-900) ;">
                    <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/abood%20bus.jpg?h=9efa0e425eb004cd353d64e5e5603e7e" style="padding-top: 0px;"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/kimbinyiko%20bus.jpg?h=6bbffd7bc61f86f1c73162f0b8351894"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/shabiby%20bus.jpg?h=35730d6b4ff34f899b1435bf05d73f39" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev" style="height: 250px;margin-top: 291px;width: 32px;"><span class="carousel-control-prev-icon" style="width: 81px;height: 250px;margin-top: -411px;"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" style="height: 250px;margin-top: 291px;"></span><span class="visually-hidden" style="width: 32px;height: 250px;margin-top: 291px;">Next</span></a></div>
                <ol class="carousel-indicators" style="margin-top: 0px;height: 150px;padding-top: 98px;margin-bottom: -248px;">
                    <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                </ol>
            </div>
        </div>
        <div style="background: var(--bs-gray);width: 500px;height: 420px;margin-top: -400px;margin-left: 661px;margin-bottom: 0px;margin-right: 63px;border-radius: 8px;border-style: outset;border-color: var(--bs-gray-500);">
            <section class="register-photo" style="width: 411px;height: 407px;margin-left: 40px;border-style: none;border-radius: 8px;">
                <div class="form-container" style="margin-top: -74px;">
                    <form method="post" style="margin-top: -14px;margin-bottom: 0px;height: 398px;border-radius: 7px;border: -6px solid var(--bs-white);">
                        <h2 class="text-center"><strong>TRAVEL WITH US.</strong></h2>
                        <div class="mb-3"><input class="form-control" type="url" name="name" placeholder="Username" required=""></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password " required=""></div>
                        <div class="mb-3" style="margin-top: -23px;width: 122.9px;margin-left: 60px;"><a class="btn btn-primary d-block w-100" role="button" href="user-Form1.html" style="width: 154.9px;">LOGIN</a></div><a class="already" href="registr1.php">You already have an account? REGISTER HERE.</a>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <div style="color: var(--bs-red);height: 98px;background: var(--bs-gray);margin-top: 28px;">
        <footer style="margin-left: 0px;"></footer><footer id="footer">
    
    <div style= "background: black; text-align: center; margin-left: 20px; padding-top:28px;height:90px;padding-left:20px">
        <p style= "color:grey; font-family: raleway;font-size:20px">Copyright (c) 2022. ONLINE-BUS REGISTRATION.</p>
    </div>
</footer>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=5488c86a1260428f0c13c0f8fb06bf6a"></script>
</body>

</html>
   
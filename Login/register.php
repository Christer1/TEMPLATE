<!DOCTYPE html>
<html lang="en">
<head>
<title>Register - Naira4Coin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta charset="UTF-8">
<meta name="keyword" content="Sell bitcoin and get paid instantly">

<link rel="icon" type="image/png" href="indexStyle/images/icons/logo.ico" />

<link rel="stylesheet" type="text/css" href="indexStyle/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="indexStyle/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="indexStyle/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="indexStyle/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="indexStyle/vendor/select2/select2.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="indexStyle/css/util.css">
<link rel="stylesheet" type="text/css" href="indexStyle/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
  <body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" style="margin-top: 30%;" data-tilt>
          <img src="indexStyle/images/logo.png" alt="LOGO">
        </div>

        <form class="login100-form" onsubmit="myFunction()" autocomplete="off">
          <span class="login100-form-title">Registration Form</span>

            <div class="wrap-input100" data-validate="Enter your full name">
              <input class="input100" type="text" name="fullname" placeholder="Enter your full name" required>
              <span class="focus-input100"></span>
              <span class="symbol-input100"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>

            <div class="wrap-input100" data-validate="Enter your preferred username">
              <input class="input100" type="text" name="username" placeholder="Username (For login)" required>
              <span class="focus-input100"></span>
              <span class="symbol-input100"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>

            <div class="wrap-input100" data-validate="Enter a valid email address">
              <input class="input100" type="email" name="email" placeholder="Email" required>
              <span class="focus-input100"></span>
              <span class="symbol-input100"><i class="fa fa-envelope" aria-hidden="true"></i></span>
            </div>

            <div class="wrap-input100" data-validate="Enter your phone number">
              <input class="input100" type="tel" name="phoneNumber" placeholder="Phone Number" required>
              <span class="focus-input100"></span>
              <span class="symbol-input100"><i class="fa fa-phone" aria-hidden="true"></i></span>
            </div>

            <div class="wrap-input100" data-validate="Enter a vaild whatsapp number">
              <input class="input100" type="tel" name="surname" placeholder="Valid whatsapp number" required>
              <span class="focus-input100"></span>
              <span class="symbol-input100"><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
            </div>

            <div class="wrap-input100" data-validate="Password is required">
              <input class="input100" type="password" id="password" name="password" placeholder="Password" onkeyup="return passwordChanged();" required>
              <div class="progress">
              <div class="progress-bar" role="progressbar" id="strength" style="width: 100%; background-color:white; font-size:10px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="focus-input100"></span>
              <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
            </div>              

            <div class="wrap-input100" data-validate="Confirm password is required">
              <input class="input100" type="password" id="cpassword" name="confirm_password" placeholder="Confirm Password" onkeyup="return checkPasswordMatch();" required>
              <div class="progress">
              <div class="progress-bar" role="progressbar" id="mcpassword" style="width: 100%; background-color:white; font-size:10px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="focus-input100"></span>
              <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
            </div>

             <p>By clicking Register button below, you agree to our Terms of Service, Privacy Policy and AML Policy</p>&nbsp;

            <div class="container-login100-form-btn">
            <a class="login100-form-button" href="#"><button  class="login100-form-button" id="send" >Sign up</button></a>
            <button class="login100-form-button" id="load" style="visibility:hidden; " disabled><img id="loading"  src = "indexStyle/images/loading.gif" style="height: 60%;"></button>
           </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="login.php">Login to your account <i class="fa fa-arrow-right m-l-5" aria-hidden="true"></i></a>
            </div>

        </form>
      </div>
    </div>
  </div>
  
  //submit loader
  <script>
function myFunction()
{
document.getElementById("send").disabled = true;
document.getElementById('send').innerHTML = document.getElementById('load').innerHTML;
}
</script>
    
  <script src="indexStyle/vendor/jquery/jquery-3.2.1.min.js"></script>

  <script src="indexStyle/vendor/bootstrap/js/popper.js"></script>
  <script src="indexStyle/vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="indexStyle/vendor/select2/select2.min.js"></script>

  <script src="indexStyle/vendor/tilt/tilt.jquery.min.js"></script>
  <script>
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

<script src="indexStyle/js/main.js"></script>
<script src="indexStyle\js\validate.js"></script>
</body>
</html>

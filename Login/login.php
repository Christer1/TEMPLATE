<!DOCTYPE html>
<html lang="en">
<head>
<title>Login - Naira4coin </title>
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


</head>
<body>
  <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" style="margin-top: 10%;" data-tilt>
            <img src="indexStyle/images/logo.png" alt="LOGO">
          </div>

          <form class="login100-form" onsubmit="myFunction()" autocomplete="off">
            <span class="login100-form-title">Member Login</span>

              <div class="wrap-input100" data-validate="Enter your username">
                <input class="input100" type="text" name="username" placeholder="Username" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100"><i class="fa fa-user" aria-hidden="true"></i></span>
              </div>

              <div class="wrap-input100" data-validate="Password is required">
                <input class="input100" type="password" name="password" placeholder="Password" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100"><i class="fa fa-lock" aria-hidden="true"></i></span>
              </div>

              <div class="container-login100-form-btn">
            <a class="login100-form-button" href="#"><button  class="login100-form-button" id="send" >Sign in</button></a>
            <button class="login100-form-button" id="load" style="visibility:hidden; " disabled><img id="loading"  src = "indexStyle/images/loading.gif" style="height: 60%;"></button>
            </div>

              <div class="text-center p-t-12">
                <a class="txt2" href="forgot_password.php">Forgot password?</a>
              </div>

              <div class="text-center p-t-136">
                <a class="txt2" href="register.php">Create your Account<i class="fa fa-arrow-right m-l-5" aria-hidden="true"></i></a>
              </div>
          </form>
      </div> 
    </div>
</div>

//submit loader 
  <script>
  function myFunction() {
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
</body>
</html>

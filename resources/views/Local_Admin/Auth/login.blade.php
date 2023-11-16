<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--bootsrtap css-->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!--css-->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>تسجيل دخول</title>
</head>
<body>

  <div class="login">
    <div class="title"> 
      <nav class="navbar1">
        <ul>
          <li><a href="#">تواصل معنا</a></li>
          <li><a href="#">من نحن</a></li>
          <li><a href="#">تسجيل دخول</a></li>
          <li><a href="../index.html">الصفحة الرئيسية</a></li>  
        </ul>
      </nav> 
    <div class="card">
     <div class="inner-box" id="card">
      <div class="card-front">
        <h2>LOGIN</h2>
         <form action="{{route('ladmin.store.login')}}" method="POST">
          @csrf
          <input type="email" class="input-box" placeholder="your email" name="email" required>
          <input type="password" class="input-box" placeholder="password" name="password" required>
          <button type="submit" class="submit-btn">login</button>

          <input type="checkbox"> <span>Remember Me</span>
         </form>


         <button type="button" class="btn1" onclick="openRegister()"> create account </button>
         <a href="">forget password</a>
      </div>
      <div class="card-back">
        <h2>Create Account</h2>
        <form action="" method="post">
          <input type="text" class="input-box" placeholder="Your Name" required>
         <input type="email" class="input-box" placeholder="Your Email" required>
         <input type="password" class="input-box" placeholder="password" required>
         <input type="password" class="input-box" placeholder="confirm password" required>
        <a href="#"> <button type="submit" class="submit-btn">Register Now</button></a> 
         <input type="checkbox"> <span>Remember Me</span>
        </form>
        <button type="button" class="btn1" onclick="openLogin()"> i'v an account </button>
        <a href="">forget password</a>
      </div>
     </div>
    </div>
  </div>  

    <!--bootsrtap js-->
  <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
  <!--js-->
  <script src="{{asset('assets/javascript/main.js')}}"></script>
</body>
</html>

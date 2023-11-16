<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Local Admin </title>
      <!--bootsrtap css-->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <!--css-->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
        <i class='bx bxs-graduation'></i>
      <span class="logo_name">Admin</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#">
            <i class='bx bx-home'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-circle'></i>
            <span class="link_name">Local Admin</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Local Admin</a></li>
          <li><a href="#">University view</a></li>
          <li><a href="#">add a location</a></li>
          <li><a href="#">University archive</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">manage colleges</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">manage colleges</a></li>
          <li><a href="#">Show colleges</a></li>
          <li><a href="#">add college</a></li>
          <li><a href="#">update college</a></li>
          <li><a href="#">delete college</a></li>
          <li><a href="#">show Terms of reference</a></li>
          
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-notepad'></i>
            <span class="link_name">manage Terms of reference</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Terms of reference</a></li>
          <li><a href="#">add </a></li>
          <li><a href="#">update </a></li>
          <li><a href="#">delete </a></li>
          <li><a href="#">show teaching staff </a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">manage teaching staff</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">manage teaching staff</a></li>
          <li><a href="#">add</a></li>
          <li><a href="#">update</a></li>
          <li><a href="#">delete</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-edit-alt'></i>
            <span class="link_name">view event</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">view event</a></li>
          <li><a href="#">add</a></li>
          <li><a href="#">update</a></li>
          <li><a href="#">delete</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-credit-card'></i>
            <span class="link_name">University fees</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">University fees</a></li>
          <li><a href="#">add</a></li>
          <li><a href="#">update</a></li>
          <li><a href="#">delete</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
            <i class='bx bxs-user-voice'></i>
          <span class="link_name">Answer the questions</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Answer the questions</a></li>
        </ul>
      </li>
      
       
     
      <li>
    <div class="profile-details">
     
        <form action="{{route('ladmin.logout')}}" method="POST">
            @csrf
            <button style="border: none; box-shadow: none;   background: transparent;" type="submit" href="{{route('ladmin.logout')}}"><i class='bx bx-log-out' ></i></button>  
          </form>
     
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      
    </div>
  </section>

   <!--bootsrtap js-->
   <script src="{{asset('assets/javascript/bootstrap.bundle.min.js')}}"></script>
   <!--js-->
   <script src="{{asset('assets/javascript/main.js')}}"></script>

</body>
</html>

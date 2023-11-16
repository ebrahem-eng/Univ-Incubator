<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootsrtap css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--css-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>university</title>
   
</head>
<body>
  <div class="container">
    <div class="title">
      <h1>تطبيق حاضن للجامعات السورية </h1> 
      <nav class="navbar1">
        <ul>
          <li><a href="#">تواصل معنا</a></li>
          <li><a href="#">من نحن</a></li>
          <li><a href="html/login.html">تسجيل دخول</a></li>
          <li><a href="#">الصفحة الرئيسية</a></li>  
        </ul>
      </nav> 
        <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="بحث عن الجامعة" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">بحث</button>
            </form>
          </div>
        </nav>

      </div>
      <div class="allcard">
        <!--الجامعة السورية-->
  <div class="card" style="width:18rem; ">
    <a href="{{route('univ.spu')}}"><img class="card-img-top" src="{{asset('assets/img/fblogo.jpg')}}" alt="الجامعة السورية"></a>
    <div class="card-body bg-light text-secondary">
    <a href="{{route('univ.spu')}}"> <h4 class="card-title">الجامعة السورية الخاصة</h4>
     <p class="card-text">الجامعة السورية الخاصة مؤسسة تعليمية خاصة ومستقلة في سورية.
       تأسست الجامعة عام 2006، ومقرها ريف دمشق الجنوبي</p> </a>
      <a href="{{route('univ.spu')}}" class="btn btn-light">معرفة المزيد</a>
    </div> 
  </div>
  <!--الجامعة الدولية-->
    <div class="card" style="width:18rem; ">
    <a href="{{route('univ.iust')}}"><img class="card-img-top" src="{{asset('assets/img/1477910998.png')}}" alt="الجامعة الدولية"></a>
    <div class="card-body bg-light text-secondary">
    <a href="{{route('univ.iust')}}"> <h4 class="card-title">الجامعة الدولية الخاصة</h4>
     <p class="card-text">الجامعة الدولية الخاصة للعلوم والتكنولوجيا،
       جامعة خاصة تأسست عام 2005،
        وتقع في مدينة غباغب في محافظة درعا، سوريا.</p>
     </a>
      <a href="{{route('univ.iust')}}" class="btn btn-light">معرفة المزيد</a>
    </div> 
     </div>
     <!--الجامعة العربية-->
     <div class="card arab" style="width:18rem; ">
      <a href="{{route('univ.aiu')}}"><img class="card-img-top" src="{{asset('assets/img/download (2).jpg')}}" alt="الجامعة العربية"></a>
      <div class="card-body bg-light text-secondary">
      <a href="{{route('univ.aiu')}}"> <h4 class="card-title">الجامعة العربية الدولية</h4>
      <p class="card-text">الجامعة العربية الدولية جامعة سورية خاصة تأسست عام 2005
        تقع في مدينة غباغب في محافظة درعا، سوريا</p>
       
       </a>
        <a href="{{route('univ.aiu')}}" class="btn btn-light">معرفة المزيد</a>
      </div> 
       </div>
       <!--جامعة الرشيد-->
       <div class="card r" style="width:18rem; ">
        <a href="{{route('univ.rpu')}}"><img class="card-img-top" src="{{asset('assets/img/download.jpg')}}" alt=" جامعةالرشيد"></a>
        <div class="card-body bg-light text-secondary">
        <a href="{{route('univ.rpu')}}"> <h4 class="card-title">جامعة الرشيد الخاصة</h4>
         <p class="card-text">تأسست جامعة الرشيد الدولية الخاصة للعلوم و التكنولوجيا بتاريخ 17/6/2007
          تقع في مدينة غباغب في محافظة درعا، سوريا</p>
         
         </a>
          <a href="{{route('univ.rpu')}}" class="btn btn-light">معرفة المزيد</a>
        </div> 
         </div>
         <!--جامعة الشام-->
         <div class="card sham" style="width:18rem; ">
          <a href="{{route('univ.aspu')}}"><img class="card-img-top" src="{{asset('assets/img/Sham_Uni_logo.jpg')}}" alt="جامعة الشام"></a>
          <div class="card-body bg-light text-secondary">
          <a href="{{route('univ.aspu')}}"> <h4 class="card-title">جامعة الشام الخاصة</h4>
           <p class="card-text">جامعة الشام الخاصة هي جامعة سورية خاصة ومقرها مدينة دمشق، 
            أحدثت عام 2011  ولدى الجامعة فرع في مدينة اللاذقية</p> 
      
           
           </a>
            <a href="{{route('univ.aspu')}}" class="btn btn-light">معرفة المزيد</a>
          </div> 
           </div>
           <!--جامعة اليرموك-->
           <div class="card yaemouk " style="width:18rem; ">
            <a href="{{route('univ.ypu')}}"><img class="card-img-top" src="{{asset('assets/img/Yarmouk_Private_University_Logo.png')}}" alt="جامعةاليرموك"></a>
            <div class="card-body bg-light text-secondary">
            <a href="{{route('univ.ypu')}}"> <h4 class="card-title">جامعة اليرموك الخاصة</h4>
             <p class="card-text">جامعة اليرموك الخاصة هي جامعة سورية خاصة  تقع على الطريق الدولي بين دمشق
               و درعا</p> 
             </a>
              <a href="{{route('univ.ypu')}}" class="btn btn-light">معرفة المزيد</a>
            </div> 
             </div>
             <!--جامعة الجزيرة-->
             <div class="card jazeera " style="width:18rem; ">
              <a href="{{route('univ.jpu')}}"><img class="card-img-top" src="{{asset('assets/img/download.png')}}"alt= "جامعةالجزيرة"></a>
              <div class="card-body bg-light text-secondary">
              <a href="{{route('univ.jpu')}}"> <h4 class="card-title">جامعة الجزيرة الخاصة</h4>
               <p class="card-text">جامعة الجزيرة الخاصة هي جامعة سورية خاصة .
                 أُنشأت عام 2007 تقع الجامعة قرب المدخل الغربي لمدينة دير الزور على الطريق 
                 الواصل بين مدينة دير الزور و الرقة.</p>  
               </a>
                <a href="{{route('univ.jpu')}}" class="btn btn-light">معرفة المزيد</a>
              </div> 
               </div>
               <!--جامعة قاسيون-->
               <div class="card qasyoun " style="width:18rem; ">
                <a href="html/qpu.html"><img class="card-img-top" src="{{asset('assets/img/download (1).jpg')}}"alt= "جامعةقاسيون"></a>
                <div class="card-body bg-light text-secondary">
                <a href="html/qpu.html"> <h4 class="card-title">جامعة قاسيون الخاصة</h4>
                 <p class="card-text">جامعة قاسيون الخاصة للعلوم والتكنولوجيا،
                   هي جامعة سورية خاصة، تقع في منطقة جباب على الطريق الدولي بين سورية والأردن</p>   
                 </a>
                  <a href="html/qpu.html" class="btn btn-light">معرفة المزيد</a>
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

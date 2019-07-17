<header> 
  <!-- Nav Bar -->
  <div class="navBar">
    <div class="container-fluid">
      <div class="row">
        <aside class="col-md-4 col-sm-3"> <a href="#" class="logo"><img src="<?php echo Yii::$app->getUrlManager()->createUrl('images/r-logo.png');?>" class="img-responsive hidden-xs"><img src="images/r-logo.png" class="img-responsive hidden-sm hidden-md hidden-lg"></a> </aside>
        <aside class="col-md-8 col-sm-9">
          <div id="cssmenu">
            <ul>
              <li class="active"><a href="#">Write Itinerary </a></li>
              <li><a href="#">Help</a></li></h4>
              <li><a href="#" data-toggle="modal" data-target="#signUp">Sign Up</a></li>
              <li><a href="#" data-toggle="modal" data-target="#login">Log In</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</header>
<!-- Slider Banner -->
<section class="mainSlide">
  <div id="banner" class="owl-carousel owl-theme">
    <div class="item">
      <div class="overLay"></div>
      <img src="<?php echo Yii::$app->getUrlManager()->createUrl('images/slide1.jpg');?>" class="img-responsive"> </div>
    <div class="item">
      <div class="overLay"></div>
      <img src="<?php echo Yii::$app->getUrlManager()->createUrl('images/slide2.jpg');?>" class="img-responsive"> </div>
  </div>
  <div class="smallDevice">
    <h1 class=" ">Find the perfect Trips & Itineraries</h1>
    <p class=" ">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    <a class="open-mypage1"><i class="fa fa-search"></i> Search Here</a> </div>
  <div id="mypage-info1" class="slideForm"> <a href="#" class="up"><i class="fa fa-chevron-up" aria-hidden="false"></i></a>
    <div class="bannerCaption">
      <div class="container">
        <h1 class=" ">Find the perfect Trips & Itineraries</h1>
        <p class=" ">planning for a Vacation, We will find you best and affordable Trip. <b>Search Here</b></p>
        <ul class="filterForm">
          <li>
            <input type="text" placeholder="Continents">
          </li>
          <li>
            <input type="text" placeholder="Select your country ">
          </li>
          <li>
            <input type="text" placeholder="Select your city ">
          </li>
          <li>
            <button>Search</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

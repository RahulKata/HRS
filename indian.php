<?php 
  session_start();

  if(!isset($_SESSION['username']))
  {
    header('location:connect.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Indian</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicons -->
    <link href="./img/logo.png" rel="icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Aclonica|Mansalva|New+Rocker|Rock+Salt&display=swap"
      rel="stylesheet"
    />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Luckiest+Guy'>

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="./css/indian.css" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body onload="startTime()">
    <!--==========================
            Header
       ============================-->
    <header id="header" style="background-color: rgba(6, 12, 34, 0.842);">
      <div class="container">
        <div id="logo" class="pull-left">
          <!-- logo -->
          <h1 style="font-family: 'Rock Salt', cursive;">
            <a href="./index.php">HS<span>R</span></a>
          </h1>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="./index.php">Home</a></li>
            <li class="menu-active"><a href="#">Indian</a></li>
            <li><a href="./foreign.php">Foriegn</a></li>
            <li><a href="./testimonials.php">Testimonials</a></li>
            <li class="connect"><a href="./connect.php">&nbsp;<?php echo $_SESSION['username']; ?></a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->

    <!--==========================
          bon_apetit Section
    ============================-->
    <section id="bon_apetit" class="wow slideInLeft">
      <div class="hero">
        <h1 id="rotate">Bon Appétit <i class="fa fa-exclamation"></i></h1>
      </div>
    </section>

    <!-- bon_apetit -->

    <!--==========================
              options Section
        ============================-->
    <section id="options" class="wow fadeInUp" data-wow-duration="3s">
      <div class="container">
        <h1 id="pick"><i class="fa fa-angle-double-right wow wobble" data-wow-iteration="100"
            data-wow-duration="2s"></i>&nbsp; Take your pick !</h1>
        <ul id="menu">
          <li>
            <a href="#veg" class="wow rotateInDownLeft" data-wow-duration="1s" data-wow-delay="0.3s"><span>Veg</span></a>
          </li>
          <li>
            <a href="#non_veg" class="wow rotateInDownLeft" data-wow-duration="1s"
              data-wow-delay="0.6s"><span>Non-Veg</span></a>
          </li>
          <li>
            <a href="#desserts" class="wow rotateInDownLeft" data-wow-duration="1s"
              data-wow-delay="0.9s"><span>Desserts</span></a>
          </li>
          <li>
            <a href="#drinks" class="wow rotateInDownLeft" data-wow-duration="1s"
              data-wow-delay="1.2s"><span>Drinks</span></a>
          </li>
        </ul>
      </div>
    </section>
    <!-- options -->

 <!--==========================
                  veg Section
 ============================-->
    <section id="veg" class="wow lightSpeedIn" data-wow-duration="2s">
      <div class="container">
      <h1 class="titles">Hey &nbsp; Vegan!</h1>
      <section class="cards">

        
        <article class="card card--1 wow fadeInLeftBig" data-wow-delay="1s">
          <div class="card__info-hover">
            <div class="card__clock-info">
              <svg class="card__clock" viewBox="0 0 24 24">
                <path
                  d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">50 min</span>
            </div>
      
          </div>
          <div class="card__img"></div>
          <a href="./maloo.php" class="card_link">
            <div class="card__img--hover"></div>
          </a>
          <div class="card__info_left">
            <span class="card__category"> Veg</span>
            <h3 class="card__title">Methi Aloo</h3>
          </div>
        </article>
        
      

          <article class="card card--1 wow fadeInLeftBig" data-wow-delay="1s">
            <div class="card__info-hover">
              <div class="card__clock-info">
                <svg class="card__clock" viewBox="0 0 24 24">
                  <path
                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                </svg><span class="card__time">50 min</span>
              </div>
          
            </div>
            <div class="card__img"></div>
            <a href="./maloo.php" class="card_link">
              <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
              <span class="card__category"> Veg</span>
              <h3 class="card__title">Methi Aloo</h3>
            </div>
          </article>
        

        
          <article class="card card--1 wow fadeInLeftBig" data-wow-delay="1s">
            <div class="card__info-hover">
              <div class="card__clock-info">
                <svg class="card__clock" viewBox="0 0 24 24">
                  <path
                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                </svg><span class="card__time">50 min</span>
              </div>
          
            </div>
            <div class="card__img"></div>
            <a href="./maloo.php" class="card_link">
              <div class="card__img--hover"></div>
            </a>
            <div class="card__info_right">
              <span class="card__category"> Veg</span>
              <h3 class="card__title">Methi Aloo</h3>
            </div>
          </article>

        </section>

        <section class="cards" style="margin-top: 5vh;">      
          <article class="card card--x wow fadeInLeftBig" data-wow-delay="1s">
            <div class="card__info-hover">
              <div class="card__clock-info">
                <svg class="card__clock" viewBox="0 0 24 24">
                  <path
                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                </svg><span class="card__time">15 min</span>
              </div>
        
            </div>
            <div class="card__img"></div>
            <a href="#" class="card_link">
              <div class="card__img--hover"></div>
            </a>
            <div class="card__info_left">
              <span class="card__category"> Veg</span>
              <h3 class="card__title">Methi Aloo</h3>
            </div>
          </article>
        
        
        
          <article class="card card--x wow fadeInUpBig" data-wow-delay="1s">
            <div class="card__info-hover">
              <div class="card__clock-info">
                <svg class="card__clock" viewBox="0 0 24 24">
                  <path
                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                </svg><span class="card__time">15 min</span>
              </div>
        
            </div>
            <div class="card__img"></div>
            <a href="#" class="card_link">
              <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
              <span class="card__category"> Veg</span>
              <h3 class="card__title">Methi Aloo</h3>
            </div>
          </article>
        
        
        
          <article class="card card--x wow fadeInRightBig" data-wow-delay="1s">
            <div class="card__info-hover">
              <div class="card__clock-info">
                <svg class="card__clock" viewBox="0 0 24 24">
                  <path
                    d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                </svg><span class="card__time">15 min</span>
              </div>
        
            </div>
            <div class="card__img"></div>
            <a href="#" class="card_link">
              <div class="card__img--hover"></div>
            </a>
            <div class="card__info_right">
              <span class="card__category"> Veg</span>
              <h3 class="card__title">Methi Aloo</h3>
            </div>
          </article>
        
        </section>
      </div>
    </section>
    
<!-- veg -->


<!--==========================
                  non-veg Section
    ============================-->
<section id="non_veg" class="wow flipInY" data-wow-duration="2s">
  <div class="container">
    <h1 class="titles">Hey &nbsp; Non-Vegan!</h1>
    <section class="cards">
  
  
      <article class="card card--x wow fadeInLeftBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>
  
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_left">
          <span class="card__category">Non-Veg</span>
          <h3 class="card__title">Lorem, ipsum.</h3>
        </div>
      </article>
  
  
      <article class="card card--x wow fadeInUpBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>
  
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info">
          <span class="card__category">Non-Veg</span>
          <h3 class="card__title">Lorem, ipsum.</h3>
        </div>
      </article>

  
      <article class="card card--x wow fadeInRightBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>
  
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_right">
          <span class="card__category">Non-Veg</span>
          <h3 class="card__title">Lorem, ipsum.</h3>
        </div>
      </article>
  
    </section>
  
    <section class="cards" style="margin-top: 5vh;">
      <article class="card card--x wow fadeInLeftBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>
  
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_left">
          <span class="card__category">Non-Veg</span>
          <h3 class="card__title">Lorem, ipsum.</h3>
        </div>
      </article>
  
  
  
      <article class="card card--x wow fadeInUpBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>
  
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info">
          <span class="card__category">Non-Veg</span>
          <h3 class="card__title">Lorem, ipsum.</h3>
        </div>
      </article>
  
  
  
      <article class="card card--x wow fadeInRightBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>
  
        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_right">
          <span class="card__category">Non-Veg</span>
          <h3 class="card__title">Lorem, ipsum.</h3>
        </div>
      </article>
  
    </section>
  </div>
</section>

<!-- non-veg -->

<!--==========================
                  desserts Section
    ============================-->
<section id="desserts" class="wow fadeInLeft" data-wow-duration="2s">
  <div class="container">
    <h1 class="titles">Hey &nbsp; Dessert &nbsp; lover!</h1>
    <section class="cards">

      <article class="card card--x wow fadeInLeftBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>

        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_left">
          <span class="card__category"> Dessert</span>
          <h3 class="card__title">Lorem ipsum</h3>
        </div>
      </article>



      <article class="card card--x wow fadeInUpBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>

        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info">
          <span class="card__category"> Dessert</span>
          <h3 class="card__title">Lorem ipsum</h3>
        </div>
      </article>



      <article class="card card--x wow fadeInRightBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>

        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_right">
          <span class="card__category"> Dessert</span>
          <h3 class="card__title">Lorem ipsum</h3>
        </div>
      </article>

    </section>
  </div>
</section>

<!-- Desserts -->

<!--==========================
                  drinks Section
    ============================-->
<section id="drinks" class="section-with-bg wow fadeInRight" data-wow-duration="2s">  
  <div class="container">
    <h1 class="titles">Let's &nbsp; grab &nbsp; a &nbsp; drink!</h1>
    <section class="cards">

      <article class="card card--x wow fadeInLeftBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>

        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_left">
          <span class="card__category"> Beverage</span>
          <h3 class="card__title">Lorem ipsum</h3>
        </div>
      </article>



      <article class="card card--x wow fadeInUpBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>

        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info">
          <span class="card__category"> Beverage</span>
          <h3 class="card__title">Lorem ipsum</h3>
        </div>
      </article>



      <article class="card card--x wow fadeInRightBig" data-wow-delay="1s">
        <div class="card__info-hover">
          <div class="card__clock-info">
            <svg class="card__clock" viewBox="0 0 24 24">
              <path
                d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
            </svg><span class="card__time">15 min</span>
          </div>

        </div>
        <div class="card__img"></div>
        <a href="#" class="card_link">
          <div class="card__img--hover"></div>
        </a>
        <div class="card__info_right">
          <span class="card__category"> Beverage</span>
          <h3 class="card__title">Lorem ipsum</h3>
        </div>
      </article>

    </section>
  </div>
</section>

<!-- Drinks -->

  <!--==========================
      Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
  
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="./img/logo.png" alt="HSR">
            <p><i class="fa fa-copyright"></i> <strong>Healthy and Sumptuous Recipes</strong>
              <hr class="style">
              This website is solely for project purpose and includes modified code snippets from various resources.The
              recipes included in this website are directly taken from online resources.</p>
          </div>
  
          <div class="col-lg-6 col-md-6 wrapper">
            <script src='https://codepen.io/juliangarnier/pen/75efae7724dbc3c055e918057fc4aca5.js'></script>
          </div>
  
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>About Us</h4>
            <p>
              Students of Section I, <br>
              PES University,<br>
              Bangalore<br> <br>
            </p>
  
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
  
          </div>
  
        </div>
      </div>
    </div>
  
  <div class="time">
    <!-- <i class="fa fa-clock-o fa-2x"></i> &nbsp; &nbsp; <span id="clock"></span> -->
    <i class="fa fa-laptop fa-2x"></i> &nbsp; &nbsp;<span id="screen_time"></span> &nbsp; seconds
  </div>
  </div>
  </footer>
  <!-- #footer -->
  
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
  
  <!-- Template Main Javascript File -->
  <script src="./js/main.js"></script>
  <script src="./js/indian.js"></script>
  </body>
  
  </html>
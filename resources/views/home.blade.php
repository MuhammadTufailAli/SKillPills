<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/ea5203c200.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Project</title>
  <link rel="stylesheet" href="/css/LabProject.css" />

</head>

<body>
  <div class="containerofall">
    <!--Title bar and navigation bar div-->
    <div id="con" style="width: 100%; position: fixed; top: 0%">
      <h2 class="title">
        <i class="fas fa-book" style="color: white"></i> SkillsPills.com
        <i class="fas fa-book-open" style="color: white"></i>
      </h2>
      <!--Navigation bar-->
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="nav-bar-brand" href="#">
          <img src="Images/images.png" alt="studing img" style="height: 40px; width: 41px; border-radius: 12px" />
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="navbar-nav nav-pills">
            <li class="nav-item">
              <a style="font-weight: bold" class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#coursepointer">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#newspointer">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Howitworks">Working</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contactus">ContactUs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/signin">Sign in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Signup">Sign up </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--Welcome part plus image-->
    <div style="margin-top: 122px">
      <h1 style="color: black; text-align: center">
        Welcome to Skills<i><span style="color: orangered">Pills</span></i>
      </h1>
      <p style="color:black; text-align: center">
        The best learning website
      </p>
    </div>

    <!--Slider images-->
    <div class="slider">
      <div class="slides">
        <!--Radio button-->
        <input type="radio" name="radio-btb" id="radio1">
        <input type="radio" name="radio-btb" id="radio2">
        <input type="radio" name="radio-btb" id="radio3">
        <input type="radio" name="radio-btb" id="radio4">
        <!--Radio button ends-->

        <!--Slide image-->
        <div class="slide first">
          <img src="Images/1.png" alt="">
        </div>

        <div class="slide">
          <img src="Images/2.png" alt="">
        </div>

        <div class="slide">
          <img src="Images/3.png" alt="">
        </div>

        <div class="slide">
          <img src="Images/4.png" alt="">
        </div>
        <!--Slide image ends-->

        <!--Automatic navi-->

        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--Automatic navi ends-->

      </div>
      <!--manual nav-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>


    </div>
    <div id="coursepointer">
      <br>
      <br>
      <br>
    </div>



    <!--Courses div-->
    <div class="jumbotron">
      <div class="row">
        <div class="col-9">
          <h2 style="color: black; margin-left: 10px;" id="courses"><span style="color: orangered">P</span>OPULAR <span style="color: orangered">C</span>OURSES</h2>

        </div>
        <div class="col-3">
          <button style="background-color:orangered ;border-radius: 5px; float: right; margin-top: 10px;"><a style="color: white; text-decoration: none;" href="/courses">VIEW DETAILS</a></button>
        </div>
      </div>
      <div class="courses">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="Images/Ai.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h3 style="text-align: center;">AR<span style="color: orangered">TI</span>FIC<span style="color: orangered">AL</span> INTE<span style="color: orangered">LL</span>IGEN<span style="color: orangered">CE</span></h2>
                  <p class="icon">
                    <i style="color: black;" class="fas fa-user"></i> 172345
                  </p>
                  <p class="icon">
                    <a class="viewdetail" href="">VIEW DETAILS</b></a>
                  </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="Images/web.jpg" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h3 style="text-align: center;">WE<span style="color: orangered">B</span> DEV<span style="color: orangered">EL</span>OPME<span style="color: orangered">NT</span></h2>
                  <p class="icon">
                    <i style="color: black;" class="fas fa-user"></i> 15324
                  </p>
                  <p class="icon">
                    <a class="viewdetail" href="">VIEW DETAILS</b></a>
                  </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="Images/python.jpg" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h3 style="text-align: center;">PY<span style="color: orangered">T</span>HO<span style="color: orangered">N</span></h2>
                  <p class="icon">
                    <i style="color: black;" class="fas fa-user"></i> 272515
                  </p>
                  <p class="icon">
                    <a class="viewdetail" href="">VIEW DETAILS</b></a>
                  </p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="Images/java.jpg" alt="Fourth slide">
              <div class="carousel-caption d-none d-md-block">
                <h3 style="text-align: center;">J<span style="color: orangered">A</span>V<span style="color: orangered">A</span></h2>
                  <p class="icon">
                    <i style="color: black;" class="fas fa-user"></i> 213421
                  </p>
                  <p class="icon">
                    <a class="viewdetail" href="">VIEW DETAILS</b></a>
                  </p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!--
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <img class="center" src="Images/Ai.jpg" alt="">
            <h3 style="text-align: center;">AR<span style="color: orangered">TI</span>FIC<span style="color: orangered">AL</span> INTE<span style="color: orangered">LL</span>IGEN<span style="color: orangered">CE</span></h2>
            <p class="icon" >
              <i style="color: black;" class="fas fa-user"></i>  172345
            </p>
            <p class="icon" >
            <a class="viewdetail" href="">VIEW DETAILS</b></a></p>
            
           
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <img class="center" src="Images/web.jpg" alt="">
            <h3 style="text-align: center;">WE<span style="color: orangered">B</span> DEV<span style="color: orangered">EL</span>OPME<span style="color: orangered">NT</span></h2>
            <p class="icon" >
              <i style="color: black;" class="fas fa-user"></i>  15324
            </p>
            <p class="icon" >
            <a class="viewdetail" href="">VIEW DETAILS</b></a></p>
            
           
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <img class="center" src="Images/python.jpg" alt="">
            <h3 style="text-align: center;">PY<span style="color: orangered">T</span>HO<span style="color: orangered">N</span></h2>
            <p class="icon" >
              <i style="color: black;" class="fas fa-user"></i>  272515
            </p>
            <p class="icon" >
            <a class="viewdetail" href="">VIEW DETAILS</b></a></p>
            
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
            <img class="center" src="Images/java.png" alt="">
            <h3 style="text-align: center;">J<span style="color: orangered">A</span>V<span style="color: orangered">A</span></h2>
            <p class="icon" >
              <i style="color: black;" class="fas fa-user"></i>  213421
            </p>
            <p class="icon" >
            <a class="viewdetail" href="">VIEW DETAILS</b></a></p>
           
          </div>
          
        </div>
      -->
      </div>
    </div>
  </div>
  <div id="newspointer">
    <br>
    <br>
    <br>
  </div>
  <!--New and events-->
  <div class="jumbotron">
    <div class="row">
      <div class="col-9">
        <h2 style="color: black; margin-left: 10px;" id="courses"><span style="color: orangered">N</span>EWS & <span style="color: orangered">E</span>VENTS</h2>

      </div>
      <div class="col-3">
        <button style="background-color:orangered ;border-radius: 5px; float: right; margin-top: 10px;"><a style="color: white; text-decoration: none;" href="/news">VIEW DETAILS</a></button>
      </div>
    </div>

    <div id="news" class="news">
      <div class="row">
        <div class="col-lg-3 col-12">
          <img class="newsimg" src="Images/batch1.png" alt="">
        </div>
        <div class="col-lg-9 col-12">
          <h4>7th Batch of SkillsPills.com has commenced on june 1st,2021</h4>
          <p>Lorem ipsum dolor sit amet, etur itaque doloribus facere, sdasd sadksd aut dolore dicta.</p>
          <p class="newsicon"><i class="far fa-calendar-alt"> Published on: 01 June 2021 </i></p>
        </div>
      </div>
    </div>
    <br>

    <div class="news">
      <div class="row">
        <div class="col-lg-3 col-12">
          <img class="newsimg" src="Images/batch2.jpg" alt="">
        </div>
        <div class="col-lg-9 col-12">
          <h4>6th Batch of SkillsPills.com has commenced on june 1st,2020</h4>
          <p>Lorem ipsum dolor sit amet, etur itaque doloribus facere, sdasd sadksd aut dolore dicta.</p>
          <p class="newsicon"><i class="far fa-calendar-alt"> Published on: 01 June 2020 </i></p>
        </div>
      </div>
    </div>
    <br>
    <div class="news">
      <div class="row">
        <div class="col-lg-3 col-12">
          <img class="newsimg" src="Images/batch3.jpg" alt="">
        </div>
        <div class="col-lg-9 col-12">
          <h4>5th Batch of SkillsPills.com has commenced on june 1st,2019</h4>
          <p>Lorem ipsum dolor sit amet, etur itaque doloribus facere, sdasd sadksd aut dolore dicta.</p>
          <p class="newsicon"><i class="far fa-calendar-alt"> Published on: 01 June 2019 </i></p>
        </div>
      </div>
    </div>

  </div>

  <!--Footer-->
  <div class='container-fluid'>
    <div class="card">
      <div class="heading text-center">
        <div class="head1">SKILLSPILLS.com</div>
        <p class="bdr"></p>
      </div>
      <div class="card-body">
        <div class="row m-0 pt-5">
          <div class="card col-12 col-md-3">
            <div class="card-content"> <i class="fas fa-hand-holding-usd fa-3x"></i>
              <div class="card-title"> YOUR MONEY IS IN SAFE HANDS </div>
              <p><small>You are spending your money on right place</small></p>
              <div class="learn-more">
                <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
              </div>
            </div>
          </div>
          <div class="card col-12 col-md-3">
            <div class="card-content"> <i class="far fa-handshake fa-3x"></i>
              <div class="card-title"> OUR AGGRIMENT </div>
              <p><small>WE will help you through out the course</small></p>
              <div class="learn-more">
                <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
              </div>
            </div>
          </div>
          <div class="card col-12 col-md-3">
            <div class="card-content"> <i class="fas fa-mobile-alt fa-3x"></i>
              <div class="card-title"> ONLINE LEARNING </div>
              <p><small>Learning sources will be availible online</small></p>
              <div class="learn-more">
                <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
              </div>
            </div>
          </div>
          <div class="card col-12 col-md-3">
            <div class="card-content"> <i class="fas fa-user-secret fa-3x"></i>
              <div class="card-title"> STAY<br /> SECURE </div>
              <p><small>All your data will be secured</small></p>
              <div class="learn-more">
                <p> <small> LEARN MORE <label><i class="fas fa-angle-right"></i></label> </small> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer row m-0">
        <p> <label> <i class="fas fa-phone fa-rotate-90 text-primary"></i> </label> +923423452331</p>
        <div>
          <p> <small class="follow-text">FOLLOW US ON SOCIAL MEDIA</small> <label class="footer-right"> <i class="fab fa-instagram"></i> <i class="fab fa-facebook-square"></i> <i class="fab fa-linkedin"></i> <i class="fab fa-twitter-square"></i> </label> </p>
        </div>
      </div>
    </div>
  </div>

  </div>

  <script src="/js/home.js"></script>
</body>

</html>
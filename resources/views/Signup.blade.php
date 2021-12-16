<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/ea5203c200.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/js/Signup.js"></script>
  <link rel="stylesheet" href="/css/Signup.css" />
  <title>Signup</title>
</head>

<body>
  <div style="width: 100%; position: fixed; top: 0%" id="con">
    <h2 class="title">
      <i class="fas fa-book" style="color: white"></i> SkillsPills.com
      <i class="fas fa-book-open" style="color: white"></i>
    </h2>
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
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/courses">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/news">News</a>
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
            <a style="font-weight: bold" class="nav-link active" href="/Signup">Sign up </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>


  <h1 style="padding-top: 120px; text-align: center; margin-top: 30px">SIGN UP</h1>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="signupbox">
          <form action="/Signup" method="POST">
            @csrf
            <div class="form-group">

              <label class="control-label" for="firstname">First Name</label>
              <input type="text" name="firstname" onkeypress="AllowOnlyText(event)" maxlength="50" class="form-control fontAwesome" placeholder="&#xf007; Please enter your first name">
            </div>

            <div class="form-group">
              <label class="control-label" for="lastname">Last Name</label>
              <input type="text" name="lastname" onkeypress="AllowOnlyText(event)" maxlength="50" class="form-control fontAwesome" placeholder="&#xf007; Please enter your last name">
            </div>

            <div class="form-group">
              <label class="control-label" for="email">Email address</label>
              <input id="em" type="Email" name="email" maxlength="50" class="form-control fontAwesome" placeholder="&#xf0e0; Please enter valid email address" onkeyup="validateemail()">
            </div>
            <span id="result2" class="inputerror1" style="color: red; display: inline;"></span>

            <div class="form-group">
              <label class="control-label" for="password">Password</label>
              <input id="pass" type="password" name="password" maxlength="16" class="form-control fontAwesome" placeholder="&#xf023; 7-16 characters having alphabets and numbers" onkeyup="validatepass()">
              <span id="result3" class="inputerror2" style="color: red; display: inline;"></span>
              <span class="eye-changepassword">
                <i class="fa fa-eye" type="button" id="eye" onclick="showpass()">

                </i>

              </span>
              </span>
            </div>
            <div class="form-group">
              <button class="primary"><b>Submit<b></button>
            </div>

            <div class="form-group">
              <h3 class="heading3">Already Have an account? <a href="#signin" class="signinbutton">Sign In</a></h3>

            </div>


          </form>
        </div>
      </div>
    </div>
  </div>


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


</body>

</html>
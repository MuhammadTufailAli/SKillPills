<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/ea5203c200.js"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/contactus.js"></script>
    <link rel="stylesheet" href="/css/contactus.css" />
    <title>Project</title>
  </head>
  <body>
    <div>
      <div style="width: 100%; position: fixed; top: 0%" id="con">
        <h2 class="title">
          <i class="fas fa-book" style="color: white"></i> SkillsPills.com
          <i class="fas fa-book-open" style="color: white"></i>
        </h2>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
          <a class="nav-bar-brand" href="#">
            <img
              src="Images/images.png"
              alt="studing img"
              style="height: 40px; width: 41px; border-radius: 12px"
            />
          </a>
          <button
            class="navbar-toggler"
            data-toggle="collapse"
            data-target="#navbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="navbar-nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="/home"
                  >Home</a
                >
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
                <a style="font-weight: bold" class="nav-link active" href="/contactus">ContactUs</a>
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


      <h1 style="padding-top: 120px;margin-top: 30px;text-align: center;">Send Us Your Query</h1>
      <br>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
              <input id="firstname" type="text" name="" value="" placeholder="your first name*" class="form-control" onkeypress="AllowOnlyText(event)">
            </div>
            <div class="form-group">
              <input type="text" name="" value="" placeholder="your last name*" class="form-control" onkeypress="AllowOnlyText(event)">
            </div>
            <div class="form-group">
              <input id="pn" type="text" name="phonenumber"  maxlength="11" value="" placeholder="your mobile number* Example: 03311223344" class="form-control" onkeypress="isInputNumber(event)" onkeyup="validatepn()">
              <span id="result1" class="inputerror" style="color:Red;"></span>
            </div>
            <div class="form-group">
              <input id="em" type="email" name="" value="" placeholder="your Email*" class="form-control" onkeyup="validateemail()">
              <span id="result2" class="inputerror1" style="color:Red;"></span>
            </div>
            <div class="form-group">
              <select style="width: 100%; height: 40px">
                <option selected="selected" value="-1">Query Related to</option>
                <option value="2">Courses</option>
                <option value="3">Videos</option>
                <option value="4">General</option>
                <option value="5">Sign Up</option>
              </select>
            </div>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
              <input type="text" name="" value="" placeholder="type your subject/refernce here*" class="form-control">
            </div>
            <div class="form-group">
              <textarea rows="2" cols="20" placeholder="Enter details here" class="form-control-textarea"></textarea>
            </div>
             <div class="form-group">
              <button class="primary"><b>Submit<b></button>
            </div>
          </div>


          
        </div>

        <div class="row" style="margin-top: 30px">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="firstadr">
                <span class="tg-icon fa fa-location-arrow" style="color: white"></span>
                  
                  <address style="width:70%; margin-left:10%; color: white">Block B, PHASE 1, JINNAH GARDENS, ISLAMABAD
                 
                  </address>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="secondadr">
                <span class="tg-icon fa fa-phone" style="color: white"></span> <address style="width:70%; margin-left:10%; color: white">0335-808-4831<br><br></address>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="thirdadr">
                    <span class="tg-icon fa fa-envelope-o" style="color: white"></span> 
                    <address style="width:70%; margin-left:10%; color: white">
                        For General Queries: info@skillspills.pk<br>
                        For Technical Queries: tech_support@skillspills.pk</address>
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

  <script>
    
  </script>
      
  </body>
</html>

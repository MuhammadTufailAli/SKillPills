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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/js/signin.js"></script>
  <link rel="stylesheet" href="/css/signin.css" />
  <title>Signin</title>
</head>

<body>
  <div>
    <div class="form" style="padding: 0px; min-width: 300px">
      <div style="background-color: #222d32">
        <div class="outer-login"></div>
        <div class="col-xs-12 logo">
          <div class="skills-logo">
            <img src="Images/LOGOskillspills.png" class="img-responsive skill-logo" />
          </div>
          <span style="
                color: #fff;
                font-size: 27px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                  'Trebuchet MS', sans-s;
              ">Learning Management System</span>
        </div>
      </div>

      <div style="padding: 30px">
        <span class="info" style="font-size: 14px; font-weight: bold; letter-spacing: -0.5">Please Sign in with your skillspills account.</span>
        <br />
        <br />

        <span style="float: right;">
          <span id="result1" style="color: red; font-size: 9pt; display: inline"></span>
        </span>
        <div id="search_suggest"></div>
        <form action="/signin" method="POST">
          @csrf

          <input id="em" type="text" onkeyup="searchsuggest();" name="email" maxlength="75" tabindex="1" class="forminput" placeholder="Email Address" />

          <br />
          <span class="c-pass">
            <input type="password" name="password" maxlength="16" tabindex="2" class="forminput fontAwesome1" placeholder="Password" id="pass" />
            <span class="eye-changepassword">
              <i class="fa fa-eye" type="button" id="eye" onclick="showpass()">

              </i>

            </span>
          </span>
          <br />
          <div id="recap"></div>
          <div class="pull-left">
            <span class="text">
              <input type="checkbox" name="cbAlwaysLogin" style="line-height: normal; margin-left: 4px; margin-top: 4px" />
              <label>keep me logged in ?</label>
            </span>
          </div>

          <br />
          <br />
          <button tabindex="3" class="btn formbutton" style="background-color: #5cb85c"><i class=""></i>Sign In</button>

          <br />
          <br />
        </form>

        <a tabindex="4" href="" style="float: left">
          <span style="
                color: #8f0f10;
                text-decoration: underline;
                padding-left: 5px;
                font-weight: bold;
                font-family: Tahoma, verdana;
                font-size: 10px;
              ">Forgot Password?</span>
        </a>
        <a style="float: right" href="/Signup" tabindex="5">
          <span style="
                color: #337ab7;
                text-decoration: underline;
                padding-left: 5px;
                font-weight: bold;
                font-family: Tahoma, verdana;
                font-size: 10px;
              ">Not Registered? Sign up</span>
        </a>
        <?php
        if (empty($error)) {
        } else {
          echo $error;
        }
        ?>
        <br />
        <br />

      </div>
    </div>
  </div>

  <div id="bigtufail" style="display: block;">

    <div class="d-none d-lg-block">
      <div class="firstdiv">
        <a href="#0" class="cd-btn" style="visibility: hidden">
          <img id="tufail" src="Images/tufail.png" class="img-responsive" /></a>
      </div>
      <div class="seconddiv seconddiv1" style="visibility: visible;transition: visibility 0s 0s;">
        <div class="thirddiv">
          <button href="" class="firsta" type="buton" onclick="CloseTufail()">Close</button>
        </div>
        <div class="fourthdiv">
          <div class="fifthdiv">
            <div class="pops-msgs">
              <a href="" style="color: #fff">
                <img src="Images/videoicon.png" class="img-responsive" />
                <div class="infomsg">How to use LMS?</div>
              </a>
            </div>
            <div class="robottufail">
              <img src="Images/tufail.png" class="img-responsive" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
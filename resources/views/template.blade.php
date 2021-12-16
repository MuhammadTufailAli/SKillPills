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
    <link rel="stylesheet" href="/css/template.css" />


    <title>@yield('title')</title>

</head>

<body class="skin-blue sidebar-mini sidebar-collapse" style="height: auto">

    <div class="wrapper" style="height: auto">
        <header class="main-header">
            <a class="sidebar-toggle hidden-sm hidden xs" id="mybtn">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle hidden-lg hidden-md">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="outer-logo-area col-md-3">
                    <div class="inner-logo-area">
                        <a href="#" class="skill-logo col-lg-2">
                            <img src="Images/LOGOskillspills.png">
                        </a>
                    </div>
                </div>
                <a href="#" style="display: none;" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <span id="header_text" class="logo-lg col-lg-6 col-md-5 col-sm-4 col-xs-6" style="position: relative;display: block;color: white;margin-left: 5px;font-family: &quot;Gill Sans&quot;, &quot;Gill Sans MT&quot;, Calibri, &quot;Trebuchet MS&quot;, sans-serif;vertical-align: middle;">&nbsp;Learning Management System
                </span>

                <div class="navbar-custom-menu col-sm-3 col-md-3 col-lg-2">
                    <div class="row">
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown user user-menu">
                                <a class="dropdown-toggle" onclick="showdropdownmenu()">
                                    <img class="user-image" src="Images/male_avatar.png" style="border-width:0px;">
                                    <span class="d-none d-lg-block">SYED ASJAD ALAM</span>
                                </a>



                            <li>
                                <a href="#"><i class="fa fa-gears"></i></a>
                            </li>
                            </li>

                        </ul>

                    </div>
                </div>

            </nav>
        </header>

        <div class="showside" id="pata">
            <a href="/userinterface" id="masla1">
                <i class="fa fa-home">

                </i>
                <span>Home</span>
            </a>
            <a href="/profile">
                <i class="fa fa-user">

                </i>
                <span>My Profile</span>
            </a>
            <a href="/progress">
                <i class="fa fa-line-chart">

                </i>
                <span>Progress Timeline</span>
            </a>
            <a href="/notes">
                <i class="fa fa-file-text">

                </i>
                <span>My Notes</span>
            </a>
            <a href="/onlinesupport">
                <i class="fa fa-support">

                </i>
                <span>Online Support</span>
            </a>
            <a href="/changepassword">

                <span style="color: #ADD8E6; margin-left: 20px;padding-top: 5px">Change Password</span>
            </a>
            <a href="/deleteaccount">

                <span style="color: red; margin-left: 20px;">Delete account</span>
            </a>

        </div>


        <div id="mySidebar" class="main-sidebar">
            <section class="sidebar" style="height: auto;">
                <ul id="sdbm" class="sidebar-menu">
                    <li>
                        <a href="/userinterface">
                            <i class="fa fa-home">

                            </i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/profile">
                            <i class="fa fa-user">

                            </i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="/progress">
                            <i class="fa fa-line-chart">

                            </i>
                            <span>Progress Timeline</span>
                        </a>
                    </li>
                    <li>
                        <a href="/notes">
                            <i class="fa fa-file-text">

                            </i>
                            <span>My Notes</span>
                        </a>
                    </li>
                    <li><a href="/onlinesupport">
                            <i class="fa fa-support">

                            </i>
                            <span>Online Support</span>
                        </a></li>

                </ul>

            </section>

        </div>

        <div class="dropdownmenu" id="hid" style="visibility: hidden;">
            <ul>
                <li>
                    <p>
                        <img src="Images/male_avatar.png" style="border-radius: 50%;height: 90px;width: 90px;border: 3px solid;margin-left: 60px;"><br>
                        <span style="color: white;font-size: 17px; margin-left: 25px">SYED ASJAD ALAM</span>
                        <small style="color: white;font-size: 13px; margin-left: 25px;">asjadakmal1@gmail.com</small><br>
                        <small style="color: white;font-size: 13px; margin-left: 75px">Batch 1</small>
                    </p>
                </li>

                <li style="background-color: white;width: 210px">
                    <a href="/profile" style="float: left; font-size: 15px;color: black;border: 1px solid;height: 36px;padding-top: 7px;background-color: #00AEEF;"><b>My Profile</b></a>
                    <a href="/signout" style="float: right; font-size: 15px;color: black;border: 1px solid;height: 36px;padding-top: 7px;background-color: #00AEEF"><b>Sign Out</b></a>

                </li>
            </ul>
        </div>

        <div class="content-wrapper courses-default" style="min-height: 338px">
            @yield('content')
            <!--Start entering from here-->

        </div>







    </div>


    <script src="/js/template.js"></script>


</body>

</html>
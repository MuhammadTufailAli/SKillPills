<?php
Session();
?>
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
    <link rel="stylesheet" href="/css/profile.css" />

    <title>Profile</title>
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

                                    @if(Session()->has('user'))
                                    <span class="d-none d-lg-block">{{Session()->get('user')[0]->firstname . " " . Session()->get('user')[0]->lastname}}</span>
                                    @else
                                    <span class="d-none d-lg-block">My Account</span>
                                    @endif

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

        <!--Change password-->


        <div class="showside" id="pata">
            <a href="/userinterface" id="masla1">
                <i href="/userinterface" class="fa fa-home">

                </i>
                <span>Home</span>
            </a>
            <a href="">
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
                <i href="/notes" class="fa fa-file-text">

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
                        <a href="">
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

                        @if (\Session::has('name'))
                        <span style="color: white;font-size: 17px; margin-left: 25px">{!! \Session::get('name') !!}</span>
                        @endif


                        @if (\Session::has('name'))
                        <small style="color: white;font-size: 13px; margin-left: 25px;">{!! \Session::get('name') !!}@gmail.com</small><br>
                        @endif

                        <small style="color: white;font-size: 13px; margin-left: 75px">Batch 1</small>
                    </p>
                </li>

                <li style="background-color: white;width: 210px">
                    <a href="" style="float: left; font-size: 15px;color: black;border: 1px solid;height: 36px;padding-top: 7px;background-color: #00AEEF;"><b>My Profile</b></a>
                    <a href="/signout" style="float: right; font-size: 15px;color: black;border: 1px solid;height: 36px;padding-top: 7px;background-color: #00AEEF"><b>Sign Out</b></a>

                </li>
            </ul>
        </div>
        <div class="content-wrapper courses-default" style="min-height: 338px;max-height: auto">
            <section class="content-header">
                <h1>My Profile
                    <small>&nbsp;</small>
                </h1>
                <span class="breadcrumb">
                    <span class="fa fa-home margin1">
                        <a href="" style="font-family: 'Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif; font-weight:400">
                            &nbsp;Home
                        </a>
                    </span>
                    <span>
                        <span class="fas fa-caret-right">

                        </span>
                    </span>
                    <span class="fa fa-book margin">
                        <span style="font-family: 'Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif; font-weight:400">
                            &nbsp;My Profile</span>

                    </span>

                </span>
                <br>
                <br>

            </section>
            <form action="/profile" method="POST">
                @csrf

                <section id="main" class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box box-primary">
                                <div class="box-body box-profile">
                                    <div id="profileImage">
                                        <img src="Images/male_avatar.png" class="profile-user-img img-responsive img-circle">
                                        <div id="overlay">
                                            <span>
                                                <i style="color: #fff; position: relative; top: 55px;" class="fa fa-camera"></i>
                                            </span>

                                        </div>
                                    </div>

                                    @if (\Session::has('name'))

                                    <h3 class="profile-username text-center">{!! \Session::get('name') !!}</h3>
                                    @endif


                                    <div class="box-footer no-padding">
                                        <div class="box-body">
                                            <dl>
                                                <dt>
                                                    <strong style="font-size: 15px"><i class="fa fa-book margin-r-5"></i>Education</strong>
                                                </dt>
                                                <dd>Inter - Computer Science</dd>
                                                <dt>

                                                    <strong style="font-size: 15px"><i class="fa fa-envelope margin-r-5"></i>Email</strong>
                                                </dt>
                                                @if(Session()->has('user'))
                                                <span class="d-none d-lg-block">{{Session()->get('user')[0]->email}}</span>
                                                @else
                                                <span class="d-none d-lg-block">My Account</span>
                                                @endif


                                            </dl>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-9">
                            <div class="nav-tabs-custom">
                                <div class="tab-content">
                                    <div class="active tab-pane">
                                        <div class="post margin">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label>Fields marked with an [<span class="text-red">*</span>] are required</label>
                                                    <div class="panel-group">
                                                        <div class="panel panel-default" role="tablist">
                                                            <div class="panel-heading" role="tab">
                                                                <h4 class="panel-title">
                                                                    <a id="minus" class="" aria-expanded="true" onclick="switchclass()">Personal Information</a>
                                                                </h4>
                                                            </div>

                                                            <div id="myDiv" class="panel-colapse colapse in" role="tabpanel" aria-expanded="true">
                                                                <div class="panel-body">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label>
                                                                                <b>
                                                                                    <span class="text-red">*</span>First Name
                                                                                </b>
                                                                            </label>
                                                                            <input value="{{$fname}}" name="studentfname" type="text" maxlength="50" class="form-control" style="height: 45px;" onkeypress="AllowOnlyText(event)">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label>
                                                                                <b>
                                                                                    Middle Name
                                                                                </b>
                                                                            </label>
                                                                            <input value="{{$mname}}" name="studentmname" type="text" maxlength="50" class="form-control" style="height: 45px;" onkeypress="AllowOnlyText(event)">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label>
                                                                                <b>
                                                                                    <span class="text-red">*</span>Last Name
                                                                                </b>
                                                                            </label>
                                                                            <input value="{{$lname}}" name="studentlname" type="text" maxlength="50" class="form-control" style="height: 45px;" onkeypress="AllowOnlyText(event)">
                                                                        </div>

                                                                    </div>


                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <label>
                                                                                <span class="text-red">*</span>Gender
                                                                            </label>

                                                                        </div>

                                                                    </div>
                                                                    <div class="row margin" style="margin-top: -10px">
                                                                        <div class="col-md-12">
                                                                            <table border="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            @if($gender === "Male")
                                                                                            <input name="studentgender" id="Male" type="radio" name="gender" value="Male" checked>
                                                                                            <label>Male&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="studentgender" id="Female" type="radio" name="gender" value="Female">
                                                                                            <label>Female&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="studentgender" id="X-gender" type="radio" name="gender" value="X-gender">
                                                                                            <label>X-gender&nbsp;&nbsp;&nbsp;</label>

                                                                                        </td>

                                                                                        <td>
                                                                                            @elseif($gender === "Female")
                                                                                            <input name="studentgender" id="Male" type="radio" name="gender" value="Male">
                                                                                            <label>Male&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="studentgender" id="Female" type="radio" name="gender" value="Female" checked>
                                                                                            <label>Female&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="studentgender" id="X-gender" type="radio" name="gender" value="X-gender">
                                                                                            <label>X-gender&nbsp;&nbsp;&nbsp;</label>

                                                                                        </td>
                                                                                        <td>
                                                                                            @else
                                                                                            <input name="studentgender" id="Male" type="radio" name="gender" value="Male">
                                                                                            <label>Male&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="studentgender" id="Female" type="radio" name="gender" value="Female">
                                                                                            <label>Female&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="studentgender" id="X-gender" type="radio" name="gender" value="X-gender" checked>
                                                                                            <label>X-gender&nbsp;&nbsp;&nbsp;</label>
                                                                                            @endif
                                                                                        </td>


                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <label>
                                                                                <span class="text-red">*</span>
                                                                                CNIC/NICOP/B-FORM
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <span id="result" style="color: red;font-size: 9pt;display: block"></span>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <input value="{{$cnic}}" name="studentCNIC" id="cnic" type="text" maxlength="13" class="form-control" onkeypress="isInputNumber(event)" style="height: 45px;" onkeyup="validatecnic()">
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <table class="form-control no-border" border="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>
                                                                                            @if($cnictype === "Personal")
                                                                                            <input name="cnictype" type="radio" name="whom" value="Personal" checked>
                                                                                            <label>Personal&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="cnictype" type="radio" name="whom" value="Parent/Guardian">
                                                                                            <label>Parent/Guardian&nbsp;&nbsp;&nbsp;</label>
                                                                                        </td>
                                                                                        <td>
                                                                                            @else
                                                                                            <input name="cnictype" type="radio" name="whom" value="Personal">
                                                                                            <label>Personal&nbsp;&nbsp;&nbsp;</label>
                                                                                            <input name="cnictype" type="radio" name="whom" value="Parent/Guardian" checked>
                                                                                            <label>Parent/Guardian&nbsp;&nbsp;&nbsp;</label>

                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>

                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <span>
                                                                                <label>
                                                                                    <span class="text-red">*</span>
                                                                                    Country
                                                                                </label>
                                                                            </span>
                                                                            <span>
                                                                                <select name="studentCountry" class="form-control" disabled="true" style="height: 45px;">
                                                                                    <option value="Select Country">Select Country</option>
                                                                                    <option value="Afghanistan">Afghanistan</option>
                                                                                    <option value="Albania">Albania</option>
                                                                                    <option value="Algeria">Algeria</option>
                                                                                    <option value="American Samoa">American Samoa</option>
                                                                                    <option value="Andorra">Andorra</option>
                                                                                    <option value="Angola">Angola</option>
                                                                                    <option value="Anguilla">Anguilla</option>
                                                                                    <option value="Antarctica (Casey Base)">Antarctica (Casey Base)</option>
                                                                                    <option value="Antarctica (Davis Station)">Antarctica (Davis Station)</option>
                                                                                    <option value="Antarctica (MacQuarie Station)">Antarctica (MacQuarie Station)</option>
                                                                                    <option value="Antarctica (Mawson Station)">Antarctica (Mawson Station)</option>
                                                                                    <option value="Antarctica (Scott Base)">Antarctica (Scott Base)</option>
                                                                                    <option value="Antigua">Antigua</option>
                                                                                    <option value="Argentina">Argentina</option>
                                                                                    <option value="Armenia">Armenia</option>
                                                                                    <option value="Aruba">Aruba</option>
                                                                                    <option value="Ascension Island">Ascension Island</option>
                                                                                    <option value="Australia">Australia</option>
                                                                                    <option value="Austria">Austria</option>
                                                                                    <option value="Austria (Vienna)">Austria (Vienna)</option>
                                                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                                                    <option value="Bahamas">Bahamas</option>
                                                                                    <option value="Bahrain">Bahrain</option>
                                                                                    <option value="Bangladesh">Bangladesh</option>
                                                                                    <option value="Barbados">Barbados</option>
                                                                                    <option value="Barbuda">Barbuda</option>
                                                                                    <option value="Belarus">Belarus</option>
                                                                                    <option value="Belgium">Belgium</option>
                                                                                    <option value="Belize">Belize</option>
                                                                                    <option value="Benin">Benin</option>
                                                                                    <option value="Bermuda">Bermuda</option>
                                                                                    <option value="Bhutan">Bhutan</option>
                                                                                    <option value="Bolivia">Bolivia</option>
                                                                                    <option value="Bosnia &amp; Herzogovina">Bosnia &amp; Herzogovina</option>
                                                                                    <option value="Botswana">Botswana</option>
                                                                                    <option value="Brazil">Brazil</option>
                                                                                    <option value="British Virgin Islands">British Virgin Islands</option>
                                                                                    <option value="Brunei">Brunei</option>
                                                                                    <option value="Bulgaria">Bulgaria</option>
                                                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                                                    <option value="Burma (Myanmar)">Burma (Myanmar)</option>
                                                                                    <option value="Burundi">Burundi</option>
                                                                                    <option value="Cambodia">Cambodia</option>
                                                                                    <option value="Cameroon">Cameroon</option>
                                                                                    <option value="Canada">Canada</option>
                                                                                    <option value="Cape Verde Islands">Cape Verde Islands</option>
                                                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                                                    <option value="Central African Republic">Central African Republic</option>
                                                                                    <option value="Chad">Chad</option>
                                                                                    <option value="Chatham Island">Chatham Island</option>
                                                                                    <option value="Chile">Chile</option>
                                                                                    <option value="China">China</option>
                                                                                    <option value="Christmas Island">Christmas Island</option>
                                                                                    <option value="Cocos Island">Cocos Island</option>
                                                                                    <option value="Colombia">Colombia</option>
                                                                                    <option value="Commonwealth of Independent States">Commonwealth of Independent States</option>
                                                                                    <option value="Commonwealth of North Mariana">Commonwealth of North Mariana</option>
                                                                                    <option value="Comoros">Comoros</option>
                                                                                    <option value="Congo_-_DPR">Congo_-_DPR</option>
                                                                                    <option value="Congo_-_Republic">Congo_-_Republic</option>
                                                                                    <option value="Cook Islands">Cook Islands</option>
                                                                                    <option value="Costa Rica">Costa Rica</option>
                                                                                    <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                                                    <option value="Croatia">Croatia</option>
                                                                                    <option value="Cuba">Cuba</option>
                                                                                    <option value="Cuba - Guantanamo Bay">Cuba - Guantanamo Bay</option>
                                                                                    <option value="Cyprus - Northern">Cyprus - Northern</option>
                                                                                    <option value="Cyprus - Republic of">Cyprus - Republic of</option>
                                                                                    <option value="Czech Republic">Czech Republic</option>
                                                                                    <option value="Denmark">Denmark</option>
                                                                                    <option value="Diego Garcia">Diego Garcia</option>
                                                                                    <option value="Djibouti">Djibouti</option>
                                                                                    <option value="Dominica">Dominica</option>
                                                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                                                    <option value="Ecuador">Ecuador</option>
                                                                                    <option value="Egypt">Egypt</option>
                                                                                    <option value="El Salvador">El Salvador</option>
                                                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                                    <option value="Eritrea">Eritrea</option>
                                                                                    <option value="Estonia">Estonia</option>
                                                                                    <option value="Ethiopia">Ethiopia</option>
                                                                                    <option value="Faeroe Islands">Faeroe Islands</option>
                                                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                                                    <option value="Fiji Islands">Fiji Islands</option>
                                                                                    <option value="Finland">Finland</option>
                                                                                    <option value="France">France</option>
                                                                                    <option value="French Antilles">French Antilles</option>
                                                                                    <option value="French Guiana">French Guiana</option>
                                                                                    <option value="French Polynesia">French Polynesia</option>
                                                                                    <option value="Gabon">Gabon</option>
                                                                                    <option value="Gabonese Republic">Gabonese Republic</option>
                                                                                    <option value="Gambia">Gambia</option>
                                                                                    <option value="Georgia">Georgia</option>
                                                                                    <option value="Germany">Germany</option>
                                                                                    <option value="Ghana">Ghana</option>
                                                                                    <option value="Gibraltar">Gibraltar</option>
                                                                                    <option value="Greece">Greece</option>
                                                                                    <option value="Greenland">Greenland</option>
                                                                                    <option value="Grenada">Grenada</option>
                                                                                    <option value="Grenadine Islands">Grenadine Islands</option>
                                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                                    <option value="Guam">Guam</option>
                                                                                    <option value="Guantanamo Bay">Guantanamo Bay</option>
                                                                                    <option value="Guatemala">Guatemala</option>
                                                                                    <option value="Guinea (PRP)">Guinea (PRP)</option>
                                                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                                    <option value="Guyana">Guyana</option>
                                                                                    <option value="Haiti">Haiti</option>
                                                                                    <option value="Honduras">Honduras</option>
                                                                                    <option value="Hong Kong">Hong Kong</option>
                                                                                    <option value="Hungary">Hungary</option>
                                                                                    <option value="Iceland">Iceland</option>
                                                                                    <option value="India">India</option>
                                                                                    <option value="Indonesia">Indonesia</option>
                                                                                    <option value="Iran">Iran</option>
                                                                                    <option value="Iraq">Iraq</option>
                                                                                    <option value="Ireland">Ireland</option>
                                                                                    <option value="Israel">Israel</option>
                                                                                    <option value="Italy">Italy</option>
                                                                                    <option value="Ivory Coast (Cote d'Ivoire)">Ivory Coast (Cote d'Ivoire)</option>
                                                                                    <option value="Jamaica">Jamaica</option>
                                                                                    <option value="Japan">Japan</option>
                                                                                    <option value="Jordan">Jordan</option>
                                                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                                                    <option value="Kenya">Kenya</option>
                                                                                    <option value="Kiribati">Kiribati</option>
                                                                                    <option value="Korea (North)">Korea (North)</option>
                                                                                    <option value="Korea (South)">Korea (South)</option>
                                                                                    <option value="Kuwait">Kuwait</option>
                                                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                                    <option value="Laos">Laos</option>
                                                                                    <option value="Latvia">Latvia</option>
                                                                                    <option value="Lebanon">Lebanon</option>
                                                                                    <option value="Lesotho">Lesotho</option>
                                                                                    <option value="Liberia">Liberia</option>
                                                                                    <option value="Libya">Libya</option>
                                                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                                                    <option value="Lithuania">Lithuania</option>
                                                                                    <option value="Luxembourg">Luxembourg</option>
                                                                                    <option value="Macau">Macau</option>
                                                                                    <option value="Macedonia (former Yugoslav Rep.)">Macedonia (former Yugoslav Rep.)</option>
                                                                                    <option value="Madagascar">Madagascar</option>
                                                                                    <option value="Malawi">Malawi</option>
                                                                                    <option value="Malaysia">Malaysia</option>
                                                                                    <option value="Malaysia (K.L. &amp; Penang only )">Malaysia (K.L. &amp; Penang only )</option>
                                                                                    <option value="Maldives">Maldives</option>
                                                                                    <option value="Mali Republic">Mali Republic</option>
                                                                                    <option value="Malta">Malta</option>
                                                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                                                    <option value="Martinique">Martinique</option>
                                                                                    <option value="Mauritania">Mauritania</option>
                                                                                    <option value="Mauritius">Mauritius</option>
                                                                                    <option value="Mayotte Island">Mayotte Island</option>
                                                                                    <option value="Mexico">Mexico</option>
                                                                                    <option value="Micronesia">Micronesia</option>
                                                                                    <option value="Midway Islands">Midway Islands</option>
                                                                                    <option value="Moldova">Moldova</option>
                                                                                    <option value="Monaco">Monaco</option>
                                                                                    <option value="Mongolia">Mongolia</option>
                                                                                    <option value="Montenegro">Montenegro</option>
                                                                                    <option value="Montserrat">Montserrat</option>
                                                                                    <option value="Morocco">Morocco</option>
                                                                                    <option value="Mozambique">Mozambique</option>
                                                                                    <option value="Myanmar">Myanmar</option>
                                                                                    <option value="Namibia">Namibia</option>
                                                                                    <option value="Nauru">Nauru</option>
                                                                                    <option value="Nepal">Nepal</option>
                                                                                    <option value="Netherlands">Netherlands</option>
                                                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                                    <option value="Nevis">Nevis</option>
                                                                                    <option value="New Caledonia">New Caledonia</option>
                                                                                    <option value="New Zealand">New Zealand</option>
                                                                                    <option value="Nicaragua">Nicaragua</option>
                                                                                    <option value="Niger">Niger</option>
                                                                                    <option value="Nigeria">Nigeria</option>
                                                                                    <option value="Niue">Niue</option>
                                                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                                    <option value="Norway">Norway</option>
                                                                                    <option value="Oman">Oman</option>
                                                                                    <option selected="selected" value="Pakistan">Pakistan</option>
                                                                                    <option value="Palau">Palau</option>
                                                                                    <option value="Palestine">Palestine</option>
                                                                                    <option value="Panama">Panama</option>
                                                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                                                    <option value="Paraguay">Paraguay</option>
                                                                                    <option value="Peru">Peru</option>
                                                                                    <option value="Philippines">Philippines</option>
                                                                                    <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                                                    <option value="Poland">Poland</option>
                                                                                    <option value="Portugal">Portugal</option>
                                                                                    <option value="Qatar">Qatar</option>
                                                                                    <option value="Reunion Island">Reunion Island</option>
                                                                                    <option value="Romania">Romania</option>
                                                                                    <option value="Russia">Russia</option>
                                                                                    <option value="Rwanda">Rwanda</option>
                                                                                    <option value="Saipan">Saipan</option>
                                                                                    <option value="San Marino">San Marino</option>
                                                                                    <option value="São Tomé">São Tomé</option>
                                                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                                                    <option value="Senegal">Senegal</option>
                                                                                    <option value="Serbia">Serbia</option>
                                                                                    <option value="Seychelles Islands">Seychelles Islands</option>
                                                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                                                    <option value="Singapore">Singapore</option>
                                                                                    <option value="Slovakia">Slovakia</option>
                                                                                    <option value="Slovenia">Slovenia</option>
                                                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                                                    <option value="Somalia">Somalia</option>
                                                                                    <option value="South Africa">South Africa</option>
                                                                                    <option value="Spain">Spain</option>
                                                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                                                    <option value="St. Barthelemy">St. Barthelemy</option>
                                                                                    <option value="St. Helena">St. Helena</option>
                                                                                    <option value="St. Kitts/Nevis">St. Kitts/Nevis</option>
                                                                                    <option value="St. Lucia">St. Lucia</option>
                                                                                    <option value="St. Marteen">St. Marteen</option>
                                                                                    <option value="St. Martin">St. Martin</option>
                                                                                    <option value="St. Pierre &amp; Miquelon">St. Pierre &amp; Miquelon</option>
                                                                                    <option value="St. Vincent &amp; Grenadines">St. Vincent &amp; Grenadines</option>
                                                                                    <option value="Sudan">Sudan</option>
                                                                                    <option value="Suriname">Suriname</option>
                                                                                    <option value="Swaziland">Swaziland</option>
                                                                                    <option value="Sweden">Sweden</option>
                                                                                    <option value="Switzerland">Switzerland</option>
                                                                                    <option value="Syria">Syria</option>
                                                                                    <option value="Taiwan">Taiwan</option>
                                                                                    <option value="Tajikistan">Tajikistan</option>
                                                                                    <option value="Tanzania">Tanzania</option>
                                                                                    <option value="Thailand">Thailand</option>
                                                                                    <option value="Togo">Togo</option>
                                                                                    <option value="Tonga Islands">Tonga Islands</option>
                                                                                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                                    <option value="Tunisia">Tunisia</option>
                                                                                    <option value="Turkey">Turkey</option>
                                                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                                                    <option value="Turks and Caicos">Turks and Caicos</option>
                                                                                    <option value="Tuvalu">Tuvalu</option>
                                                                                    <option value="Uganda">Uganda</option>
                                                                                    <option value="Ukraine">Ukraine</option>
                                                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                                                    <option value="United Kingdom">United Kingdom</option>
                                                                                    <option value="Uruguay">Uruguay</option>
                                                                                    <option value="USA">USA</option>
                                                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                                                    <option value="Vanuatu">Vanuatu</option>
                                                                                    <option value="Vatican City">Vatican City</option>
                                                                                    <option value="Venezuela">Venezuela</option>
                                                                                    <option value="Vietnam">Vietnam</option>
                                                                                    <option value="Wake Island">Wake Island</option>
                                                                                    <option value="Wallis and Futuna Is.">Wallis and Futuna Is.</option>
                                                                                    <option value="Western Samoa">Western Samoa</option>
                                                                                    <option value="Yemen">Yemen</option>
                                                                                    <option value="Yugoslavia">Yugoslavia</option>
                                                                                    <option value="Zaire">Zaire</option>
                                                                                    <option value="Zambia">Zambia</option>
                                                                                    <option value="Zimbabwe">Zimbabwe</option>

                                                                                </select>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <span>
                                                                                <label>
                                                                                    Nationality
                                                                                </label>
                                                                            </span>
                                                                            <span>
                                                                                <select name="studentNationality" class="form-control" style="height: 45px;">
                                                                                    @if($nationality === "Pakistan")
                                                                                    <option value="Select Nationality">Select Nationality</option>
                                                                                    <option selected value="Pakistan">Pakistan</option>
                                                                                    <option value="India">India</option>
                                                                                    <option value="China">China</option>
                                                                                    <option value="American">American</option>
                                                                                    @elseif($nationality === "India")
                                                                                    <option value="Select Nationality">Select Nationality</option>
                                                                                    <option value="Pakistan">Pakistan</option>
                                                                                    <option selected value="India">India</option>
                                                                                    <option value="China">China</option>
                                                                                    <option value="American">American</option>
                                                                                    @elseif($nationality === "China")
                                                                                    <option value="Select Nationality">Select Nationality</option>
                                                                                    <option value="Pakistan">Pakistan</option>
                                                                                    <option value="India">India</option>
                                                                                    <option selected value="China">China</option>
                                                                                    <option value="American">American</option>
                                                                                    @elseif($nationality === "American")
                                                                                    <option value="Select Nationality">Select Nationality</option>
                                                                                    <option value="Pakistan">Pakistan</option>
                                                                                    <option value="India">India</option>
                                                                                    <option value="China">China</option>
                                                                                    <option selected value="American">American</option>
                                                                                    @else
                                                                                    <option selected value="Select Nationality">Select Nationality</option>
                                                                                    <option value="Pakistan">Pakistan</option>
                                                                                    <option value="India">India</option>
                                                                                    <option value="China">China</option>
                                                                                    <option value="American">American</option>
                                                                                    @endif


                                                                                </select>
                                                                            </span>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <span>
                                                                                <label>
                                                                                    <span class="text-red">*</span>
                                                                                    City
                                                                                </label>
                                                                            </span>
                                                                            <span>
                                                                                <select name="studentCity" class="form-control" style="width: 100%; height: 45px;">
                                                                                    @if($city === "Islamabad")
                                                                                    <option value="Select City">Select City</option>
                                                                                    <option selected value="Islamabad">Islamabad</option>
                                                                                    <option value="Lahore">Lahore</option>
                                                                                    <option value="Karachi">Karachi</option>
                                                                                    <option value="Faisalabad">Faisalabad</option>
                                                                                    @elseif($city === "Lahore")
                                                                                    <option value="Select City">Select City</option>
                                                                                    <option value="Islamabad">Islamabad</option>
                                                                                    <option selected value="Lahore">Lahore</option>
                                                                                    <option value="Karachi">Karachi</option>
                                                                                    <option value="Faisalabad">Faisalabad</option>
                                                                                    @elseif($city === "Karachi")
                                                                                    <option value="Select City">Select City</option>
                                                                                    <option value="Islamabad">Islamabad</option>
                                                                                    <option value="Lahore">Lahore</option>
                                                                                    <option selected value="Karachi">Karachi</option>
                                                                                    <option value="Faisalabad">Faisalabad</option>
                                                                                    @elseif($city === "Faisalabad")
                                                                                    <option value="Select City">Select City</option>
                                                                                    <option value="Islamabad">Islamabad</option>
                                                                                    <option value="Lahore">Lahore</option>
                                                                                    <option value="Karachi">Karachi</option>
                                                                                    <option selected value="Faisalabad">Faisalabad</option>
                                                                                    @else
                                                                                    <option selected value="Select City">Select City</option>
                                                                                    <option value="Islamabad">Islamabad</option>
                                                                                    <option value="Lahore">Lahore</option>
                                                                                    <option selected value="Karachi">Karachi</option>
                                                                                    <option value="Faisalabad">Faisalabad</option>
                                                                                    @endif


                                                                                </select>
                                                                            </span>
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <span>
                                                                                <label>
                                                                                    <span class="text-red">*</span>
                                                                                    Mailing/Postal Address
                                                                                </label>
                                                                                <input type="text" value="{{$mail}}" name="studentaddress" rows="2" cols="20" class="form-control mailingAddressBox" style="height: 80px;">

                                                                            </span>

                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label>
                                                                                <span class="text-red">*</span>
                                                                                Mobile
                                                                            </label>
                                                                            <i style="color: darkgrey; font-size: 8pt;">&nbsp;<span style="color:Gray;font-size:9pt;"></span>
                                                                                &nbsp;Example: 923331122334 Country Code + Mobile Operator Code + Number. &nbsp;&nbsp;
                                                                            </i>

                                                                        </div>

                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <span id="result1" style="color: red;font-size: 9pt;display: block"></span>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <input value="{{$mobile}}" name="studentmobile" id="mn" type="text" maxlength="11" class="form-control" style="height: 45px;" onkeypress="isInputNumber(event)" onkeyup="validatemn()">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="panel-heading" role="tab">
                                                                <h4 class="panel-title">
                                                                    <a id="minus1" class="collapsed" onclick="switchclass1()">
                                                                        Qualification/Experience
                                                                    </a>
                                                                </h4>

                                                            </div>
                                                            <div id="myDiv1" class="panel-colapse colapse in">
                                                                <div class="panel-body">
                                                                    <div class="row margin-bottom">
                                                                        <div class="col-md-6">
                                                                            <span>
                                                                                <label>
                                                                                    <span class="text-red">*</span>
                                                                                    Highest Qualification
                                                                                </label>
                                                                            </span>
                                                                            <span>
                                                                                <select name="studentqualification" class="form-control" style="height: 45px;">
                                                                                    @if($qualification === "Middle")
                                                                                    <option value="-1">Select Qualification</option>
                                                                                    <option selected value="Middle">Middle</option>
                                                                                    <option value="Matric">Matric/O-Level</option>
                                                                                    <option value="Inter">Intermediate</option>
                                                                                    <option value="Bachelors">Graduation</option>
                                                                                    <option value="Masters">Masters</option>
                                                                                    <option value="MS">MS/M.Phil</option>
                                                                                    <option value="Ph.D">Ph.D</option>
                                                                                    @elseif($qualification === "Matric")
                                                                                    <option value="-1">Select Qualification</option>
                                                                                    <option value="Middle">Middle</option>
                                                                                    <option selected value="Matric">Matric/O-Level</option>
                                                                                    <option value="Inter">Intermediate</option>
                                                                                    <option value="Bachelors">Graduation</option>
                                                                                    <option value="Masters">Masters</option>
                                                                                    <option value="MS">MS/M.Phil</option>
                                                                                    <option value="Ph.D">Ph.D</option>
                                                                                    @elseif($qualification === "Inter")
                                                                                    <option value="-1">Select Qualification</option>
                                                                                    <option value="Middle">Middle</option>
                                                                                    <option value="Matric">Matric/O-Level</option>
                                                                                    <option selected value="Inter">Intermediate</option>
                                                                                    <option value="Bachelors">Graduation</option>
                                                                                    <option value="Masters">Masters</option>
                                                                                    <option value="MS">MS/M.Phil</option>
                                                                                    <option value="Ph.D">Ph.D</option>
                                                                                    @elseif($qualification === "Bachelors")
                                                                                    <option value="-1">Select Qualification</option>
                                                                                    <option value="Middle">Middle</option>
                                                                                    <option value="Matric">Matric/O-Level</option>
                                                                                    <option value="Inter">Intermediate</option>
                                                                                    <option selected value="Bachelors">Graduation</option>
                                                                                    <option value="Masters">Masters</option>
                                                                                    <option value="MS">MS/M.Phil</option>
                                                                                    <option value="Ph.D">Ph.D</option>
                                                                                    @elseif($qualification === "Masters")
                                                                                    <option value="-1">Select Qualification</option>
                                                                                    <option value="Middle">Middle</option>
                                                                                    <option value="Matric">Matric/O-Level</option>
                                                                                    <option value="Inter">Intermediate</option>
                                                                                    <option value="Bachelors">Graduation</option>
                                                                                    <option selected value="Masters">Masters</option>
                                                                                    <option value="MS">MS/M.Phil</option>
                                                                                    <option value="Ph.D">Ph.D</option>
                                                                                    @elseif($qualification === "MS")
                                                                                    <option value="-1">Select Qualification</option>
                                                                                    <option value="Middle">Middle</option>
                                                                                    <option value="Matric">Matric/O-Level</option>
                                                                                    <option value="Inter">Intermediate</option>
                                                                                    <option value="Bachelors">Graduation</option>
                                                                                    <option value="Masters">Masters</option>
                                                                                    <option selected value="MS">MS/M.Phil</option>
                                                                                    <option value="Ph.D">Ph.D</option>
                                                                                    @elseif($qualification === "Ph.D")
                                                                                    <option value="-1">Select Qualification</option>
                                                                                    <option value="Middle">Middle</option>
                                                                                    <option value="Matric">Matric/O-Level</option>
                                                                                    <option value="Inter">Intermediate</option>
                                                                                    <option value="Bachelors">Graduation</option>
                                                                                    <option value="Masters">Masters</option>
                                                                                    <option value="MS">MS/M.Phil</option>
                                                                                    <option selected value="Ph.D">Ph.D</option>
                                                                                    @else
                                                                                    <option selected value="-1">Select Qualification</option>
                                                                                    <option value="Middle">Middle</option>
                                                                                    <option value="Matric">Matric/O-Level</option>
                                                                                    <option value="Inter">Intermediate</option>
                                                                                    <option value="Bachelors">Graduation</option>
                                                                                    <option value="Masters">Masters</option>
                                                                                    <option value="MS">MS/M.Phil</option>
                                                                                    <option value="Ph.D">Ph.D</option>
                                                                                    @endif

                                                                                </select>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row margin-bottom">
                                                                        <div class="col-md-6">
                                                                            <span>
                                                                                <label>
                                                                                    <span class="text-red">*</span>
                                                                                    Specialization
                                                                                </label>
                                                                            </span>
                                                                            <span>
                                                                                <select name="studentspecialization" class="form-control" style="height: 45px;">
                                                                                    @if($specialization === "Business")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option selected value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "ComputerScience")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option selected value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "Engineering")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option selected value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "ManagementSciences")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option selected value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "MathematicsAndStatistics")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option selected value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "BiologicalSciences")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option selected value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "LegalProfessions")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option selected value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "HealthScience")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option selected value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "PhysicalSciences")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option selected value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "SocialSciences")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option selected value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "Education")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option selected value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "ArtsAndHumanities")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option selected value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @elseif($specialization === "Other")
                                                                                    <option value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option selected value="Other">Other</option>
                                                                                    @else
                                                                                    <option selected value="-1"> Select Specialization </option>
                                                                                    <option value="Business">Business</option>
                                                                                    <option value="ComputerScience">Computer Science</option>
                                                                                    <option value="Engineering">Engineering</option>
                                                                                    <option value="ManagementSciences">Management Sciences</option>
                                                                                    <option value="MathematicsAndStatistics">Mathematics and Statistics</option>
                                                                                    <option value="BiologicalSciences">Biological Sciences</option>
                                                                                    <option value="LegalProfessions">Legal Professions</option>
                                                                                    <option value="HealthScience">Health Professions</option>
                                                                                    <option value="PhysicalSciences">Physical Sciences</option>
                                                                                    <option value="SocialSciences">Social Sciences</option>
                                                                                    <option value="Education">Education</option>
                                                                                    <option value="ArtsAndHumanities">Arts and Humanities</option>
                                                                                    <option value="Other">Other</option>
                                                                                    @endif


                                                                                </select>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <span>
                                                                                <label>
                                                                                    <span class="text-red">*</span>
                                                                                    Current Status
                                                                                </label>
                                                                            </span>
                                                                            <span>
                                                                                <select name="studentstatus" class="form-control" style="height: 45px;">
                                                                                    @if($status === "Student")
                                                                                    <option value="-1">Select Current Status</option>
                                                                                    <option selected value="Student">Student</option>
                                                                                    <option value="Housewife">Housewife</option>
                                                                                    <option value="Unemployed">Unemployed</option>
                                                                                    <option value="Employed">Employed</option>
                                                                                    <option value="OwnBusiness">Business Owner</option>
                                                                                    @elseif($status === "Housewife")
                                                                                    <option value="-1">Select Current Status</option>
                                                                                    <option value="Student">Student</option>
                                                                                    <option selected value="Housewife">Housewife</option>
                                                                                    <option value="Unemployed">Unemployed</option>
                                                                                    <option value="Employed">Employed</option>
                                                                                    <option value="OwnBusiness">Business Owner</option>
                                                                                    @elseif($status === "Unemployed")
                                                                                    <option value="-1">Select Current Status</option>
                                                                                    <option value="Student">Student</option>
                                                                                    <option value="Housewife">Housewife</option>
                                                                                    <option selected value="Unemployed">Unemployed</option>
                                                                                    <option value="Employed">Employed</option>
                                                                                    <option value="OwnBusiness">Business Owner</option>
                                                                                    @elseif($status === "Employed")
                                                                                    <option value="-1">Select Current Status</option>
                                                                                    <option value="Student">Student</option>
                                                                                    <option value="Housewife">Housewife</option>
                                                                                    <option value="Unemployed">Unemployed</option>
                                                                                    <option selected value="Employed">Employed</option>
                                                                                    <option value="OwnBusiness">Business Owner</option>
                                                                                    @elseif($status === "Business Owner")
                                                                                    <option value="-1">Select Current Status</option>
                                                                                    <option value="Student">Student</option>
                                                                                    <option value="Housewife">Housewife</option>
                                                                                    <option value="Unemployed">Unemployed</option>
                                                                                    <option value="Employed">Employed</option>
                                                                                    <option selected value="OwnBusiness">Business Owner</option>
                                                                                    @else
                                                                                    <option selected value="-1">Select Current Status</option>
                                                                                    <option value="Student">Student</option>
                                                                                    <option value="Housewife">Housewife</option>
                                                                                    <option value="Unemployed">Unemployed</option>
                                                                                    <option value="Employed">Employed</option>
                                                                                    <option value="OwnBusiness">Business Owner</option>
                                                                                    @endif

                                                                                </select>
                                                                            </span>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <span>
                                                                                <label>
                                                                                    <span class="text-red">*</span>
                                                                                    Future Plan
                                                                                </label>
                                                                            </span>
                                                                            <span>

                                                                                <select name="studentplan" class="form-control" style="height: 45px;">
                                                                                    @if($futureplan === "Job")
                                                                                    <option value="-1">Select Future Plan</option>
                                                                                    <option selected value="Job">Job</option>
                                                                                    <option value="Own Business">Own Business</option>
                                                                                    <option value="Freelancing">Freelancing</option>
                                                                                    @elseif($futureplan === "Own Business")
                                                                                    <option value="-1">Select Future Plan</option>
                                                                                    <option value="Job">Job</option>
                                                                                    <option selected value="Own Business">Own Business</option>
                                                                                    <option value="Freelancing">Freelancing</option>
                                                                                    @elseif($futureplan === "Freelancing")
                                                                                    <option value="-1">Select Future Plan</option>
                                                                                    <option value="Job">Job</option>
                                                                                    <option selected value="Own Business">Own Business</option>
                                                                                    <option value="Freelancing">Freelancing</option>
                                                                                    @else
                                                                                    <option selected value="-1">Select Future Plan</option>
                                                                                    <option value="Job">Job</option>
                                                                                    <option value="Own Business">Own Business</option>
                                                                                    <option value="Freelancing">Freelancing</option>
                                                                                    @endif

                                                                                </select>
                                                                            </span>

                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <div class="row margin" style="text-align: center">
                                                                <input type="submit" class="btn btn-primary" style="height:40px;width:100%;font-weight: bold; font-size: 18px; text-transform: uppercase;">

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
            </form>

            <div class="col-md-9 nigga">
                <h1>SAMPLE TEXT</h1>
                <h1>SAMPLE TEXT</h1>
                <h1>SAMPLE TEXT</h1>
                <h1>SAMPLE TEXT</h1>

            </div>
        </div>
        </section>



    </div>







    </div>

    <script src="/js/profile.js"></script>
</body>

</html>
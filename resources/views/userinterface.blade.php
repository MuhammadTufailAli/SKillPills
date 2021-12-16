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
	<link rel="stylesheet" href="/css/userinterface.css" />
	<link rel="stylesheet" href=" /css/enrollment.css">

	<title>UserInterface</title>
</head>

<body class="skin-blue sidebar-mini sidebar-collapse" style="height: auto">



	<!--orange-->
	<?php
	include 'D:\Study\Semister 5\WEB\laravel project web final\skillspills\resources\views\mydbcon.php';
	$query = "select * from colors where color = 'orange'"; // Fetch all the data from the table customers

	$result = mysqli_query($dbCon, $query);

	?>
	<?php if ($result->num_rows > 0) : ?>
		<?php while ($array = mysqli_fetch_row($result)) : ?>
			<p style="display: none;" id="color"><?php echo $array[0]; ?></p>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<?php mysqli_free_result($result); ?>
	<!--green-->
	<?php
	include 'D:\Study\Semister 5\WEB\laravel project web final\skillspills\resources\views\mydbcon.php';
	$query = "select * from colors where color = 'green'"; // Fetch all the data from the table customers
	$result = mysqli_query($dbCon, $query);

	?>
	<?php if ($result->num_rows > 0) : ?>
		<?php while ($array = mysqli_fetch_row($result)) : ?>
			<p style="display: none;" id="color1"><?php echo $array[0]; ?></p>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<?php mysqli_free_result($result); ?>
	<!--purple-->
	<?php
	include 'D:\Study\Semister 5\WEB\laravel project web final\skillspills\resources\views\mydbcon.php';
	$query = "select * from colors where color = 'purple'"; // Fetch all the data from the table customers
	$result = mysqli_query($dbCon, $query);

	?>
	<?php if ($result->num_rows > 0) : ?>
		<?php while ($array = mysqli_fetch_row($result)) : ?>
			<p style="display: none;" id="color2"><?php echo $array[0]; ?></p>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<?php mysqli_free_result($result); ?>
	<!--default-->
	<?php
	include 'D:\Study\Semister 5\WEB\laravel project web final\skillspills\resources\views\mydbcon.php';
	$query = "select * from colors where color = 'blue'"; // Fetch all the data from the table customers
	$result = mysqli_query($dbCon, $query);

	?>
	<?php if ($result->num_rows > 0) : ?>
		<?php while ($array = mysqli_fetch_row($result)) : ?>
			<p style="display: none;" id="color3"><?php echo $array[0]; ?></p>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<?php mysqli_free_result($result); ?>






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

		<div class="showside" id="pata">
			<a href="" id="masla1">
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

				<span style="color: #ADD8E6; margin-left: 20px;">Change Password</span>
			</a>
			<a href="/deleteaccount">

				<span style="color: red; margin-left: 20px;">Delete account</span>
			</a>
			<a href="">

				<span style="margin-left: 20px">Change Theme</span>
			</a>
			<button id="orange" href="" onclick="changecolor($('#color').text())">
				<span style="background-color: orange;color: orange;margin-left: 20px">llllllllllllllllllllllllllllllllll</span>

			</button>
			<button id="green" href="" onclick="changecolor($('#color1').text())">
				<span style="background-color: green;color: green;margin-left: 20px">llllllllllllllllllllllllllllllllll</span>
			</button>
			<button id="purple" href="" onclick="changecolor($('#color2').text())">
				<span style="background-color: purple;color: purple;margin-left: 20px">llllllllllllllllllllllllllllllllll</span>
			</button>
			<button id="00AEEF" href="" onclick="changecolor($('#color3').text())">
				<span style="background-color: #00AEEF;color: #00AEEF;margin-left: 20px">llllllllllllllllllllllllllllllllll</span>
			</button>

		</div>


		<div id="mySidebar" class="main-sidebar">
			<section class="sidebar" style="height: auto;">
				<ul id="sdbm" class="sidebar-menu">
					<li>
						<a href="">
							<i class="fa fa-home">

							</i>
							<span>Home</span>
						</a>
					</li>
					<li>
						<a href="/profile">
							<i href="/profile" class="fa fa-user">

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
						<span style="color: white;font-size: 17px; margin-left: 25px"></span>
						<small style="color: white;font-size: 13px; margin-left: 25px;"></small><br>
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
			<section class="content-header">
				<h1>Home</h1>
			</section>

			<section class="content" style="margin: auto;">
				<div class="row" style="width: 100%; margin-left: 0; margin-right: 0">
					<div class="col-lg-7 col-md-12" style="clear: both;">
						<div class="col-lg-12 col-md-12 no-padding">
							<div class="small-box bg-white courses">
								<div id="bg-color" class="inner title-bar">
									<p>My Courses (Batch 1)<a href="#availiblecourse">
											<span class="blinking">Enroll Now!</span>
										</a></p>
									<div class="box-body">
										<div class="col-lg-12 col-md-12">


										</div>

										<table>
											<tr>
												<th>Course</th>
												<th>status</th>

											</tr>
											<tr>
												<td>Artifical Intelligence</td>
												<td>
													<a id="coursevalue" href="">{{$ai}}</a>
												</td>
											</tr>
											<tr>
												<td>Web Development
												</td>
												<td><a id="coursevalue1" href="">{{$web}}</a></td>
											</tr>
											<tr>
												<td>Python</td>
												<td><a id="coursevalue2" href="">{{$python}}</a></td>
											</tr>
											<tr>
												<td>Java</td>
												<td><a id="coursevalue3" href="">{{$java}}</a></td>
											</tr>
											<tr>
												<td>C++</td>
												<td><a id="coursevalue4" href="">{{$c}}</a></td>
											</tr>
											<tr>
												<td>CSS</td>
												<td><a id="coursevalue5" href="">{{$css}}</a></td>
											</tr>
											<tr>
												<td>Html</td>
												<td><a id="coursevalue6" href="">{{$html}}</a></td>
											</tr>
											<tr>
												<td>Javascript</td>
												<td><a id="coursevalue7" href="">{{$javascript}}</a></td>
											</tr>
											<tr>
												<td>Computer Engineering</td>
												<td><a id="coursevalue8" href="">{{$ce}}</a></td>
											</tr>
										</table>

									</div>
								</div>

							</div>
							<div class="small-box bg-white courses">
								<div id="bg-color1" class="inner title-bar">
									<p>Previous Courses</p>
									<div class="box-body">
										<div class="col-lg-12 col-md-12">
											<h4>Dear Trainee! You have no previous courses.</h4>

										</div>

									</div>
								</div>

							</div>
						</div>

					</div>

					<div class="col-lg-5 col-md-12">
						<div class="col-lg-12 col-md-12 no-padding">
							<div class="small-box bg-white news">
								<div id="bg-color2" class="inner title-bar">
									<p>Notice Board</p>
									<div class="box-body">
										<div class="row news-items box-body" style="margin-right: 0;">
											<div class="col-md-4 col-sm-3 inner_bg_courses">
												<a class="btn btn-app" style="min-height: 80px; width: 100%;height: 10%" href="/noticeboard">
													<i class="fas fa-newspaper text-blue">

													</i>
													News and Events
												</a>
											</div>
											<div class="col-md-4 col-sm-3 inner_bg_courses">
												<a class="btn btn-app" style="min-height: 80px; width: 100%;height: 10%" href="/noticeboard">
													<i class="fa fa-chain text-blue">

													</i>
													Important Links
												</a>
											</div>


										</div>

									</div>

								</div>




							</div>
							<div class="small-box bg-white tasks">
								<div id="bg-color3" class="inner title-bar">
									<p>My Activities</p>
									<!-- Tile buttons -->
									<div class="box-body">
										<div class="row tasks-items box-body" style="margin-right: 0;">
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a href="/exercises" class="btn btn-app" style="min-height: 80px; width: 100%; height: 10%;text-align: center;">
													<i class="fa fa-list-alt text-blue">
													</i><span>Exercises</span>
												</a>
											</div>
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a class="btn btn-app" href="/quiz" style="min-height: 80px; width: 100%; height: 10%;">
													<i class="fa fa-question-circle text-blue"></i><span>Quizzes</span>
												</a>
											</div>
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a class="btn btn-app" href="/discussion" style="min-height: 80px; width: 100%; height: 10%;">

													<i class="fa fa-comments text-blue"></i><span>Discussions</span>
												</a>
											</div>
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a class="btn btn-app" href="/notes" style="min-height: 80px; width: 100%; height: 10%;">

													<i class="fa fa-file-text text-blue"></i><span>My Notes</span>
												</a>
											</div>




										</div>
									</div>
								</div>


							</div>
							<div class="small-box bg-white tasks">
								<div id="bg-color4" class="inner title-bar">
									<p>Trainee Services</p>
									<div class="box-body">
										<div class="row news-items box-body trainee-service" style="margin-right: 0;">
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a class="btn btn-app " style="min-height: 80px; width: 100%; height: 10%;" href="/Results">
													<i class="fa fa-clipboard  text-blue"></i><span>My Results</span>

												</a>
											</div>
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a class="btn btn-app" href="/progress" style="min-height: 80px; width: 100%; height: 10%;">
													<i class="fa fa-line-chart  text-blue"></i><span id="forspace">Progress Timeline</span>
												</a>

											</div>
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a class="btn btn-app" href="/successstory" style="min-height: 80px; width: 100%; height: 10%;">
													<i class="fa fa-trophy text-blue"></i><span>Success Stories</span>
												</a>
											</div>
											<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 inner_bg_courses">
												<a class="btn btn-app" href="/onlinesupport" style="min-height: 80px; width: 100%; height: 10%;">
													<i class="fa fa-support  text-blue"></i><span>Online Support</span>
												</a>
											</div>

										</div>
									</div>
								</div>

							</div>

						</div>

					</div>







				</div>



			</section>
			<br><br><br><br> <br><br><br><br><br><br><br>
			<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
			<div id="availiblecourse">
				<h2 style="color: black; margin-left: 10px;" id="courses"><span style="color: orangered">A</span>VAILIBLE <span style="color: orangered">C</span>OURSES</h2>

				<section class="content">

					<section class="container">
						<form action="/userinterface" method="POST">
							@csrf
							<div class="col-md-12">
								<div class="row firstdiv" style="background-color: #00AEEF; border: 1px solid;border-color: #00AEEF;border-radius: 4px;">
									<h2 style="color: white" class="change-font">Available Courses</h2>
								</div>
								<div class="row">
									<h3 style="color: black;width: 40%;padding: 8px;" class="change-font change-bg">Course title</h3>
									<h3 style="color: black;width: 20%;padding: 8px;" class="change-font change-bg">Duration</h3>
									<h3 style="color: black;width: 20%;padding: 8px;" class="change-font change-bg">Trainer</h3>
									<h3 style="color: black;width: 17.4%;padding: 8px;" class="change-font change-bg">Credit hours</h3>
								</div>

								<div class="row lorem">
									<label class="switch">
										@if($ai === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="ai" value="Artificial Intelligence">
										@else
										<input class="checkbox" type="checkbox" name="ai" value="Artificial Intelligence">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Artificial Intelligence</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Tehseen Raza</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($web === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="web" value="Web Developement">
										@else
										<input class="checkbox" type="checkbox" name="web" value="Web Developement">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Web Developement</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Imran Khalique</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($python === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="python" value="Python">
										@else
										<input class="checkbox" type="checkbox" name="python" value="Python">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Python</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Majid Iqbal</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($java === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="java" value="Java">
										@else
										<input class="checkbox" type="checkbox" name="java" value="Java">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Java</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Ilyas Tamimi</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($c === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="c++" value="C++">
										@else
										<input class="checkbox" type="checkbox" name="c++" value="C++">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">C++</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Innayat Rehman</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($css === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="css" value="CSS">
										@else
										<input class="checkbox" type="checkbox" name="css" value="CSS">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">CSS</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Junaid Hassan</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($html === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="html" value="Html">
										@else
										<input class="checkbox" type="checkbox" name="html" value="Html">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Html</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Sara Nida</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($javascript === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="javascript" value="JavaSript">
										@else
										<input class="checkbox" type="checkbox" name="javascript" value="JavaSript">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">JavaSript</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Saneeha Amir</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<label class="switch">
										@if($ce === "Entrolled")
										<input class="checkbox" checked type="checkbox" name="ce" value="Computer Engineering">
										@else
										<input class="checkbox" type="checkbox" name="ce" value="Computer Engineering">
										@endif
										<span class="slider round"></span>
									</label>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Computer Engineering</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Mariam Tariq</h3>
									<h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
								</div>
								<div class="row lorem">
									<input type="submit" name="" value="Save" class="btn btn-primary" style="width: 70px; margin: 10px;margin-left: 78px;">
								</div>
							</div>
						</form>
					</section>
				</section>
			</div>


		</div>







	</div>

	<script src="/js/userinterface.js"></script>
</body>

</html>
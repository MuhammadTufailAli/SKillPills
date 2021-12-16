@extends('template')

@section('content')
<link rel="stylesheet" " href=" /css/enrollment.css">
<section class="content-header">
    <h1>Course Enrollment
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
                &nbsp;Course Enrollment</span>

        </span>

    </span>
    <br>
    <br>

</section>
<section class="content">

    <section class="container">
        <form action="/enrollment" method="POST">
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
                        <input class="checkbox" type="checkbox" name="ai" value="Artificial Intelligence">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Artificial Intelligence</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Tehseen Raza</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="web" value="Web Developement">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Web Developement</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Imran Khalique</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="python" value="Python">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Python</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Majid Iqbal</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="java" value="Java">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Java</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Ilyas Tamimi</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="c++" value="C++">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">C++</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Innayat Rehman</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="css" value="CSS">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">CSS</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Junaid Hassan</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="html" value="Html">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">Html</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Sara Nida</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="javascript" value="JavaSript">
                        <span class="slider round"></span>
                    </label>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 33%">JavaSript</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">12 Weeks</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px;width: 20%">Saneeha Amir</h3>
                    <h3 class="change-font" style="margin-top: 8px; margin-left: 8px">4</h3>
                </div>
                <div class="row lorem">
                    <label class="switch">
                        <input class="checkbox" type="checkbox" name="ce" value="Computer Engineering">
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
<script>

</script>
@endsection
@extends('template')

@section('content')
<link rel="stylesheet" href=" /css/exercises.css">
<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 100%;
        /* The width is the width of the web page */
    }
</style>
<section class="content-header">
    <h1>Online Support
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
                &nbsp;Online Support</span>

        </span>

    </span>
    <br>
    <br>

</section>

<section id="main" class="content">
    <div class="row no-margin">
        <div class="panel-group">
            <div style="background-color: white;" class="row">
                <div class="col-4">
                    <label style="float: right;" for="">Subject/Reference</label><br><br>
                    <label style="float: right;" for="">Query Details</label>
                </div>
                <div class="col-8">
                    <input style="float: left;" type="text" required> <br> <br>
                    <textarea style="float: left;" name="" id="" cols="30" rows="5"></textarea><br><br><br><br><br><br>
                    <button style="float:left;background-color: #008CBA;font-size: 18px;"><a style="text-decoration: none;color:white;" href="/userinterface">Submit</a></button>
                </div>
            </div>



        </div>

    </div>




    <div id="googleMap" style="width:100%;height:700px;"></div>




</section>

<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng(52.508742, -0.120850),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXpomORdt6ber29k8tzk_oIPxQAWaVMBE&callback=myMap"></script>




@endsection
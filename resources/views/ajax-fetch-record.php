<?php
include "mydbCon.php";
$color = $_POST['color'];
$query = "SELECT * from colors WHERE color = '" . $color . "'";
$result = mysqli_query($dbCon, $query);
$cust = mysqli_fetch_array($result);
if ($cust) {
    echo json_encode($cust);
} else {
    echo "Error: " . $sql . "" . mysqli_error($dbCon);
}

<?php
$con = mysqli_connect("localhost", "root", "", "user_data");

if (mysqli_connect_errno()) {
    echo "Could not connect to Database: " . mysqli_connect_error();
} else {
    echo "DB Connected Successfully!";
}

$mySql = "INSERT INTO user_list (name, mobile, email) VALUES ('Adnan', '666', 'adnan@yaho.com')";

if (mysqli_query($con, $mySql)) {
    echo "Data Inserted Successfully!";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);

?>

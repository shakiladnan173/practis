<?php

$con = mySqli_connect("localhost","if0_37679408","vb7iyRsMjHV89","if0_37679408_shakil");

if(mySqli_connect.errono()){
    echo "Couldnot Connect DataBase".mySqli_connect_error();
}
else{
    echo "Db Conncect SuccessFully!!";
}

$mySql = "INSERT INTO user_list (name,mobile,email) VALUES ('Adnan','666','adnan@yaho.com') ";
mySqli_query ($con,$mySql);

?>

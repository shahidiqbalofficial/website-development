<?php

// creating connection with database

$serverName="sql305.byethost8.com";
$userName="b8_33294483";
$passward="shahid12345";
$database="b8_33294483_webTecnology";
$connection=mysqli_connect($serverName,$userName,$passward,$database);
if ($connection) {
    echo "connection established successfully!!";
}
else {
    echo "connection error!!";
}

// display record from product table
// $name=$_GET["txtname"];
// $price=$_GET["price"];
// $desc=$_GET["produc_des"];
// $cat_id=2;
// $q ="INSERT INTO tbl_products (p_name,p_price,p_description) VALUES ('$name','$price','$desc')";

// if (mysqli_query($connection,$q)) {
//    echo " A new product is added in database";
// } 
// else {
//     echo " unable to add new product  in database";
// }

require ("index.php");
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cont = mysqli_connect('localhost', 'root', '', 'murga') or die("connection fail" . mysqli_connect_error());
    $murga_ko_name=$_POST['username'];
    $murga_ko_psd=$_POST['psd'];
    $sqlcode = "INSERT INTO murga
        VALUES ('$murga_ko_name','$murga_ko_psd')";
    $k_bho_vai=mysqli_query($cont, $sqlcode); 
    if($k_bho_vai)  {

        echo "har ram timro id pad jham";
    }
       
    }
?>
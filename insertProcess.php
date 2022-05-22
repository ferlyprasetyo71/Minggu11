<?php
    include "myconnection.php";

    $name = $_POST["myname"];
    $address = $_POST["myaddress"];

    $query = "INSERT INTO strudent(name,address)
            VALUE('$name', '$address')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>
<?php
$fullName = filter_input(INPUT_POST, 'fullname');
$emailUsed = filter_input(INPUT_POST, 'email');

if (!empty($fullName)){
    if (!empty($emailUsed)){

        $host = "192.168.150.213";
        $dbusername = "webprogmi211";
        $dbpassword = "j@zzyAngle30";
        $dbname = "webprogmi211";

        // connections are inputted below //

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}else{
    $sql = "SELECT anvillaflor_MyGuests (id, fullname, email,)
    values ('$id', '$fullname', '$email')";
    if ($conn->query($sql)){
        echo "New Record has been added.";
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
    } 
    $conn->close();
    }

    }else{
        echo "Email is EMPTY, Please TRY AGAIN.";
        die();
    }
}else{
    echo"Name is REQUIRED, Please TRY AGAIN.";
}
?>
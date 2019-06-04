<?php

    $con = mysqli_connect ('188.214.20.2','root','');

    if (!con)
    {
      echo 'Not connected To Server';
    }
    if (!mysqli_select_db($con,'unhcfpdh_ideeclient'))
    {
      echo 'Database Not Selected';
    }

    $Name = $_POST['username'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];

    $sql = "INSERT INTRO idei (Name, Email, Message) VALUES ('$Name','$Email','$Message')";

    if(!mysqli_query($con, $sql))
    {
      echo 'Not Inserted';
    }

    else {
      echo 'Inserted';
    }

    header("refresh:2;url=index.html");
 ?>

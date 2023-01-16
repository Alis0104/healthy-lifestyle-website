<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $txtName = $_POST['txtName'];
        $txtEmail = $_POST['txtEmail'];
        $txtSubject = $_POST['txtSubject'];
        $txtMessage = $_POST['txtMessage'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healthy_lifestyle_webproject";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO `db_connect` (`id`, `name`, `email`, `subject`, `message`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject','$txtMessage')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>
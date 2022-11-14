<?php
session_start();
require '../model/database.php';

if(isset($_POST['save_multiple_checkbox']))
{
    $brands = $_POST['brands'];
    // echo $brands;

    foreach($brands as $item)
    {
        // echo $item . "<br>";
        $query = "INSERT INTO demo (name) VALUES ('$item')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
        $_SESSION['message'] = "Inserted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['message'] = "Data Not Inserted";
        header("Location: index.php");
    }
}
?>
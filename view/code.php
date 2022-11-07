<?php
session_start();
require '../model/database.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ../index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $year = mysqli_real_escape_string($con, $_POST['year']);

    $query = "UPDATE students SET name='$name', course='$course', year='$year' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: ../index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $pos1 = 1;
    $date = date('Y-m-d H:i:s');

    $query = "INSERT INTO students (name,course,year) VALUES ('$name','$course','$year')";
    $query1 = "INSERT INTO card (received, card_date) SET ('$pos1','$date')";
    $query2 = "INSERT INTO cased (received, case_date) SET ('$pos1','$date')";
    $query3 = "INSERT INTO lace (received, lace_date) SET ('$pos1','$date')";


    $query_run = mysqli_query($con, $query); // TABLE STUDENTS
    $query_run1 = mysqli_query($con, $query1); // TABLE CARD
    $query_run2 = mysqli_query($con, $query2); // TABLE CASE
    $query_run3 = mysqli_query($con, $query3); // TABLE LACE
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: ../index.php");
        exit(0);
    }
    if($query_run1)
    {
       
        header("Location: ../index.php");
        exit(0);
    }
    if($query_run2)
    {
       
        header("Location: ../index.php");
        exit(0);
    }
    if($query_run3)
    {
       
        header("Location: ../index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>
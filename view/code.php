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
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']); // FUTURE VARIABLE FOR CARD,LACE,CASE

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $card = mysqli_real_escape_string($con, $_POST['card_id']);
    $case = mysqli_real_escape_string($con, $_POST['case_id']);
    $lace = mysqli_real_escape_string($con, $_POST['lace_id']);
    $date = date("Y-m-d H:i:s");
    //updating student records
    $query = "UPDATE students SET name='$name', course='$course', year='$year', card_id='$card', case_id='$case', lace_id='$lace' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        //inserting student id card record
       
        if($card == 1){
            $query1 = "INSERT INTO cards (received,card_date) VALUES ('$student_id','$date')";
            $query_run1 = mysqli_query($con, $query1);
            if($query_run1){
                header("Location: ../index.php");
                exit(0);
            }else{
                
            }
        }else{
            $_SESSION['message'] = "Cards already received";
            header("Location: ../index.php");
            exit(0);
        }
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

    $query = "INSERT INTO students (name,course,year,card_id,lace_id,case_id) VALUES ('$name','$course','$year','','','')";
    // $query1 = "INSERT INTO card (received, card_date) SET ('$pos1','$date')";
    // $query2 = "INSERT INTO cased (received, case_date) SET ('$pos1','$date')";
    // $query3 = "INSERT INTO lace (received, lace_date) SET ('$pos1','$date')";


    $query_run = mysqli_query($con, $query); // TABLE STUDENTS
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
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
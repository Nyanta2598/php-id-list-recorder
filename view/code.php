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
    
    // UPDATING VARIABLE FOR NAME,COURSE,YEAR
    // $name = mysqli_real_escape_string($con, $_POST['name']);  
    // $course = mysqli_real_escape_string($con, $_POST['course']);
    // $year = mysqli_real_escape_string($con, $_POST['year']);
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']); 
    $card = mysqli_real_escape_string($con, $_POST['card_id']);
    $case = mysqli_real_escape_string($con, $_POST['case_id']);
    $lace = mysqli_real_escape_string($con, $_POST['lace_id']);
    $date = date("Y-m-d H:i:s");
    //updating student records
    $query = "UPDATE students SET card_id='$card', case_id='$case', lace_id='$lace' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {      
        // Card Sorter
        switch($card){
        case 0:
        // Delete Card
            $cardsql = "DELETE FROM cards WHERE received='$student_id' ";
            $result = mysqli_query($con, $cardsql); 
            if($result)
            {
                //$_SESSION['message'] = "Data Deleted Successfully!";
                header("Location: ../index.php");
            } 
            else
            {
                $_SESSION['message'] = "Data Not Deleted!. Error: " . $cardsql . "" . mysqli_error($con);
                header("Location: ../index.php");
            }
        return; 
        case 1:
        // Check Card
            $checker_id = "SELECT received FROM cards WHERE received='$student_id' LIMIT 1";
            $checker_card = mysqli_query($con, $checker_id);

            if(mysqli_num_rows($checker_card) > 0)
            {
            // Card Already Received
                $_SESSION['message'] = "Card Already Received";
                header("Location: ../index.php");
            }
            else
            {
                $query1 = "INSERT INTO cards (received,card_date) VALUES ('$student_id','$date')";
                $query_run1 = mysqli_query($con, $query1);
                if($query_run1)
                {
                    $_SESSION['message'] = "Card Received Successfully";
                    header("Location: ../index.php");
                }
                else
                {
                    $_SESSION['message'] = "Card Went Wrong!";
                    header("Location: ../index.php");    
                }
            }
            break;
        default:
            echo "Card error detected";
        } 
        // Case Sorter
        switch($case){
            case 0:
            // Delete Case
            $casesql = "DELETE FROM cased WHERE received='$student_id' ";
            $result1 = mysqli_query($con, $casesql); 
            if($result1)
            {
                //$_SESSION['message'] = "Data Deleted Successfully!";
                header("Location: ../index.php");
            } 
            else
            {
                $_SESSION['message'] = "Data Not Deleted!. Error: " . $casesql . "" . mysqli_error($con);
                header("Location: ../index.php");
            }
            break;
            case 1:
                // Check Card
                $checker_id1 = "SELECT received FROM cased WHERE received='$student_id' LIMIT 1";
                $checker_case = mysqli_query($con, $checker_id1);

                if(mysqli_num_rows($checker_case) > 0)
                {
                    // Case Already Received
                    $_SESSION['message'] = "Case Already Received";
                    header("Location: ../index.php");
                }
                else
                {
                    $query2 = "INSERT INTO cased (received,case_date) VALUES ('$student_id','$date')";
                    $query_run2 = mysqli_query($con, $query2);
                    if($query_run2)
                    {
                        $_SESSION['message'] = "Case Received Successfully";
                        header("Location: ../index.php");
                    }
                    else
                    {
                        $_SESSION['message'] = "Case Went Wrong!";
                        header("Location: ../index.php");  
                    }
                }
            break;
        default:
            echo "Lace error detected";
        }
        
        // Lace Sorter
        switch($lace){
            case 0:
            // Delete Lace
                $lacesql = "DELETE FROM lace WHERE received='$student_id' ";
                $result2 = mysqli_query($con, $lacesql); 
                if($result2)
                {
                    //$_SESSION['message'] = "Data Deleted Successfully!";
                    header("Location: ../index.php");
                } 
                else
                {
                    $_SESSION['message'] = "Data Not Deleted!. Error: " . $lacesql . "" . mysqli_error($con);
                    header("Location: ../index.php");
                }
            break;
            case 1:
            // Check Lace
                $checker_id2 = "SELECT received FROM lace WHERE received='$student_id' LIMIT 1";
                $checker_lace = mysqli_query($con, $checker_id2);
    
                if(mysqli_num_rows($checker_lace) > 0)
                {
                    // Lace Already Received
                    $_SESSION['message'] = "Lace Already Received";
                    header("Location: ../index.php");
                }
                else
                {
                    $query3 = "INSERT INTO lace (received,lace_date) VALUES ('$student_id','$date')";
                    $query_run3 = mysqli_query($con, $query3);
                    if($query_run3)
                    {
                        $_SESSION['message'] = "Lace Received Successfully";
                        header("Location: ../index.php");
                    }
                    else
                    {
                        $_SESSION['message'] = "Lace Went Wrong!";
                        header("Location: ../index.php");   
                    }
                }
                break;
            default:
                echo "Lace error detected";
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
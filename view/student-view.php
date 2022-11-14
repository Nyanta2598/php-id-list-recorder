<?php
require '../classes/database.php';
include_once('functions.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student View</title>
</head>
<body>
<?php include '../classes/nav.php'; ?>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details 
                            <a href="../index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id'";
                            $query_run = mysqli_query($con, $query);

                            $query1 = "SELECT * FROM cards WHERE received = '$student_id' ";         
                            $query_run1 =  mysqli_query($con,  $query1); 

                            $query2 = "SELECT * FROM cased WHERE received = '$student_id' ";         
                            $query_run2 =  mysqli_query($con,  $query2); 

                            $query3 = "SELECT * FROM lace WHERE received = '$student_id' ";         
                            $query_run3 =  mysqli_query($con,  $query3); 

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                $cards = mysqli_fetch_array($query_run1);
                                $case = mysqli_fetch_array($query_run2);
                                $lace = mysqli_fetch_array($query_run3);
                                ?>
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label>Student Name</label>
                                            <p class="form-control-lg">
                                                <?=$student['name'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3 col">
                                            <label>Course</label>
                                            <p class="form-control-lg">
                                                <?=course($student['course']);?>
                                            </p>
                                        </div>
                                        <div class="mb-3 col">
                                            <label>Year</label>
                                            <p class="form-control-lg">
                                                <?=year($student['year']);?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label>Card Received</label>
                                            <p>
                                                <?php 
                                                    if(mysqli_num_rows($query_run1) > 0)
                                                    {
                                                        echo $cards['card_date'];
                                                    }
                                                    else{
                                                        echo "<p>No Record</p>";
                                                    }
                                                ?>
                                            </p>
                                        </div>

                                        <div class="mb-3 col">
                                            <label>Case Received</label>
                                            <p>
                                                <?php 
                                                    if(mysqli_num_rows($query_run2) > 0)
                                                    {
                                                        echo $case['case_date'];
                                                    }
                                                    else{
                                                        echo "<p>No Record</p>";
                                                    }
                                                ?>
                                            </p>
                                        </div>

                                        <div class="mb-3 col">
                                            <label>Lace Received</label>
                                            <p>
                                                <?php 
                                                    if(mysqli_num_rows($query_run3) > 0)
                                                    {
                                                        echo $lace['lace_date'];
                                                    }
                                                    else{
                                                        echo "<p>No Record</p>";
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php
                                
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
session_start();
require '../classes/database.php';
include_once('adminfunction.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Edit</title>
</head>
<body>
<?php include '../classes/nav.php'; ?>
    <div class="container mt-5">

        <?php include('../classes/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="../home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="admincrud.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <input type="text" name="name" value="<?=$student['name'];?>" class="form-control" >
                                    </div>
                                    <div class="mb-3">
                                        <label>Course</label>
                                        <input type="text" name="course" value="<?=$student['course'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Year</label>
                                        <input type="text" name="year" value="<?=$student['year'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Card</label>
                                        <select id="one" name="card_id" class="form-select" aria-label="Default select example">
                                            <option value="<?=$student['card_id'];?>"><?php echo receiver($student['card_id']);?></option>
                                            <option value="0">Not Receive</option>
                                            <option value="1">Received</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Case</label>
                                        <select id="two" name="case_id" class="form-select" aria-label="Default select example">
                                            <option value="<?=$student['case_id'];?>"><?php echo receiver($student['case_id']);?></option>
                                            <option value="0">Not Receive</option>
                                            <option value="1">Received</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Lace</label>
                                        <select id="three" name="lace_id" class="form-select" aria-label="Default select example">
                                            <option value="<?=$student['lace_id'];?>"><?php echo receiver($student['lace_id']);?></option>
                                            <option value="0">Not Receive</option>
                                            <option value="1">Received</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
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
    <script>
        // document.getElementById("one").onchange = function () {
        // document.getElementById("two").setAttribute("disabled", "disabled");
        // document.getElementById("three").setAttribute("disabled", "disabled");
        // if (this.value == '1'){
        //     document.getElementById("two").removeAttribute("disabled");
        //     document.getElementById("three").removeAttribute("disabled");
        // }
        // else{}
        // };

        // document.getElementById("two").onchange = function () {
        // document.getElementById("one").setAttribute("disabled", "disabled");
        // document.getElementById("three").setAttribute("disabled", "disabled");
        // if (this.value == '1'){
        //     document.getElementById("one").removeAttribute("disabled");
        //     document.getElementById("three").removeAttribute("disabled");
        // }
        // else{}
        // };

        // document.getElementById("three").onchange = function () {
        // document.getElementById("one").setAttribute("disabled", "disabled");
        // document.getElementById("two").setAttribute("disabled", "disabled");
        // if (this.value == '1'){
        //     document.getElementById("one").removeAttribute("disabled");
        //     document.getElementById("two").removeAttribute("disabled");
        // }
        // else{}
        // };
        
    </script>
</body>
</html>
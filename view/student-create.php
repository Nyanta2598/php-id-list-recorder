<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('../view/message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add 
                            <a href="../index.php" class="ms-3 btn btn-danger float-end">BACK</a>
                            <a href="student-upload.php" class="px-3 btn btn-primary float-end">Bunch Upload Data</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Course</label>
                                <select name="course" id="course" class="form-select" aria-label="Default select example">
                                    <option selected>Course</option>
                                    <option value="BSIT">Bachelor of Science in Information Technology</option>
                                    <option value="BEED GENERALIST">Bachelor of Elementary Education</option>
                                    <option value="BSED ENGLISH">Bachelor of Secondary Education English</option>
                                    <option value="BSED FILIPINO">Bachelor of Secondary Education Filipino</option>
                                    <option value="BSED MATH">Bachelor of Secondary Education MATH</option>
                                    <option value="BSCRIM">Bachelor of Science in Criminology</option>
                                    <option value="BSPSYCH">Bachelor of Science in Psychology</option>
                                    <option value="BPED">Bachelor of Physical Education</option>
                                    <option value="BSIAS">Bachelor of Science in Accounting Information System</option>
                                    <option value="BSBA MM">Bachelor of Science in Business Administration Major in Marketing Management </option>
                                    <option value="BSTH">Bachelor of Science in Tourism Management</option>
                                    <option value="BSHM">Bachelor of Science in Hospitality Management</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Year Level</label>
                                <select name="year" id="year" class="form-select" aria-label="Default select example">
                                    <option selected>Year</option>
                                    <option value="1ST">1st Year</option>
                                    <option value="2ND">2nd Year</option>
                                    <option value="3RD">3rd Year</option>
                                    <option value="4TH">4th Year</option>
                                </select>
                            </div>
    
                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

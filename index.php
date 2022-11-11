<?php
    session_start();
    require 'model/database.php'; //connection
?>
<!doctype html>
<html lang="en">
<?php include 'templates/header.php'?>
<body>
    <div class="container-lg mt-5">
        <?php include('view/message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Details
                            <a href="view/student-create.php" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body justify-content-center">

                        <table id="example" class="table " >
                            <thead>
                                <tr>
                                    <th scope="col"><center>#</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col"><center>Course</th>
                                    <th scope="col"><center>Year</th>
                                    <th scope="col"><center>Card</th>
                                    <th scope="col"><center>Case</th>
                                    <th scope="col"><center>Lace</th>
                                    <th scope="col"><center>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                    $i = 1;
                                    $query = "SELECT * FROM students ";
                                    $query_run = mysqli_query($con, $query);
                                    while($student = mysqli_fetch_assoc($query_run)){
                                            ?>
                                            <tr>
                                                <th scope="row"><center><?php echo $i++; ?></td>
                                                <td><?php echo $student['name']; ?></td>
                                                <td><center><?php echo $student['course']; ?></td>
                                                <td><center><?php echo $student['year']; ?></td>
                                                <td><center>
                                                <input title="Received" data-toggle="tooltip" data-placement="top"
                                                type="checkbox" 
                                                    <?php if ($student['card_id'] == 1){
                                                            echo "checked";
                                                    } else {
                                                        echo "";
                                                    }?>
                                                    disabled/>
                                                </td>

                                                <td><center>
                                                    <input  title="Date" data-toggle="tooltip" data-placement="top"
                                                    type="checkbox" 
                                                    <?php if ($student['case_id'] == 1){
                                                            echo "checked";
                                                    } else {
                                                        echo "";
                                                    }?> 
                                                    disabled/>
                                                </td>

                                                <td><center>
                                                    <input title="Date" data-toggle="tooltip" data-placement="top"
                                                    type="checkbox" 
                                                    <?php if ($student['lace_id'] == 1){
                                                            echo "checked";
                                                    } else {
                                                        echo "";
                                                    }?> 
                                                    disabled/>
                                                </td>
                                          
                                                <!-- hidden button -->
                                                <td><center>
                                                    <a href="view/student-view.php?id=<?= $student['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="view/student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <!-- <form action="view/code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form> -->
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php 
                                        
                                    }  
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>                                 
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
            responsive: true,
            select: true,
            "pageLength": 5,
            lengthMenu: [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, 'All'],
            ],   
        });
    } );
    </script>
</body>
</html>
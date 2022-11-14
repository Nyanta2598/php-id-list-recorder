<?php
    session_start();
    require 'model/database.php'; //connection
    include_once('view/functions.php');
?>
<!doctype html>
<html lang="en">
<?php include 'templates/header.php'?>
<body>
<?php include 'templates/nav.php'; ?>
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
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-sm " >
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
                                                    type="checkbox" <?php echo checker($student['card_id']); ?> disabled/>
                                                </td>
                                                <td><center>
                                                    <input  title="Date" data-toggle="tooltip" data-placement="top"
                                                    type="checkbox" <?php echo checker($student['case_id']); ?> disabled/>
                                                </td>

                                                <td><center>
                                                    <input title="Date" data-toggle="tooltip" data-placement="top"
                                                    type="checkbox"<?php echo checker($student['lace_id']); ?> disabled/>
                                                </td>
                                          
                                                
                                                <td><center>
                                                    <a href="view/student-view.php?id=<?= $student['id']; ?>" data-toggle="modal" data-target="#view-student" class="btn btn-info btn-sm">View</a>
                                                    <a href="view/student-edit.php?id=<?= $student['id']; ?>"  class="btn btn-success btn-sm">Edit</a>
                                                    <!-- hidden delete button -->
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
    <!-- Modal -->
<div class="modal fade" id="view-student" tabindex="-1" role="dialog" aria-labelledby="view-student" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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
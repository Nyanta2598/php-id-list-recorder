<?php 
    session_start(); //session initiator
    require 'classes/database.php'; //connection
    include_once('view/functions.php'); //functions
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script> -->
    <?php include 'classes/header.php'?>
</head>
<body>
    <?php include 'classes/nav.php'; ?>
    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student List</h4>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="example" class="table table-sm display" >
                            <thead>
                                <tr>
                                    <th scope="col"><center>#</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col"><center>Course</th>
                                    <th scope="col"><center>Year</th>
                                    <th scope="col"><center>Card</th>
                                    <th scope="col"><center>Case</th>
                                    <th scope="col"><center>Lace</th>
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
                                          
                                                
                                        
                                            </tr>
                                            <?php 
                                        
                                    }  
                                ?>
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th></th>
                                    <th></th>
                                    <th>Card</th>
                                    <th>Case</th>
                                    <th>Lace</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
  $(document).ready(function () {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'print'
        ],
        initComplete: function () {
            this.api()
                .columns([2, 3])
                .every(function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
 
                            column.search(val ? '^' + val + '$' : '', true, false).draw();
                        });
 
                    column
                        .data()
                        .unique()
                        .sort()
                        .each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>');
                        });
                });
        },
    });
});
</script>
</html>
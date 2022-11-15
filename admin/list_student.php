<?php 
    session_start(); //session initiator
    error_reporting(0);
    require 'classes/database.php'; //connection
    include_once('controller/adminfunction.php'); //functions
    $page1="list";
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
                                        $id = $student['id'];

                                        $query1 = "SELECT * FROM cards WHERE received = '$id' ";         
                                        $query_run1 =  mysqli_query($con,  $query1); 
            
                                        $query2 = "SELECT * FROM cased WHERE received = '$id' ";         
                                        $query_run2 =  mysqli_query($con,  $query2); 
            
                                        $query3 = "SELECT * FROM lace WHERE received = '$id' ";         
                                        $query_run3 =  mysqli_query($con,  $query3); 

                                        $cards = mysqli_fetch_array($query_run1);
                                        $case = mysqli_fetch_array($query_run2);
                                        $lace = mysqli_fetch_array($query_run3);
                                ?>
                                <tr>
                                    <th scope="row"><center><?php echo $i++; ?></td>
                                    <td><?php echo $student['name']; ?></td>
                                    <td><center><?php echo $student['course']; ?></td>
                                    <td><center><?php echo $student['year']; ?></td>
                                    <td><center><?= $cards['card_date'];?></td>
                                    <td><center><?= $case['case_date'];?></td>
                                    <td><center><?= $lace['lace_date'];?></td> 
                                </tr>
                                <?php 
                                }  
                            ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><center>#</th>
                                    <th>Student Name</th>
                                    <th><center></th>
                                    <th><center></th>
                                    <th><center>Card</th>
                                    <th><center>Case</th>
                                    <th><center>Lace</th>
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
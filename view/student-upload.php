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

    <title>Student Upload</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('../view/message.php'); ?>
        <h1>IMPORT DATA HERE</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="import_file" class="form-control" />
            <button type="submit" name="save_excel_data" class="btn btn-primary mt-3">Import</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

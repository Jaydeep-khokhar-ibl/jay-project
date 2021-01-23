<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myfile_w = fopen("txtfile.txt", "w") or die("Unable to open file!");
    $txt = $_POST["inptxt"];
    fwrite($myfile_w, $txt);
    fclose($myfile_w);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

    </style>
</head>
<body>
<div class="container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inptxt">Edit your file:</label>
            <textarea class="form-control" rows="5" id="inptxt" name="inptxt"><?php echo readfile("txtfile.txt"); ?></textarea>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Add in File</button>
        </div>
    </form>

    <a class="btn btn-primary" href="phptoexcelfile.php">Download a file</a>

    <div>
        <?php
        $file = fopen("phptoexceldata.csv","r");
        while(! feof($file)){
            print_r(fgetcsv($file));
            echo "<br>";
        }
        fclose($file);
        ?>
    </div>
</div>
</html>
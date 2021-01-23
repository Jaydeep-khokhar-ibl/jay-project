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
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <style>

    </style>
</head>
<body>
<div class="container">
    <form id="form1">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="toast" data-autohide="true" style="border: 1px red solid;">
        <div class="toast-header">
        <strong class="mr-auto text-danger">Error!</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
        Plase Fill All Fields...
        </div>
    </div>
</div>
<script>
    $('#form1').submit(function (e) {
        e.preventDefault();
        var email = $.trim($('#email').val());
        var pwd = $.trim($('#pwd').val());
        if (email  === '' || pwd === '') {
            $(".toast").toast({ delay: 2000 });
            $('.toast').toast('show');
            return false;
        }else{
            //alert('form was submitted');
            $.ajax({
                type: "post",
                data: $('#form1').serialize(),
                url: 'formcheck.php',
                success: function(responseText){
                    alert(responseText);
                }
            });
        }
    });
</script>
</body>
</html>
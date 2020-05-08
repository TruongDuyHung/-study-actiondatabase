<?php
?>

<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/css2.css">
</head>
<body>
<form action="../action/register.php" method="post">
    <div class="container">
        <header class="heading"> Registration</header>
        <div class="row ">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="firstname">First Name :</label></div>
                    <div class="col-xs-8">
                        <input type="text" name="name" id="fname" placeholder="Enter your First Name"
                               class="form-control ">
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="firstname">Birthday</label></div>
                    <div class="col-xs-8">
                        <input type="date" name="birth" id="birthday"
                               class="form-control ">
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <label class="firstname">Address</label></div>
                        <div class="col-xs-8">
                            <input type="text" name="address" id="fname" placeholder="Enter your Address"
                                   class="form-control ">
                        </div>
                    </div>
             </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="mail">Email :</label></div>
                    <div class="col-xs-8">
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-4">
                        <label class="pass">Phone</label></div>
                    <div class="col-xs-8">
                        <input type="password" name="phone" id="password" placeholder="Enter your Phone"
                               class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <input type="submit" value="Register" class="btn float-right login_btn">
            </div>
        </div>
    </div>
</form>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
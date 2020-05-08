<?php //include "../navbar/index.php"; ?>
<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css3.css">
</head>
<body>
<div>
<form method="post" action="../action/changepassword.php">
    <label>
        <p class="label-txt">Current Account</p>
        <input type="text" class="input" name="currentacount">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">New Password</p>
        <input type="text" class="input" name="newpassword">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <label>
        <p class="label-txt">Confirm Password</p>
        <input type="text" class="input" name="comfirmpassword">
        <div class="line-box">
            <div class="line"></div>
        </div>
    </label>
    <button type="submit">Change</button>
</form>
</div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

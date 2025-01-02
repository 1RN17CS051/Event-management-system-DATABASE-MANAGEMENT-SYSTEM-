<?php
	include("dbcon.php");
session_start();
?>


<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ORGANIZER LOGIN</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
</head>
    <style>
       
        .login-box
        {
            margin-left:540px;
        }
        .heading
        {
            margin-right: 700px;
        }
    </style>

    <body>
        <?php require 'utils/pheader.php';?>
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">ORGANIZER LOGIN !!</h1>
                    <h1 align="center">_____________________</h1>
            <form method="POST" action="ORGANIZERLOGINCHECK.php" >
                 <div class="form-group">

                    User ID
            <input type="text" name="OID" placeholder="Enter User ID" class="form-control" required>
                </div>
                    <div class="form-group">

            Password
            <input type="password" name="PASSWORD" placeholder="Enter Password" class="form-control" required>
            </div>
                                <div class="form-group">

            <input type="submit" name="submit" value="Login" class = "btn btn-default">
                </div>
                            </form>
                    <h1 align="center">______________________</h1>
                    <h1 align="center">______________________</h1>
                    </div>
                </div>
             </div>
         <?php require 'utils/footer.php'; ?>
</body>
</html>
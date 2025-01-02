<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Update Result</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
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
    </head>
    


    <body>
        <?php require 'utils/header.php';?>
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Updated Details !!</h1>
                    <h1 align="center">_____________________</h1>
            <form name="loginform" method="POST" action="PASSWORDUPDATECHECK.php" >
               <?php
	include("dbcon.php");
session_start();?> 
                 <div class="form-group">
<input type="password" name="PPASSWORD" placeholder="Enter your old password" class="form-control" required>
                </div>
<div class="form-group">
<input type="password" name="PASSWORD" placeholder="Enter your new Password" class="form-control" required>
                </div>
                               <div class="form-group">
 
            <input type="submit" name="submit" value="Submit" class = "btn btn-default">
                                    <p></p>
                                    <p></p>
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
        
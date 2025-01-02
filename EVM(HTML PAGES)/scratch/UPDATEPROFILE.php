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
            <form name="loginform" method="POST" action="UPDATEPROFILECHECK.php" >
               <?php
	include("dbcon.php");
                session_start();?> 
          
                <h3 align="center" style="color:red">Please Remember Your Credendials....!!!</h3>
<p align="center">_________________________________</p>
            <h6 align="center"><div class="button_c" align="center"><a class="example_c" href="UPDATEPHONE.php">Phone No.</a></div></h6>
                       <h5 align="center">To update your <strong>phone no.</strong> click here.</h5>
<p align="center">_________________________________</p>
  
<h6 align="center"><div class="button_c" align="center"><a class="example_c" href="UPDATEEMAIL.php">Email Update</a></div></h6>
                       <h5 align="center">To update your <strong>Email</strong> click here.</h5>
<p align="center">_________________________________</p>
  <h6 align="center"><div class="button_c" align="center"><a class="example_c" href="UPDATEPASSWORD.php">Password..!</a></div></h6>                      
                       <h5 align="center">To update your <strong>Password</strong> click here.</h5>
<p align="center">_________________________________</p>

             <p></p>
                                    <p></p>
                               </div>
                            </form>
                    <h1 align="center">______________________</h1>
                    </div>
                </div>

        </div>
         <?php require 'utils/footer.php'; ?>
</body>
</html>
        
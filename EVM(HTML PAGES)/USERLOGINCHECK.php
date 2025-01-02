<?php
//redirection in another page after successful login
      $salt =md5('io!#asdf');
    function hashword($string,$salt)
       {
            $string=crypt($string,'$1$'.$salt.'$');
            return $string;
        }
	include("dbcon.php");
session_start();	
?>
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>USER LOGIN</title>
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
        <?php require 'utils/header3.php';?>
<?php
	if(isset($_POST['submit']))
	{
		
		$USN=$_POST['USN'];
		$PASSWORD=$_POST['PASSWORD'];
        $PASSWORD=hashword($PASSWORD,$salt);
		$qry="SELECT * FROM `user` WHERE USN='$USN' and PASSWORD='$PASSWORD';";
		$run=mysqli_query($conn,$qry);
		$row=mysqli_num_rows($run);
        
            if($row == 1)
			{

								echo "login successfully";
                                $_SESSION['uid']=$USN;
								header('Location:USERLOGINDETAILS.php'); 
                                exit;
					
						
			}
        else
        {
 		$qry1="SELECT * FROM `user`";
		$run1=mysqli_query($conn,$qry1);
		$data1=mysqli_fetch_assoc($run1);
        if($data1['USN']==$USN)
            { ?>
        <h3 align="center" style="color:red">Incorrect UserID/Password<h5 align="center">Login with right credentials</h5></h3>
        <?php goto J;
            }
        }
                header('Location:USERLOGINFAIL.php');
                exit;
        
    }
J :    ?>
    <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Welcome to User Login</h1>
                    <h1 align="center">_____________________</h1>
            <form method="POST" action="USERLOGINCHECK.php" >
                 <div class="form-group">

                    User ID
            <input type="text" name="USN" placeholder="Enter User ID" class="form-control" required>
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
    
 
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
        <?php require 'utils/header.php';?><?php
//redirection in another page after successful login
      $salt =md5('io!#asdf');
    function hashword($string,$salt)
       {
            $string=crypt($string,'$1$'.$salt.'$');
            return $string;
        }
	include("dbcon.php");
session_start();
    $s=$_SESSION['uid']; 
                
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{   
                    $s=$_SESSION['uid']; 
                     $p=$_POST['PASSWORD'];
                     $pp=$_POST['PPASSWORD'];
                   $pp=hashword($pp,$salt);
                    $qry="select PASSWORD from user where USN='$s' AND PASSWORD='$pp';";
                    $run=mysqli_query($conn,$qry);
                    $row=mysqli_num_rows($run);
               if($row==0)
               {
                  goto h;
                }
    else
{
         $p=hashword($p,$salt);
                     $qry1="UPDATE user SET PASSWORD='$p' WHERE USN='$s';" ; 
                    $run1=mysqli_query($conn,$qry1);
                      header('Location:PASSWORDUPDATESUCC.php');
                        exit;
                                  }
  }          
    else
        {
            echo "h";    
        }
h:
?>
     <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Updated Details !!</h1>
                         <h2 align="center" style="color:red">Enter Your Previous Password correctly !!</h2>
              
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
                
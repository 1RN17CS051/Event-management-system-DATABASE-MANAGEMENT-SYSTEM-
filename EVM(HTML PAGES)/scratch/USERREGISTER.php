<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>USER REGISTER</title>
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
<script>
		function checkpass()
		{
			var p=loginform.password.value;
			var c=loginform.Confirm_Password.value;
			if(p!=c)
			{
				alert("mismatch in password");
			}
		}
	</script>
    </head>
    <body>
        <?php require 'utils/header3.php';?>
<?php
        $salt =md5('io!#asdf');
    function hashword($string,$salt)
       {
            $string=crypt($string,'$1$'.$salt.'$');
            return $string;
        }
	include("dbcon.php");
session_start();
        
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{
		$usn=$_POST['USN'];
        $fname=$_POST['FNAME'];
		$lname=$_POST['LNAME'];
		$dob=$_POST['DOB'];
		$dname=$_POST['NAME'];
        $email=$_POST['EMAIL'];
		$phone=$_POST['PHONE'];
		$psw=$_POST['PASSWORD'];
		$cpsw=$_POST['Confirm_Password'];
        $qry1="select USN from user where USN='$usn'";
        $run1=mysqli_query($conn,$qry1);
		$row1=mysqli_num_rows($run1);
		if($row1==1){
            header('Location:LOGINPRESENT.php');
            exit;
        }
            else
            {
                if($psw!=$cpsw)
                {
                    goto h;
                }
                else
                {
                    $qry1="select d.DID from department d where NAME='$dname';";
		$run1=mysqli_query($conn,$qry1);
        $data1=mysqli_fetch_assoc($run1);
            $did=$data1['DID'];
         $psw=hashword($psw,$salt);
                    
		$qry="INSERT INTO user(`USN`,`FNAME`,`LNAME`,`DOB`,DID,`EMAIL`,`PHONE`, `PASSWORD`) VALUES ('$usn','$fname','$lname','$dob',$did,'$email','$phone','$psw')";
		$run=mysqli_query($conn,$qry);
           header('Location:USERREGISTERSUCCESSFULL.php');
            }}}
else
{
    echo "Failed To Connect";
}
?>	


         
              <?php h: ?>     <h3 align="center" style="color:red"><strong>Password</strong> and <strong>Confirm Password</strong> must match...!!</h3>
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">SIGN UP !!</h1>
                    <h1 align="center">_____________________</h1>
            <form name="loginform" method="POST" action="USERREGISTER.php" >
                 <div class="form-group">

                    User ID
            <input type="text" name="USN" placeholder="Enter USN" class="form-control" required>
                </div>                 <div class="form-group">

                    First Name
            <input type="text" name="FNAME" placeholder="Enter your First Name" class="form-control" required>
                </div>
                 <div class="form-group">

                    Last Name
            <input type="text" name="LNAME" placeholder="Enter Last Name" class="form-control" required>
                </div>
                 <div class="form-group">

                    DOB
            <input type="date" name="DOB" placeholder="Enter Date Of Birth" class="form-control" required>
                </div>
                 <div class="form-group">

                    Departtment ID
<p>(ex: CSE-01,ECE-02,ISE-03,EEE-05,ME-06,CV-07)</p>
                     <?php
                     include("dbcon.php");
                     session_start();
               
               ?>
         <select name="DID" placeholder="Enter Deartment ID" class="form-control" required> <?php
                
             $qry="select DID from department"; 
                $run=mysqli_query($conn,$qry);
               while($data=mysqli_fetch_array($run))
               {?>
               
               <option name="DID"><?php echo $data['DID'] ?></option>
                     <?php }?> 
                </select>
                </div>       
                <div class="form-group">

                    Email
            <input type="email" name="EMAIL" placeholder="Enter Email" class="form-control" required>
                </div>
                 <div class="form-group">

                    Phone No.
            <input type="text" name="PHONE" placeholder="Enter Phone No." class="form-control" required>
                </div>

                    <div class="form-group">

            Password
            <input type="password" name="PASSWORD" placeholder="Enter Password" class="form-control" required>
            </div>
                                <div class="form-group">
            Confirm Password
            <input type="password" name="Confirm_Password" placeholder="Enter Password Again" class="form-control" required>
            </div>
                                <div class="form-group">

            <input type="submit" name="submit" value="Submit" class = "btn btn-default" onclick="checkpass()">
                                    <p></p>
                                    <p></p>
                                    <p align="center">Already Registered...??</p><div class="button_c" align="center"><a class="example_c" href="USER_LOGIN.php">Click Here</a></div>
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
        
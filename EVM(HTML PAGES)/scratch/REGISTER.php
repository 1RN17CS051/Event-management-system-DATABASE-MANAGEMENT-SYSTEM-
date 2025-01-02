
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>USER REGISTER</title>
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

    <body>
        <?php require 'utils/header.php';?>
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

                    Department
                     <?php
                     include("dbcon.php");
                     session_start();
               
               ?>
         <select name="NAME" placeholder="Enter Deartment Name" class="form-control" required> <?php
             $qry="select NAME from department"; 
                $run=mysqli_query($conn,$qry);
               while($data=mysqli_fetch_array($run))
               {?>
               <option name="NAME"><?php echo $data['NAME'] ?></option>
                     <?php }?> 
                </select>
                </div>       
                <div class="form-group">

                    Email
            <input type="email" name="EMAIL" placeholder="Enter Email" class="form-control" required>
                </div>
                 <div class="form-group">

                    Phone No.
            <input type="number" name="PHONE" placeholder="Enter Phone No." class="form-control" required>
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
        
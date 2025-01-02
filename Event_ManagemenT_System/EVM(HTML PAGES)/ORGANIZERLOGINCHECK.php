<?php
//redirection in another page after successful login

	include("dbcon.php");
session_start();	

	if(isset($_POST['submit']))
	{
		
		$OID=$_POST['OID'];
		$PASSWORD=$_POST['PASSWORD'];
		$qry="SELECT * FROM organizer WHERE OID='$OID' and PASSWORD='$PASSWORD';";
		$run=mysqli_query($conn,$qry);
		$row=mysqli_num_rows($run);

        
            if($row == 1)
			{
			            $_SESSION['uid']=$OID;
			            header('Location:ORGANIZERPAGE.php');
				exit;
						}
						
			else
			{
				echo 'error';
				header('Location:ORGANIZERLOGINFAIL.php');
				exit;
				
			}
			}
?>
    
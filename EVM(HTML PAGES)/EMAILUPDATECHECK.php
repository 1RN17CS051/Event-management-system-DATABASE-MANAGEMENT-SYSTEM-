 <?php
	include("dbcon.php");
session_start();
    $s=$_SESSION['uid']; 
                
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{   
                    $s=$_SESSION['uid']; 
                     $e=$_POST['EMAIL'];
                     $qry1="UPDATE user SET EMAIL='$e' WHERE USN='$s';" ; 
                    $run=mysqli_query($conn,$qry1);
                      header('Location:EMAILUPDATESUCC.php');
                        exit;
                                  }
            
    else
        {
            echo "h";    
        }
?>	

        
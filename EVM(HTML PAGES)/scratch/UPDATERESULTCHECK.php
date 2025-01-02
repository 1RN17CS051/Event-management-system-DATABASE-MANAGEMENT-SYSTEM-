 <?php
	include("dbcon.php");
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{   
                     $eid=$_POST['EID'];
                     $win=$_POST['WINNER'];
                    $des=$_POST['DESCRIPTION'];
                    $qry1="UPDATE result SET WINNER='$win',DESCRIPTION='$des' WHERE EID='$eid';";
                    $run1=mysqli_query($conn,$qry1);
                     header('Location:UPDATESUCCESSFULL.php');
                      }
            
    else
        {
            echo "h";    
        }
?>	

        
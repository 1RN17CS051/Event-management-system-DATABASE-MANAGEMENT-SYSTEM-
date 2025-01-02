 <?php
	include("dbcon.php");
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{                $eid=$_POST['EID'];
                     $win=$_POST['WINNER'];
                    $des=$_POST['DESCRIPTION'];
		        $qry1="select * from result where EID='$eid'";
                    $run1=mysqli_query($conn,$qry1);
                     $row=mysqli_num_rows($run1);
             if($row==1)
             {
                 header('Location:UPDATERESULTS.php');
                exit;
              }      
     else{
                        $qry="INSERT INTO result(`EID`, `WINNER`, `DESCRIPTION`) VALUES ('$eid', '$win', '$des')";
                        $run=mysqli_query($conn,$qry);
                        header('Location:RESSG.php');
                                 exit;
                                  }
    }
    else
        {
            echo "h";    
        }
?>	

        
<?php
	include("dbcon.php");
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{
		$eid=$_POST['EID'];
                                $name=$_POST['NAME'];
		$type=$_POST['TYPE'];
		$oid=$_POST['OID'];
		$dname=$_POST['DNAME'];
        $des=$_POST['DESCRIPTION'];
		$lname=$_POST['LNAME'];
		$std=$_POST['SDATE'];
		$etd=$_POST['EDATE'];
        $qry1="select LID from location";
        $run=mysqli_query($conn,$qry1);
        $data=mysqli_fetch_assoc($run);
                
		if($oid==$_SESSION['uid'] ){
             $qry2="select d.DID from department d where NAME='$dname';";
		$run2=mysqli_query($conn,$qry2);
        $data2=mysqli_fetch_assoc($run2);
            $did=$data2['DID'];
                     $qry3="select LID from location l where NAME='$lname';";
		$run3=mysqli_query($conn,$qry3);
        $data3=mysqli_fetch_assoc($run3);
            $lid=$data3['LID'];
	
		$qry="INSERT INTO event(`NAME`, `TYPE`, OID, `DESC`, `SDATE`, `EDATE`, LID,DID) VALUES ('$name','$type',$oid,'$des','$std','$etd',$lid,$did)";
		$run=mysqli_query($conn,$qry);
         header('Location:ORGANIZEEVENTSUCCESSFUL.php');	
        }
        else
        {
            echo "h";    
        }
    }
    else
        {
            echo "hello";
        }
?>	


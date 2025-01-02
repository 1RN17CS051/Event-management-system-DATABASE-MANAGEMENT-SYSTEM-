<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>REGISTER EVENT</title>
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
<?php
	include("dbcon.php");
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{                $eid=$_POST['EID'];
		              $userid=$_POST['USN'];
        
				              if($userid==$_SESSION['uid'] ){

                      
                        $qry="select r.USN,u.USN,r.EID from records r,user u where r.USN='$userid' AND r.EID='$eid'";
                        $run=mysqli_query($conn,$qry);
                while($data=mysqli_fetch_array($run))
                      {
                             if($data['EID']==$eid)
                              {     
                                ?> <h3 align =center style="color:red"> User Already Registered for the Event !!!</h3><?php goto g;
                              }
                       }                      
		   $qry1="INSERT INTO records(EID,`USN`) VALUES($eid,'$userid')";
		   $run1=mysqli_query($conn,$qry1);
           header('Location:REGISTEREVENTSUCCESSFUL.php');
                                 exit;
                                  }
                               }
    else
        {
            echo "h";    
        }
?>	

<?php g: ?>
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Event Details !!</h1>
                    <h1 align="center">_____________________</h1>
            <form name="loginform" method="POST" action="REGISTEREVENTCHECK.php" >
                
                 <div class="form-group">
                    Event ID
                     <?php
                     include("dbcon.php");
                     session_start();
                $qry="SELECT * FROM  event e,result r where r.EID!=e.EID";
                $run=mysqli_query($conn,$qry);
               ?>
           <select name="EID" placeholder="Enter Event ID" class="form-control" required> <?php
                while($data=mysqli_fetch_array($run))
                {?>
               <option name="EID"><?php echo $data['EID'] ?></option>
                     <?php }?> </select></div>       
       
           <div>
            <?php   include("dbcon.php");
            $qry1="SELECT e.EID,e.NAME FROM event e";
              $run1=mysqli_query($conn,$qry1);
             while($data1=mysqli_fetch_array($run1))
              {?>
               <h5 align="center"> <?php echo $data1['NAME'] ?> 
               <p align=>Event ID  :<?php echo $data1['EID'] ?></p>
                  
                </h5>
                  <?php }?>
                    </div>
           <div class="form-group">
  Enter your ID to confirm Registration:
           <select name="USN" placeholder="Enter User ID" class="form-control" required>
               <option name="USN"><?php echo $_SESSION['uid']?></option>
                      </select></div>       
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
        
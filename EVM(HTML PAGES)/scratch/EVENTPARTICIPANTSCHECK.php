<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EVENT RESULTS</title>
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
        <?php require 'utils/header5.php';?>
 <?php
	include("dbcon.php");
               session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
	if(isset($_POST['submit']))
	{    $eid=$_POST['EID'];
         $qry1="select u.USN,u.FNAME,u.LNAME,u.EMAIL,u.PHONE,u.DID,r.RID FROM user u,records r WHERE r.EID= '$eid' AND u.USN=r.USN;";
        $run1=mysqli_query($conn,$qry1);
        $row=mysqli_num_rows($run1);
    
     if($row==0)
             {?>
                <h3 align="center" style="color:red">NO Participants yet....!!!!!</h3>  <?php
               goto h;
              }  
        else
        {
            ?><h3 align="center" style="color:red">Total No. of Participants  :  <?php echo  $row;   ?> 
        </h3>
        <h1 align="center">_____________________</h1>
        <?php
    while ($data=mysqli_fetch_array($run1))
    {        
   
    $qry2="select NAME from department where DID='$data[DID]'";
        $run2=mysqli_query($conn,$qry2);
            $data1=mysqli_fetch_assoc($run2)
    ?>
     <?php   
    
              ?>
        
        <h5 align="center">NAME :  <?php echo $data['FNAME']; ?> <?php echo $data['LNAME']; ?></h5>
        <h5 align="center">USN :  <?php echo $data['USN']; ?> </h5>
        <h5 align="center">EMAIL :  <?php echo $data['EMAIL']; ?> </h5>
        <h5 align="center">PHONE :  <?php echo $data['PHONE']; ?> </h5>
    <?php    $data=mysqli_fetch_assoc($run2); ?>
        <h5 align="center">DEPARTMENT :  <?php echo $data1['NAME']; ?> </h5>
          <h1 align="center">_____________________</h1>
        <?php    }
            
    }}
    else
        {
            echo "h";    
        }
	
h :
        
     ?>       <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Event Details !!</h1>
                    <h1 align="center">_____________________</h1>
             <form name="loginform" method="POST" action="EVENTPARTICIPANTSCHECK.php" >
                
                                <div class="form-group">
                    Event ID
                     <?php
                     include("dbcon.php");
                     session_start();
               
               ?>
         <select name="EID" placeholder="Enter Event ID" class="form-control" required> <?php
                $e=$_SESSION['uid'];
             $qry2="select * from records"; 
                $run2=mysqli_query($conn,$qry2);
               while($data2=mysqli_fetch_array($run2))
               {
                   $d=$data2['EID'];
               if($data2['USN']==$e)
               {
                    $qry="SELECT * FROM event where EID='$d'";
                $run=mysqli_query($conn,$qry);
                while($data=mysqli_fetch_array($run))
                {?>
               <option name="EID"><?php echo $data2['EID'] ?></option>
                     <?php } }}?> 
                </select>
                </div>       
          
                <br><br>
 
        <div class="form-group">
 
            <input type="submit" name="submit" value="Submit" class = "btn btn-default">
                            <br><br>
                                    <p></p>
                                    <p></p>
                               </div>
                            </form>   
                     <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
            <?php $qry3="select * from records"; 
                $run3=mysqli_query($conn,$qry3);
               while($data3=mysqli_fetch_array($run3))
               {
                   $d=$data3['EID'];
               if($data3['USN']==$e)
               {
                    $qry4="SELECT * FROM event where EID='$d'";
                $run4=mysqli_query($conn,$qry4);
                while($data4=mysqli_fetch_array($run4))
                {?>
               <h3 text-align="center"><?php echo $data4['NAME']?></h3>
                <h5 text-align="center">Event ID : <?php echo $data4['EID']?></h5><?php  } }}?>        
            
                    
                    </div>
                </div>
        <h1 align="center">______________________</h1>
                    <h1 align="center">______________________</h1>
                </div>
             </div>
        </div>
         <?php require 'utils/footer.php'; ?>
</body>
</html>
        
      
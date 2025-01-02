<?php 
	        include("dbcon.php");
            session_start();
        if(isset($_POST['submit']))
	{
		$_SESSION['EID']=$_POST['EID'];
        }
?>
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PUBLISH RESULT</title>
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
                $eid=$_SESSION['EID'];?> 
             
  <?php
                     $qry="SELECT * FROM  records where EID='$eid' AND POINTS='NULL'";
                $run=mysqli_query($conn,$qry); 
                     $row=mysqli_num_rows($run);
                     if($row>0){?>
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Event Details !!</h1>
                    <h1 align="center">_____________________</h1>
            <form name="loginform" method="POST" action="GENERATERESULTSCHECK1.php" >
                 <div class="form-group">
                    
                    
                     USN
           <select name="USN" placeholder="Enter USN" class="form-control" required> <?php
                while($data=mysqli_fetch_array($run))
                {    ?>
               <option name="USN" required><?php echo $data['USN'] ?></option>
                     <?php } ?> </select></div>       
       
        
            <div class="form-group">

            POINTS
            <input type="number" name="POINTS" placeholder="Enter the POINTS" class="form-control" required>
            </div>
               
               <div class="form-group">
 
            <input type="submit" name="submit" value="Submit" class = "btn btn-default">
                                    <p></p>
                                    <p></p>
                               </div>
                            </form>
                    <?php }
                     else{
                          
                           $qry2="SELECT * FROM  result where EID='$eid'";
                     $run2=mysqli_query($conn,$qry2); 
                     $row2=mysqli_num_rows($run2);
                         if($row2==1){
                    ?><h3 align="center" style="color:red">Result has been submitted already.!!</h3>
                    <?php }
                    else {
                    ?><h4><div class="button_c" align="center"><a class="example_c" href="PUBLISHRESULTCONFIRM.php" >PUBLISH RESULT</a></div></h4><?php }}?>
                    <h1 align="center">______________________</h1>
                    <h1 align="center">______________________</h1>
                    </div>
                </div>

        </div>
         <?php require 'utils/footer.php'; ?>
</body>
</html>
        
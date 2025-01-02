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
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Event Details !!</h1>
                    <h1 align="center">_____________________</h1>
            <form name="loginform" method="POST" action="GENERATERESULTSCHECK.php" >
               <?php
	       include("dbcon.php");
          session_start();?> 
                 <div class="form-group">
                    Event ID
                     <?php
                     
                $qry="SELECT * FROM  event e, records r where r.EID=e.EID GROUP BY e.EID";
                $run=mysqli_query($conn,$qry);  
                   ?>
           <select name="EID" placeholder="Enter Event ID" class="form-control" required> <?php
                while($data=mysqli_fetch_array($run))
                {
      if($data['OID']==$_SESSION['uid']){     ?>
               <option name="EID" required><?php echo $data['EID'] ?></option>
                     <?php }} ?> </select></div>       
       
           <div>
            <?php   include("dbcon.php");
            $qry1="SELECT e.EID,e.NAME,e.OID FROM event e,records r where e.EID=r.EID GROUP BY e.EID";
              $run1=mysqli_query($conn,$qry1);
             while($data1=mysqli_fetch_array($run1))
              {
           if($_SESSION['uid']==$data1['OID'])
{
             ?>  <h5 align="center"> <?php echo $data1['NAME'] ?> 
               <p align=>Event ID  :<?php echo $data1['EID'] ?></p>                
                </h5>
                  <?php } }?>
                    </div>
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
      
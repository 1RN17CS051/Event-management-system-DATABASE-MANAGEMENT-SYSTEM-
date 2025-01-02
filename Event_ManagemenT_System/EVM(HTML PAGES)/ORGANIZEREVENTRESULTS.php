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
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Event Details !!</h1>
                    <h1 align="center">_____________________</h1>
             <form name="loginform" method="POST" action="ORGANIZEREVENTRESULTCHECK.php" >
             <div class="form-group">
                    Event ID
                     <?php
                     include("dbcon.php");
                     session_start();
               
               ?>
         <select name="EID" placeholder="Enter Event ID" class="form-control" required> <?php
                
             $qry2="select * from event"; 
                $run2=mysqli_query($conn,$qry2);
               while($data2=mysqli_fetch_array($run2))
               {
                   $d=$data2['EID'];
               if($data2['OID']==$_SESSION['uid'])
               {
                    $qry="SELECT * FROM event where EID='$d'";
                $run=mysqli_query($conn,$qry);
                while($data=mysqli_fetch_array($run))
                {?>
               <option name="EID"><?php echo $data2['EID'] ?></option>
                     <?php }}}?> 
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
            <?php $qry3="select * from event"; 
                $run3=mysqli_query($conn,$qry3);
               while($data3=mysqli_fetch_array($run3))
               {
                   $d=$data3['EID'];
               if($data3['OID']==$_SESSION['uid'])
               {
                    $qry4="SELECT e.EID,e.NAME FROM event e where EID='$d'";
                $run4=mysqli_query($conn,$qry4);
                while($data4=mysqli_fetch_array($run4))
                {?>
               <h3 text-align="center"><?php echo $data4['NAME']?></h3>
                <h5 text-align="center">Event ID : <?php echo $data4['EID']?>
            </h5>
<?php }}?>        
            <?php }?>
                    
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
        
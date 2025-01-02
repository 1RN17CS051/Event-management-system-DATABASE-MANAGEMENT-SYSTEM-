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
        <?php require 'utils/header.php';?>
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Event Details !!</h1>
                    <h1 align="center">_____________________</h1>
             <form name="loginform" method="POST" action="USEREVENTRESULTCHECK.php" >
                
                                <div class="form-group">
                    Event ID
                     <?php
                     include("dbcon.php");
                     session_start();
               
               ?>
         <select name="EID" placeholder="Enter Event ID" class="form-control" required> <?php
                
             $qry2="select EID from records where USN='$_SESSION[uid]'"; 
                $run2=mysqli_query($conn,$qry2);
               while($data2=mysqli_fetch_array($run2))
               {
                   $d=$data2['EID'];
                    $qry="SELECT EID FROM event where EID='$d'";
                $run=mysqli_query($conn,$qry);
                while($data=mysqli_fetch_array($run))
                {?>
               <option name="EID"><?php echo $data['EID'] ?></option>
                     <?php 
                
                     }}?> 
                </select>
                </div>       
           
                <br><br>
 
        <div class="form-group">
 
            <input type="submit" name="submit" value="Submit" class = "btn btn-default">
                            
                            </form>   
                     <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
            <?php $qry3="select * from records where USN='$_SESSION[uid]'"; 
                $run3=mysqli_query($conn,$qry3);
               while($data3=mysqli_fetch_array($run3))
               {
                $qry4="SELECT * FROM event where EID='$data3[EID]'";
                $run4=mysqli_query($conn,$qry4);
                while($data4=mysqli_fetch_array($run4))
                {?>
               <h3 text-align="center"><?php echo $data4['NAME']?></h3>
                <h5 text-align="center">Event ID : <?php echo $data4['EID']?></h5><?php }?>        
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
        
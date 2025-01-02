<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ORGANIZED EVENTS</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
        <style>
        .example_c {
color: #494949 !important;
text-transform: uppercase;
text-decoration: none;
background: #ffffff;
padding: 20px;
border: 4px solid #494949 !important;
display: inline-block;
transition: all 0.4s ease 0s;
}
.example_c:hover {
color: #ffffff !important;
background: #f6b93b;
border-color: #f6b93b !important;
transition: all 0.4s ease 0s;
}</style>
    </head>
    <body>
        
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
<div class="content"><!--body content holder-->
            <div class="container">
                     <h5><div class="button_c" align="center"><a class="example_c" href="DEREGISTER.php" >DE-Register.!!</a></div></h5>
                  <h2 align="center">_____________________________</h2>
                     <h5><div class="button_c" align="center"><a class="example_c" href="RESULTS.php" >EVENT RESULTS..</a></div></h5>
                  <h2 align="center">_____________________________</h2>
                <?php   include("dbcon.php");
                 session_start();
                
              $qry="SELECT  r.RID,r.USN,r.EID FROM records r WHERE r.USN='$_SESSION[uid]'";
              $run=mysqli_query($conn,$qry);
                $row=mysqli_num_rows($run);
                if($row==0){
            header('Location:NOEVENTREGISTERED.php');
            exit;
              }
            else
            {
             while($data1=mysqli_fetch_array($run))
              {
                  $qry1="SELECT * FROM event WHERE EID='$data1[EID]'";
              $run1=mysqli_query($conn,$qry1);
                 while($data=mysqli_fetch_array($run1))
                 { 
              ?>
                        
                    <h3 align="center"><?php echo $data['NAME']?></h3>
                        <h5 align="center">Registration ID :<?php echo $data1['RID']?>
                        <h5 align="center">Event ID  :<?php echo $data['EID']?></h5><h5 align="center">Type  :<?php echo $data['TYPE']?></h5>
                    <h5 align="center"> Description :<?php echo $data['DESC']?></h5>
                             <h5>
                <?php $qry5="select NAME from department where DID='$data[OID]'";
                $run5=mysqli_query($conn,$qry5);
                      $data5=mysqli_fetch_assoc($run5); ?>       
                   <h5 align="center"> Department :<?php echo $data5['NAME']?>
                </h5>
                    <h5 align="center">Start Date  :<?php echo $data['SDATE']?></h5>
                    <h5 align="center"> End Date :<?php echo $data['EDATE']?></h5>
                <?php 
        
         $qry1="select l.NAME,l.LID from location l,event e where l.LID=e.LID";
          $run1=mysqli_query($conn,$qry1);
         while($data1=mysqli_fetch_array($run1))
         {if($data1['LID']==$data['LID'])
         {
               ?>  <h5 align="center"> Location :<?php echo $data1['NAME']?></h5>
                    
                    
                    <?php break; }}break;}}}?>
                    
                 <h2 align="center"><strong>E.V.E.N.T.R.O.N</strong></h2>
                    <h2 align="center">_____________________________</h2>
                    
                        
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--event content-->
                <section>
                    <div class="container">
                        <h></h>
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			<!--container div-->	
                </div>
                </div>
          	
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
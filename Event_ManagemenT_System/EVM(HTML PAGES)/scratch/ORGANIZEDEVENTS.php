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
        
        <?php require 'utils/header5.php'; ?><!--header content. file found in utils folder-->
<div class="content"><!--body content holder-->
            <div class="container">
                 <h5><div class="button_c" align="center"><a class="example_c" href="REMOVEEVENT.php" >Remove Event..!</a></div></h5>
                  <h2 align="center">_____________________________</h2>
                 <h5><div class="button_c" align="center"><a class="example_c" href="GENERATEEVENTRESULTS.php" >Publish Results..</a></div></h5>
                  <h2 align="center">_____________________________</h2>
                 <h5><div class="button_c" align="center"><a class="example_c" href="ORGANIZEREVENTRESULTS.php" >View Results..</a></div></h5>
                  <h2 align="center">_____________________________</h2>
                 <h5><div class="button_c" align="center"><a class="example_c" href="EVENTPARTICIPANTS.php" >View Participants..</a></div></h5>
                  <h2 align="center">_____________________________</h2>
 <?php   include("dbcon.php");
                 session_start();
                $f=$_SESSION['uid'];
              $qry="SELECT e.EID,e.NAME,e.TYPE,e.DESC,e.SDATE,e.EDATE,e.LID,e.OID FROM event e WHERE e.OID='$f'";
                $run=mysqli_query($conn,$qry);
                $row=mysqli_num_rows($run);
                if($row==0)
           { 
            header('Location:ORGANIZEDEVENTNOTFOUND.php');
            exit;
           }
      
                 else
                 {
                while($data=mysqli_fetch_array($run))
                  {
                      
              if($_SESSION['uid']==$data['OID'])
              {?>
                    <h3 align="center"><?php echo $data['NAME']?></h3>
                    
                    <h5 align="center">Event ID  :<?php echo $data['EID']?></h5><h5 align="center">Type  :<?php echo $data['TYPE']?></h5>
                    <h5 align="center"> Description :<?php echo $data['DESC']?></h5>
                    <h5 align="center">Start Date  :<?php echo $data['SDATE']?></h5>
                    <h5 align="center"> End Date :<?php echo $data['EDATE']?></h5>
                    <h5 align="center"> Location :<?php 
        
         $qry1="select l.NAME,l.LID from location l,event e where l.LID=e.LID;";
          $run1=mysqli_query($conn,$qry1);
         while($data1=mysqli_fetch_array($run1))
         {if($data1['LID']==$data['LID'])
         {echo $data1['NAME']?></h5>
                    
                    
                    <?php  break;}}}}}?>
                    
                   
                    <h2 align="center">______________________________</h2>
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
			
           </div>
                    
                </div>
			
        <?php require 'utils/footer.php'; ?><!--footer content. file found in 
utils folder-->
                        
    </body>
</html>
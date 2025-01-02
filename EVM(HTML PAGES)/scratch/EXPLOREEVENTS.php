<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EVENTS</title>
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
 <?php   include("dbcon.php");
                 session_start();
              
            $qry2="select * from event e where e.EID not in (select r.EID from result r)
";
                
              $run=mysqli_query($conn,$qry2);
                $row=mysqli_num_rows($run);
                if($row==0)
                {
                header('Location:NOEVENTSTOEXPLORE.php');
                exit;
                }
                else
                {?>
                     <h5><div class="button_c" align="center"><a class="example_c" href="REGISTEREVENT.php" >Register...</a></div></h5>
             <?php while($data2=mysqli_fetch_array($run))
              {?>
               
                 <div>
                     <h4 align="center">_______________________________________</h4>
                    
                <h3 align="center"><?php echo $data2['NAME']?></h3>
                    <h5 align="center">Event ID  :<?php echo $data2['EID']?></h5>
                    <div class="column"><h5 align="center">Type  :<?php echo $data2['TYPE']?></h5></div></div>
                    <h5 align="center"> Description :<?php echo $data2['DESC']?></h5>
                    <h5 align="center">Organizer Id  :<?php echo $data2['OID']?></h5>
                <h5>
                <?php $qry5="select NAME from department where DID='$data2[OID]'";
                $run5=mysqli_query($conn,$qry5);
                      $data5=mysqli_fetch_assoc($run5); ?>       
                   <h5 align="center"> Department :<?php echo $data5['NAME']?>
                </h5>
                  
                </h5>
                    <h5 align="center">Start Date  :<?php echo $data2['SDATE']?></h5>
                         <h5 align="center"> End Date :<?php echo $data2['EDATE']?></h5>
                    <h5 align="center"> Location :<?php 
                    
         $qry1="select l.NAME,l.LID from location l,event e where l.LID=e.LID";
          $run1=mysqli_query($conn,$qry1);
         while($data1=mysqli_fetch_array($run1))
         {if($data1['LID']==$data2['LID'])
         {echo $data1['NAME']?></h5>
                     
                        <br>
                    <h4 align="center">_______________________________________</h4>
                    <?php  break;}}}}?>
            
                    <h1><div class="button_c" align="center"><a class="example_c" href="REGISTEREDEVENTS.php" >Registered Events</a></div></h1><!--body content title-->
                    <h2 align="center">______________________________</h2>
                 <h2 align="center"><strong>E.V.E.N.T.R.O.N</strong></h2>
                    <h2 align="center">_____________________________</h2>
                </div>
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
			
                    </div><!--container div-->	
        
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
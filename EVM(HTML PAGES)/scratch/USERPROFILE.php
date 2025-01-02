<?php

	include("dbcon.php");
	session_start();
	    $aid=$_SESSION['uid'];
		$qry="SELECT * FROM `user` WHERE USN='$aid';";
		$run=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($run);
?>
<html>
<head>
<title>USER LOGIN SUCCESSFUL</title>
     <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
<style>
.form1
        {
            line-height: 38px;
        }
.box
        {
            //margin-right: 700px;
            width: 600px;
            height: 550px;
           background-image: url(i4.jpg);
           background-size:cover;
           background-position:bottom;
           margin-left: 450px;
            //margin-right: 0px;
           margin-top: 40px;
           border-radius: 15px;
           color:#93F28C;
		   color:white;
           border:3px solid #7073CE;
           border-style:outset;
		   font-size:32px;
        
           
           
        }
		p.c1
		{
			text-align:center;
			font-size:1.5em;
			color:red;
		}	
		
	.c2
    {
        margin: 30 00 0 490;
    }
    button
    {
        font-size: 20px;
		width:250px;
        color: black;
        //background-color:#93F28C;
        font-family: cursive;
        border-radius: 7px;
    }
    button:hover
    {
        background-color:#93F28C;
    }
		.leftsplit{
	
	height:100%;
	width:30%;
	position:fixed;
	z-index:1;
	top:0;
	overflow:hidden;
	margin-left:50px;
	left:0;
}</style>
    </head>
<body>

	<?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12">
<form class="form1">
		
                 
        </form>    
        </div>
            </div>
               <h1  align="center">Your Profile..!!!</h1>
  
                 <h1 align="center">_________________________________________________________________________________</h1>
    </div><br><br>
    <br><br>
    <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12">
       <h3 align="center"><strong>      
NAME : </strong>      
 <?php echo $data['FNAME']?> <?php echo $data['LNAME']?></h3>
       <p align="center">_________________________________</p>
  
                <h3 align="center"> <strong>USERID  : </strong>      
<?php  echo $data['USN']; ?></h3>
                    <p align="center">_________________________________</p>
  
       <h3 align="center"><strong>      
DOB : </strong>
<?php echo $data['DOB']?></h3>
                    <p align="center">_________________________________</p>
  
      <?php 
              $qry5="select d.NAME from department d,user u where u.USN='$aid' AND u.DID=d.DID;";
     $run5=mysqli_query($conn,$qry5);
		$data5=mysqli_fetch_assoc($run5);?>
     <h3 align="center"><strong>      
Department : </strong>      
<?php  echo $data5['NAME']; ?> </h3>
<p align="center">_________________________________</p>
          
      <h3 align="center"><strong>      
Email : </strong>      
<?php  echo $data['EMAIL']; ?> </h3>
  <p align="center">_________________________________</p>
  
                    <h3 align="center"><strong>      
Phone : </strong>      
<?php echo $data['PHONE']?></h3>
  <p align="center">_________________________________</p>
         <h6 align="center"><div class="button_c" align="center"><a class="example_c" href="UPDATEPROFILE.php">Update..!</a></div></h6>
                
                </div>
            </div>
			
    </div>
    <?php require 'utils/footer.php'; ?>
</body>
</html>
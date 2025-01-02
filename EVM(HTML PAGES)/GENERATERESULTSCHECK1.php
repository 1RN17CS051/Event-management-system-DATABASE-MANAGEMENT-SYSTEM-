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
}
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
}
    </style>
    </head>
    


    <body>
        <?php require 'utils/header5.php';?>
<?php 
include("dbcon.php");
      session_start();
                 if(isset($_POST['submit']))
	{
                  $eid=$_SESSION['EID'];
                  $p=$_POST['POINTS'];
                  $usn=$_POST['USN'];
	    $qry="UPDATE records SET POINTS='$p' WHERE USN = '$usn' AND EID ='$eid'";
                     ?><h4 align="center" style="color:red">UPDATED RESULT SUCCESSFULLY...!!</h4><?php
         $run=mysqli_query($conn,$qry);
        } ?>
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
             <?php
                $eid=$_SESSION['EID'];?> 
                 <div class="form-group">
                    
                     USN
           <select name="USN" placeholder="Enter USN" class="form-control" required> <?php
                while($data=mysqli_fetch_array($run))
                {    ?>
               <option name="USN" required><?php echo $data['USN'] ?></option>
                     <?php } 
               ?> </select></div>       
        
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
                     else {
?> <h3 align="center" style="color:red">No data to put points for..!!!</h3>
                      
                  <h4><div class="button_c" align="center"><a class="example_c" href="PUBLISHRESULTCONFIRM.php" >PUBLISH RESULT</a></div></h4>
<?php }?>
                    <h1 align="center">______________________</h1>
                    <h1 align="center">______________________</h1>
                    </div>
                </div>

        </div>
         <?php require 'utils/footer.php'; ?>
</body>
</html>
        
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
     <h3 align="center" style="color:red">Password Updated Successfully !!!</h3>
             
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12">
              <h1 align="center">_________________________________________________________</h1>
    </div><br><br>
    <br><br>
    <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12">
                    <h1 align="center">_____________________________</h1>
                    <h1><div class="button_c" align="center"><a class="example_c" href="USERPROFILE.php">View Profile</a></div></h1>
                    <h1 align="center">______________________________</h1>
                    <h2 align="center">Know your Registered Events...</h2>
                </div>
            </div>
    </div>
            </div>
    </div>
    <?php require 'utils/footer.php'; ?>
</body>
</html>
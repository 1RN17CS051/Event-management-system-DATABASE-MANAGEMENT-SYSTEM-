<?php

	include("dbcon.php");
	session_start();
	    $aid=$_SESSION['uid'];
		$qry="SELECT * FROM `organizer` WHERE OID='$aid';";
		$run=mysqli_query($conn,$qry);
		$data=mysqli_fetch_assoc($run);
?>
<html>
<head>
<title>ORGANIZER LOGIN SUCCESSFUL</title>
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
}</style>
    </head>
<body>

	<?php require 'utils/header5.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12">
                    <form class="form1">
    <h3><STRONG>Hello !!....  <?php echo $data['NAME']?></STRONG></h3>
   <h6> <p>ORGANIZER_ID  : <?php  echo $data['OID']; ?></p>
    </h6>
                 
        </form>    
                  <h1><div class="button_c" align="center"><a class="example_c" href="CREATEEVENT.php" >CREATE EVENT</a></div></h1><!--body content title-->
                    <h1 align="center">______________________________</h1>
                 <h2 align="center">To Create Event Click Above..</h2>
                    <h1 align="center">_____________________________</h1>
                    
                    <h1 align="center">_____________________________</h1>
                    <h1><div class="button_c" align="center"><a class="example_c" href="ORGANIZEDEVENTS.php">Organized Events</a></div></h1>
                    <h1 align="center">_____________________________</h1>
                    <h2 align="center">To Know The Ongoing Events Click Above..</h2>
                </div>
             </div>
    </div>
    <?php require 'utils/footer.php'; ?>
</body>
</html>
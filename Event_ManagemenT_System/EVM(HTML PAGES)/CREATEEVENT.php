<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ORGANIZE EVENT</title>
    <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
</head>
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


    <body>
        <?php require 'utils/header5.php';?>
         <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <h1 align="center">Enter Event Details !!</h1>
                    <h1 align="center">_____________________</h1>
            <form name="loginform" method="POST" action="ORGANIZEEVENTCHECK.php" >
                 <div class="form-group">

               

                    Event Name
            <input type="text" name="NAME" placeholder="Enter Event Name" class="form-control" required>
                </div>
                 <div class="form-group">

                    Type
           <select name="TYPE" placeholder="Enter the type of the Event" class="form-control" required>
               <option name="TYPE">TECHNICAL</option>
               <option name="TYPE">CULTURAL</option>
               <option name="TYPE">SPORTS</option>
               
               <option name="TYPE">OTHERS</option>
                     </select>
                </div>
                 <div class="form-group">

                    OID
            <select name="OID" placeholder="Enter Organizer ID" class="form-control" required>
         <?php   include("dbcon.php");
                 session_start();
                			?>
							
							  <option name="OID"><?php echo $_SESSION['uid'] ?></option>
              </select>
                </div>
                 <div class="form-group">

             Department Name
          <select name="DNAME" placeholder="Enter DEPARTMENT Name" class="form-control" required>
         <?php   include("dbcon.php");
                 session_start();
                                  $d=$_SESSION['uid'];
                $qry="SELECT d.NAME,o.DID FROM  organizer o,department d where d.OID='$d'";
                $run=mysqli_query($conn,$qry);
                $data=mysqli_fetch_assoc($run);
							?>				
							  <option name="DNAME"><?php echo $data['NAME'] ?></option>
		    
                </select>
                </div>
            <div class="form-group">
                    Description
            <input type="text" rows="10" name="DESCRIPTION" placeholder="Enter Description" class="form-control" required>
                </div>
                 <div class="form-group">
                Location
                  <select name="LNAME" placeholder="Enter Location" class="form-control" required>
         <?php  
                $qry1="SELECT * FROM location";
                $run1=mysqli_query($conn,$qry1);
                      
						while($data1=mysqli_fetch_array($run1))
						{
							?>	
							  <option name="LNAME"><?php echo $data1['NAME'] ?></option>
                      <?php } ?>
                          </select>
                </div>
                

                    <div class="form-group">

            SDATE
            <input type="date" name="SDATE" placeholder="Enter Start Date" class="form-control" required>
            </div>
                     <div class="form-group">

EDATE
            <input type="date" name="EDATE" placeholder="Enter End Date" class="form-control" required>
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
        
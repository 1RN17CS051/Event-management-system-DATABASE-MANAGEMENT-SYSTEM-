<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>LOGIN</title>
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
        <?php require 'utils/header3.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1><div class="button_c" align="center"><a class="example_c" href="USER_LOGIN.php" >USER LOGIN</a></div></h1><!--body content title-->
                    <h1 align="center">______________________________</h1>
                 <h2 align="center">Log in to get into the world of <STRONG>EVENTRON</STRONG></h2>
                    <h1 align="center">_____________________________</h1>
                    
                    <h1 align="center">_____________________________</h1>
                    <h1><div class="button_c" align="center"><a class="example_c" href="ORGANIZER_LOGIN.php">ORGANIZER LOGIN</a></div></h1>
                    <h1 align="center">______________________________</h1>
                    <h2 align="center">This Login is RESTRICTED for the organizers.</h2>
                </div>
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

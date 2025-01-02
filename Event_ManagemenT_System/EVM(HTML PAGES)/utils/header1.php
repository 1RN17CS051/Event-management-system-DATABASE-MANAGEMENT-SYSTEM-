<header class="bgImage">
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php 
                echo '<a href = "https://www.rnsit.ac.in/" class = "navbar-brand">
                    R N S INSTITUTTE OF TECHNOLOGY,BANGALORE
                </a> ';
                
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php 
                //links to database contents. *if logged in
                
                    echo '<li><a href="index.php">HOME</a></li>';
                    echo '<li><a href = "LOGIN.php">LOGIN</a></li>';
                    echo '<li><a href = "REGISTER.php">REGISTER</a></li>';
                    echo '<li><a href = "CONTACT1.php">Contact us</a></li>';
                    
                ?>
                
            </ul>
        </div><!--container div-->
    </nav>
    <div class = "col-md-12">
        <div class = "container">
            <div class = "jumbotron"><!--jumbotron-->
                <h1>EVENTRON</h1><!--jumbotron heading-->
                <p><!--jumbotron content-->
               
                </p>
            </div>
        </div>
    </div>
   </header>
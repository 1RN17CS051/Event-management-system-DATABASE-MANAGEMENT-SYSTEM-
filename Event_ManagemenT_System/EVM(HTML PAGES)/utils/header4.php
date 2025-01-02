<header class="bgImage1">
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
                
                    echo '<li><a>Hello ! ! !</a></li>';
                    echo '<li><a href = "USERLOGINDETAILS.php">HOME</a></li>';
                    echo '<li><a href = "USERLOGINDETAILS.php">PROFILE</a></li>';
                    echo '<li><a href = "CONTACT.php">Contact Us</a></li>';     
                    
                    echo '<li><a href = "ORGANIZER_LOGIN.php">LOGOUT</a></li>';     
                ?>
                
            </ul>
        </div><!--container div-->
    </nav>
    
   </header>
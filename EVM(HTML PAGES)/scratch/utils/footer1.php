<hr class = "footerline"><!--css modified horizontal line-->
<footer>
    <div class = "container">
        <div class = "row">
            <section>
                <div class = "footerContent col-md-4"><!--left content-->
                    <p class = "footerContent1">
                        <strong><span class = "small footerSubtext"> </span></strong>
                        <span class = "small footerSubtext">Welcome !   <?php echo $data['LNAME']?></span>
                    </p>
 
                     <p class = "footerSubtext2">
                         <li> USERID  : <?php  echo $data['USN']; ?></li>
                         <li>EMAIL  :<?php  echo $data['EMAIL']; ?></li>
                       <li>PHONE  :<?php  echo $data['USN']; ?></li>
                      </p>
                </div>
            </section>
            <section>
                <div class = "footcontent col-md-4"><!--middle content-->
                </div>
            </section>
        
        </div>
    </div>
</footer>
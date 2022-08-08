<?php 
    
    $active='About';
    include("includes/header.php");

?>
  
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       About Us
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> About Us</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                               If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
                       
            
                       <?php 
                       
                       $get_about = "select * from about_admin order by 1 DESC";
    
    $run_about = mysqli_query($db,$get_about);
    
    while($row_about=mysqli_fetch_array($run_about)){
        
        $a_id = $row_about['a_id'];
        
        $a_name = $row_about['a_name'];
        
        $a_image = $row_about['a_image'];
        
        echo "
        
        
           
       
        <div class='col-md-12 col-sm-6 single' style='margin-right:50px; margin-left:50px;'>
            
            <div class='product' style='width:300px; height:300px; border-radius: 50%;'>
                
                 <center>
                
                    <img style='width:300px; height:300px; border-radius: 50%;' class='img-responsive' src='admin_area/admin_images/$a_image'>
                

                
                <div class='text'>
                
                    <h3>

                            $a_name
                    
                    </h3>
                    
                </div>
             </center>
            </div>
            </div>
        
       
        
        ";
        
    }
                       
                       ?>
                       
                       
                       
                   
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
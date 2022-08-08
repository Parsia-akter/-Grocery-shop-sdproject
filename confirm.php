
<?php 

    $active='MyAccount';
    include("includes/header.php");

?>
     
<?php

                                $session_email = $_SESSION['customer_email'];

                                $select_customer = "select * from customers where customer_email='$session_email'";

                                $run_customer = mysqli_query($con,$select_customer);

                                $row_customer = mysqli_fetch_array($run_customer);

                                $customer_id = $row_customer['customer_id'];

                                $select_order = "select * from customer_orders where customer_id='$customer_id'";
                                $run_order = mysqli_query($con,$select_order);
                                $row_order = mysqli_fetch_array($run_order);
                                $order_id = $row_order['order_id'];




if(isset($_GET['order_id'])){
    
    $order_id = $_GET['order_id'];
    
    
}

?>
      
         
            
                  
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       My Account
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
                   
                   <h1 align="center"> Please confirm your payment</h1>
                   
                   <form action="confirm.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Bkash Number </label>
                          
                          <input type="text" class="form-control" name="number" required>
                           
                       </div><!-- form-group Finish -->
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Amount Sent: </label>
                          
                          <input type="text" class="form-control" name="amount_sent" required>
                           
                       </div><!-- form-group Finish -->
                       
                       
                       
                       <div class="form-group"><!-- form-group Begin -->
                           
                         <label> Transaction / Reference ID: </label>
                          
                          <input type="text" class="form-control" name="ref_no" required>
                           
                       </div><!-- form-group Finish -->
                       
                       
                       <div class="text-center"><!-- text-center Begin -->
                           
                           <button class="btn btn-primary btn-lg" name="confirm_payment"><!-- tn btn-primary btn-lg Begin -->
                              
                               
                               <i class="fa fa-user-md"></i> Confirm Payment
                               
                           </button><!-- tn btn-primary btn-lg Finish -->
                           
                       </div><!-- text-center Finish -->
                       
                   </form><!-- form Finish -->
                   
                   <?php 
                   
                    if(isset($_POST['confirm_payment'])){
                        
                        $session_email = $_SESSION['customer_email'];

                                $select_customer = "select * from customers where customer_email='$session_email'";

                                $run_customer = mysqli_query($con,$select_customer);

                                $row_customer = mysqli_fetch_array($run_customer);

                                $customer_id = $row_customer['customer_id'];

                                
        
                        
                        $amount = $_POST['amount_sent'];
                        
                        
                        
                        $complete = "Complete";
                        
                        $insert_payment = "insert into payments (customer_id,amount,payment_date,payment_status) values ('$customer_id','$amount',NOW(),'$complete')";
                        
                        $run_payment = mysqli_query($con,$insert_payment);
                        
                        
                            echo "<script>alert('Thank You for purchasing, your orders will be completed within 24 hours work')</script>";
                            
                            echo "<script>window.open('index.php','_self')</script>";
                            
                        
                    }
                   
                   ?>
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>

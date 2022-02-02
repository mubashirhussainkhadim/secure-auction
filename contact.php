<?php include "include/header.php" ?>
<link type="text/css" rel="stylesheet" href="css/style.css">
<section> 
<div class="about-sec how-work new_head"><div class="container" ><h1>Contact Us</h1></div></div>
</section>
<div class="mid-part">
<section> 
    <div class="about-sec inner-pages">
      <div class="container">
      <div class="contact-form">       
	<div class="row">
	<div class="col-md-5">
    <h3>Contact Us</h3>
    <form method="post">
    <div class="row">
    <p class="col-xs-6"><input type="text" name="name" value="" class="form-control" aria-required="true" aria-invalid="false" placeholder="Name:"></p>
    <p class="col-xs-6"><input type="email" name="email" value="" class="form-control" aria-required="true" aria-invalid="false" placeholder="E-mail:"></p>
    <p class="col-xs-6"><input type="number" name="phone" value="" class="form-control" aria-invalid="true" placeholder="Phone:"></p>
    <p class="col-xs-6"><input type="text" name="interest_area" value="" class="form-control" aria-invalid="false" placeholder="Interest Area:"></p>
    </div>
	<p><textarea name="message" rows="5"  class="form-control" aria-invalid="false" placeholder="Message:"></textarea></p>
    <div >
    <p class="col-xs-4"><input type="submit" value="submit"  name="submit" class="btn btn-danger"></p>
    </div>
</form>

<?php

     

    if (isset($_POST['submit'])) {


        $query = "SELECT id FROM `customer_feedback` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

                $result = mysqli_query($link, $query);

                if (mysqli_num_rows($result) > 0) {
                   ?>
                    <script>
                    
  swal('Email aready exists');
                    </script>
 ?>
<?php   }
                          else{
   

        
                    $query ="INSERT INTO `customer_feedback`(`name`, `email`, `contact_no`,`interest_area`, `message`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."','".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['phone'])."','".mysqli_real_escape_string($link, $_POST['interest_area'])."','".mysqli_real_escape_string($link, $_POST['message'])."')";

                    if (!mysqli_query($link, $query)) {

?>
                       <script type="text/javascript">
                          swal(
                           'Fail to submit!',
                             'try again'
                             );
                      </script>
<?php
                    } else {

                       
?>
                       
    <script type="text/javascript">
                          swal(
                           'Your post is send!',
                              'Successfully'
                             );
                      </script>
                      <?php
                    }

}
                } 
                
           
        ?>





    </div>
    <div class="col-md-7">
    <div class="row">
	<div class="col-xs-6">
      <h3>Contact Details</h3>
  <address>
  <strong>Mobile Bid<br>
  
  Opposit on General Hospital Lahore</strong><br>
  Lahore<br>
  Pakistan<br><br><br>
  
  Tel: +923 206891446<br>
  
  E-mail: <a href="mailto:info@demolink.org">MobileBid@gmail.com</a><br>
  </address>		
    </div>
    
	<iframe src= "" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</div>
    </div>
	</div>
   
    
       </div>
      <div class="clearfix"><br></div>
    </div> 
  </section>



<?php include "include/footer.php" ?>
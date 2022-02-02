<?php include "include/header.php"; ?>
<?php include "db_connection/database_connection.php" ?>
<section id="banner-container">
  <div class="container">
    <section class="banner-search-con ban-search-left" id="searchBar">
     
      <div class="banner-sm-title wow bounceInDown" data-animation-delay="100" id="bidTitle" >  </div>
      <div class="tab-content">
        <div class="tab-pane in active" id="home">
          <div class="banner-search-con-field">
                      </div>
        </div>
        <div class="clear"></div>
      </div>
    </section>
  </div>
</section>

<!--Start best value section goes here -->
<div class="best-value-section" style="background-color: lightyellow;">
  <div class="container">
    <div class="best-value-left">
      <div class="best-val-hd wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">Get the Best Value for your Mobile</div>
      <p class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">Selling your Mobile is now Convenient, Come to us and relax! We are there to sell your Mobile at a worthy price!</p>
      <div class="blue-btn wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s"><a href="login.php">Have a Mobile to SELL ?</a></div>
    </div>
    <div class="best-value-right" >
      <ul>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon1.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title">Fill up the Form</div>
            <div class="small-text">Fill a Free Valuation form on Mobile Bid</div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon2.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title">Our executive will come in</div>
            <div class="small-text">Our executive will get in touch with you and tell you an estimated value for your Mobile! </div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon3.jpg" / width="90" height="90"></div>
          <div class="best-content-block">
            <div class="value-title">Mobile live on MobileBid</div>
            <div class="small-text">Your Mobile is live on MobileBid.com</div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon4.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title">Selling Guarantee</div>
            <div class="small-text">We guarantee to sell your Mobile by Auction at the maximum possible price</div>
          </div>
        </li>
        <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s">
          <div class="best-value-icon"><img src="images_lat/icons/best-val-icon5.jpg" /></div>
          <div class="best-content-block">
            <div class="value-title"> Sold!</div>
            <div class="small-text">All done! Your Mobile is sold via MobileBid </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="clr"></div>
  </div>
</div>
<!--End best value section goes here -->

<section id="wrapper">
<div class="container">
<div class="container" id="feturedPropertyBlock"> </div>
<div class="makediff-section">
  <div class="container">
    <div class="make-diff-left">
      <h1 class="makedif-hd wow fadeInLeft">What makes MobileBid Different</h1>
      <div class="make-description wow fadeInLeft">
        <p>It’s our uniqueness at what we do!Security , legally verified Mobiles and getting the genuine price is something we assure to provide. Get what you want and pay what you should. </p>
      </div>
      <div class="make-list">
        <ul>
          <li class="wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".8s"><a href="javascript:void(0)" class="sel" id="a1" onClick="tec_show('tab_1','a1')"><img src="images_lat/icons/make-diff-icon1.png" / width="30px" height="30px"><span>Legally verified Mobiles</span></a></li>
          <li class="wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1.2s"><a href="javascript:void(0)" id="a2" onClick="tec_show('tab_2','a2')"><img src="images_lat/icons/make-diff-icon2.png" / width="30px" height="30px"><span>Security</span></a></li>
          <li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="1.4s"><a href="javascript:void(0)" id="a3" onClick="tec_show('tab_3','a3')"><img src="images_lat/icons/make-diff-icon3.png" / width="30px" height="30px"><span>Find your cost</span></a></li>
        </ul>
        <a class="pro-btn wow fadeInUp" data-wow-duration="1.6s" data-wow-delay="1.6s" href ="index.php">Start Searching Mobiles</a> 
        <!--					<input type="button" value="Start Searching Properties" class="pro-btn">--> 
      </div>
    </div>
    <div class="make-diff-right wow fadeInRight" >
      <div class="propertyCon">
        <div id="tab_1"> <img src="images_lat/legally-img.jpg" /> </div>
        <div id="tab_2" style="display:none;"> <img src="images_lat/tranparent-img.jpg" /> </div>
        <div id="tab_3" style="display:none;"> <img src="images_lat/find-your-cost-img.jpg" /> </div>
      </div>
    </div>
    <div class="clr"></div>
  </div>
</div>

</div>
<?php include "include/footer.php"?>
</body>
</html>

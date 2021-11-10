<?php
session_start();
$pageTitle = 'ABOUT US';
    include "initinner.php";
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

if($do == 'whoweare') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/who.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Who We Are</h1>
  Drawing on more than 10 years of in-depth know how in offering globally integrated, tailor-made, end-to end supply chain management solutions, we are proud to attribute our continued success to the passion and dedication of our people towards delivering excellent service, with the utmost care.<br><br>
  Our promise to provide the best in shipping, logistics and marine services is one we take seriously. And we have the reach, resources, expertise and experience to deliver on that promise.
 </div>
 <div class="icons">
  <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=whoweare"><img src="../../layoutt/image/1.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=whoweare"><h2>Who We Are</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=mission"><img src="../../layoutt/image/2.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=mission"><h2>Mission</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=vision"><img src="../../layoutt/image/3.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=vision"><h2>Vision</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=values"><img src="../../layoutt/image/4.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=values"><h2>Values</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
   <a href="about-us.php?do=ourteam"><img src="../../layoutt/image/5.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=ourteam"><h2>Our Team</h2></a>
  </div>
 </div>
   
 </div>
 
</div>
 </div>
 <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107332981108988"
  theme_color="#022f61">
      </div>
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7ba49c138104eb"></script>   
 <?php
 }
 
 
 
 if($do == 'mission') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/mission.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>MISSION</h1>
To deliver excellence in global logistics through a team of passionate and customer-centric professionals.<br><br>
 </div>
 <div class="icons">
  <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=whoweare"><img src="../../layoutt/image/1.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=whoweare"><h2>Who We Are</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=mission"><img src="../../layoutt/image/2.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=mission"><h2>Mission</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=vision"><img src="../../layoutt/image/3.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=vision"><h2>Vision</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=values"><img src="../../layoutt/image/4.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=values"><h2>Values</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
   <a href="about-us.php?do=ourteam"><img src="../../layoutt/image/5.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=ourteam"><h2>Our Team</h2></a>
  </div>
 </div>
   
 </div>
 
</div>
 </div>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107332981108988"
  theme_color="#022f61">
      </div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7ba49c138104eb"></script>
 <?php
 }
 
 
  if($do == 'vision') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/vision.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>VISION</h1>
To become a partner of choice in the global logistics industry by providing sustainable solutions and a customer-driven experience, delivered by people who care.
  </div>
 <div class="icons">
  <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=whoweare"><img src="../../layoutt/image/1.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=whoweare"><h2>Who We Are</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=mission"><img src="../../layoutt/image/2.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=mission"><h2>Mission</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=vision"><img src="../../layoutt/image/3.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=vision"><h2>Vision</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=values"><img src="../../layoutt/image/4.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=values"><h2>Values</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
   <a href="about-us.php?do=ourteam"><img src="../../layoutt/image/5.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=ourteam"><h2>Our Team</h2></a>
  </div>
 </div>
   
 </div>
 
</div>
 </div>
 <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107332981108988"
  theme_color="#022f61">
      </div>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7ba49c138104eb"></script>    
 <?php
 }
 
 
  if($do == 'values') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/values.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>VALUES</h1>
Integrity - Innovation - Ownership<br><br>
<ul>
 <li>We work with absolute Integrity.</li><br>
 <li>We develop innovative solutions using state of the art technology.</li><br>
 <li>We take Ownership of each task as individuals, and credit success to collaborative teamwork.</li>
</ul>
  </div>
 <div class="icons">
  <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=whoweare"><img src="../../layoutt/image/1.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=whoweare"><h2>Who We Are</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=mission"><img src="../../layoutt/image/2.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=mission"><h2>Mission</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=vision"><img src="../../layoutt/image/3.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=vision"><h2>Vision</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=values"><img src="../../layoutt/image/4.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=values"><h2>Values</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
   <a href="about-us.php?do=ourteam"><img src="../../layoutt/image/5.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=ourteam"><h2>Our Team</h2></a>
  </div>
 </div>
   
 </div>
 
</div>
 </div>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107332981108988"
  theme_color="#022f61">
      </div>
 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7ba49c138104eb"></script>
 <?php
 }
 
   if($do == 'ourteam') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/OurTeam.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Our Team</h1>
At Global Express and Marine Services (GEMS) we follow the ‘People First’ approach. We empower our team to service our clients with professionalism, high-quality service and efficiency. We always encourage our teams to take initiatives and make decisions that are relevant to our business growth and success.
  </div>
 <div class="icons">
  <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=whoweare"><img src="../../layoutt/image/1.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=whoweare"><h2>Who We Are</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=mission"><img src="../../layoutt/image/2.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=mission"><h2>Mission</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=vision"><img src="../../layoutt/image/3.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=vision"><h2>Vision</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="about-us.php?do=values"><img src="../../layoutt/image/4.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=values"><h2>Values</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
   <a href="about-us.php?do=ourteam"><img src="../../layoutt/image/5.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="about-us.php?do=ourteam"><h2>Our Team</h2></a>
  </div>
 </div>
   
 </div>
 
</div>
 </div>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="107332981108988"
  theme_color="#022f61">
      </div>
   <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7ba49c138104eb"></script>   
 <?php
 }
 
 include 'footinr.php';
include 'footerinner.php';


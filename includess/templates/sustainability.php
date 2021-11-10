<?php
session_start();
$pageTitle = 'SUSTAINABILITY';
    include "initinner.php";
 $do = isset($_GET['do']) ? $_GET['do'] : 'manage';

if($do == 'manage') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/sustainability.jpg" alt="">
    </div>
    <div class="sustainability">
     <div class="container">
      <h1>Sustainability</h1>
      <p class="Sust">We at GEMS are committed to sharing our customers concern for protecting the environment with greener supply chains. Our Logistics solutions are very eco-friendly, which make our industry an environmentally friendly one by nature. The end-to-end supply chain solutions that we provide support our customers sustainable development strategies and help them achieve their green objectives. Among these solutions, we have introduced a significant technology system which saves a lot of time and paper work. It simplifies the operational procedures through digitalizing all documents and back-and-forth processes.<br><br>
      
      As for our land transportation business, GEMS supports the emphasis on logistical efficiency, driver training, automatic tire inflation systems, advanced lubricants, idling reduction and improved aerodynamics.
      </p>
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

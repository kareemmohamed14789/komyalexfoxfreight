<?php
session_start();
$pageTitle = 'LOGISTIC SERVICES';
    include "initinner.php";
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

if($do == 'airfreight') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/AirFreight.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Air FREIGHT</h1>
Our Airfreight Network offers the fastest and most convenient connections between the shipment’s origin and destination. GEMS team of airfreight experts ensures professional management of the complete shipping process.<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">Request Logistic Service</a>
</button>
 </div>
 <div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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
 
 
 
 if($do == 'seafreight') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/work28.png" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>SEA FREIGHT</h1>
For the past 10 years, GEMS has been offering a wide range of ocean freight services clearance and handling door-to-door ocean delivery to all key locations around the globe.<br><br>
We provide our clients with regularly updated sailing schedules as well as an online shipment tracking portal for end-to-end supply chain visibility.<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">Request Logistic Service</a>
</button>
 </div>
<div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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
 
 
  if($do == 'overland') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/Stock_trucking.5e74cd8b7281f.png" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>OVERLAND</h1>
GEMS offers a variety of transportation services from trusted transportation companies with best price and fastest delivery.<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">Request Logistic Service</a>
</button>
  </div>
 <div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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
 
 
  if($do == 'customsbrokerage') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/custom brokerage.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>CUSTOMS BROKERAGE</h1>
Compliance with customs regulations is an essential component in the international supply chain and a responsibility for all importers. At GEMS, we can join forces in:<br><br>
<ul>
 <li>Professional handling of your entries by true Customs experts.</li><br>
 <li>Having a deep knowledge of your company, products and industry.</li><br>
 <li>Performing a 100% internal review policy of all the customs entries in addition to other process controls on post entry work, duty discrepancies and the like.</li><br>
  <li>Developing a comprehensive HTS database for your product line for a guaranteed accuracy.</li><br>
 <li>Appointing a single point of contact to ensure a superior customer service.</li><br>
 <li>Developing a strategic and consultative relationship.</li><br>
  <li>Setting specialized skill sets (FTZ, Duty Drawback, First Sale, etc.)</li><br>
 <li>Keeping you posted with any regulatory changes that might have an impact on your business.</li><br>
 <li>Developing a proactive and positive relationship with Customs.</li>
</ul><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">Request Logistic Service</a>
</button>
  </div>
<div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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
 
   if($do == 'cargoinsurance') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/Cargo insurance.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>CARGO INSURANCE</h1>
<ul>
 <li>Your shipment will go through many hands before it reaches its final destination. We look forward to helping you secure your shipments and cover it against risks of loss or damage that might occur.</li><br>
  <li>GEMS offers customized insurance plans with reliable global companies based on policies by shipment and periodic policies over a specific period of time.</li><br>
</ul><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">Request Logistic Service</a>
</button>
  </div>
<div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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
 
 
    if($do == 'projectlogistics') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/Project logistics.png" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>PROJECT LOGISTICS</h1>
For over 10 years GEMS has been serving Project Cargo customers involved in various industries that include moves for:<br><br>
<ul>
 <li>Heavy lifts</li><br>
  <li>Out-of-gauge</li><br>
   <li>Oil and gas</li><br>  
</ul>
 <h3>Construction</h3><br>
Our qualified worldwide team can guarantee operational excellence and cost-effective programs for distributing your goods. GEMS is branded in delivering innovative and flexible solutions that tallies with security and compliance norms promoting safety and professionalism.<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">Request Logistic Service</a>
</button>
  </div>
<div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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
 
 
    if($do == 'supplychain') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/1000.png" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>SUPPLY CHAIN</h1>
   <h2>CARGO MANAGEMENT</h2><br>
   GEMS delivers a distinctive supply chain performance that enables clients to segregate the transportation carrier costs from origin to destination.<br><br>
   Through our cargo management services, we enable customers to:<br><br><br>
   <ul>
    <li>Optimize their supply chain operations while reducing costs in parallel.</li><br>
    <li>Have better visibility and control over their supply chain network.</li><br>
      <li>Select carrier(s) of optimal transportation cost and transit time.</li><br>
    <li>Receive collective information from all providers/ lanes through the automation (EDI) potential.</li><br>
    <li>Receive consistent and excellent service on all lanes.</li><br>
    <li>Receive superior customer service through a single point of contact.</li><br>
   </ul>
   Our Cargo Management Services also allow shippers to maintain high levels of service quality on the key ends of the supply chain; origin and destination, while optimizing their port to port transportation costs that represent the highest share.<br>
   GEMS cargo management consistently provides shippers with:<br><br><br>
   <ul>
    <li>Shipment booking.</li><br>
    <li>Purchase Order visibility.</li><br>
    <li>Shipment visibility & Customized Reporting.</li><br>
    <li>Documentation Management.</li><br>
    <li>Delivery Management.</li><br>
    <li>Equipment Management.</li><br>
    <li>Data Aggregation and Scorecards.</li><br>    
   </ul>
   
   <h2>GEMS Offers</h2><br>
     <ul>
    <li>Network Optimization.</li><br>
    <li>Inventory Optimization.</li><br>
    <li>Domestic Transportation Management.</li><br>
    <li>Carrier Management/Procurement and Freight Bill Audit.</li><br>
    <li>Compliance Consulting.</li><br>
    <li>Project Logistics Management.</li><br>
    <li>Contract Logistics and Distribution Management.</li><br>    
   </ul>
   <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">Request Logistic Service</a>
</button>  
  </div>
<div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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
 
 
 
    if($do == 'warehousing') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/warehousing.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>WAREHOUSING</h1>
GEMS warehousing facilities are built in a flexible design to meet the industry needs. Our multiple-client shared and stand-alone facilities provide clients with convenient distribution and order fulfillment services.
GEMS provides a full-cycle service that aims at securing an efficient and cost-effective delivery of the merchandise and goods from the warehouse to the marketplace.<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">request logistic service<br>with pay cash</a>
</button>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestlogisticservice.php" target="_blank">request logistic service<br>with pay online</a>
</button>
  </div>
<div class="icons">
  
  <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=airfreight"><img src="../../layoutt/image/6.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=airfreight"><h2>Air FREIGHT</h2></a>
  </div>
 </div>
  
    <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=seafreight"><img src="../../layoutt/image/7.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=seafreight"><h2>SEA FREIGHT</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="offerings.php?do=overland"><img src="../../layoutt/image/8.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=overland"><h2>OVERLAND</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=customsbrokerage"><img src="../../layoutt/image/9.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=customsbrokerage"><h2>CUSTOMS BROKERAGE</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=cargoinsurance"><img src="../../layoutt/image/10.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=cargoinsurance"><h2>CARGO INSURANCE</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=projectlogistics"><img src="../../layoutt/image/11.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=projectlogistics"><h2>PROJECT LOGISTICS</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=supplychain"><img src="../../layoutt/image/12.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=supplychain"><h2>SUPPLY CHAIN</h2></a>
  </div>
 </div>
         
        <div class="itemm">
  <div class="picture">
  <a href="offerings.php?do=warehousing"><img src="../../layoutt/image/13.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="offerings.php?do=warehousing"><h2>WAREHOUSING</h2></a>
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


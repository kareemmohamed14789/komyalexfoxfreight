<?php
session_start();
$pageTitle = 'Marine Services';
    include "initinner.php";
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';


 if($do == 'bunkeringsuppliers') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/301.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Bunkering Suppliers</h1>
Being in direct contact with the major bunker suppliers in Egypt as well as having a strong market position, we ensure safe / prompt delivery of quality bunker products at competitive prices.<br><br>
We help to preserve lives and keep commercial operators on track to meet their deadlines through our bunkering operations – refueling ocean-going vessels or fixed structures in deep water.<br><br>
All Bunkering facilities are available at our ports with any required quantity and achieve fast delivery of bunkers and lubricants.<br><br>
<h4>We are available for orders round the clock including holidays so that we can furnish our customers with:</h4>
<div class="line-marine">
<ul>
 <li>The latest internationally posted prices.</li>
 <li>The most competitive discounts on large orders.</li>
 <li>The best payment and credit terms.</li>
</ul>
</div>
<br>
Our office can establish strong relationship between you and supplies to coordinate local delivery. With 24 hr. communication and the cooperation of local agents, we are able to accept and place information at short notice.<br><br>
<h2>Delivery Ports</h2>
Wide-spread locations of the Egyptian ports of physical supply of bunkering fuels ensures that Global Express & Marine Services Supplies bunkering fuel to seagoing ls any time at any Egyptian port.<br><br>
<h2>Products</h2>
Global Express & Marine Services. secures marine fuels from the industry majors as well as from other refineries, our physical supply is subject to 100% quality compliance enhanced by closely monitored refining, terminal storage and distribution of the highest quality standards.<br><br>
Every marine fuel supply meets internationally approved standards.<br><br>
We guarantee availability of petroleum products, their conformity to the ISO international standards, as well as strict compliance with the technological requirements to the bunkering and sampling procedure.<br><br>
Global Express & Marine Services provides a full range of Bunker fuels compliant with international maritime regulations and requirements (ISO 8217-2005/2010 or later revision as requested by customers).<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestmarineservice.php" target="_blank">Request Marine Service</a>
</button>
 </div>
 <div class="icons">
  

    <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=bunkeringsuppliers"><img src="../../layoutt/image/900.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=bunkeringsuppliers"><h2>Bunkering Suppliers</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="marineservices.php?do=crewchanges"><img src="../../layoutt/image/902.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=crewchanges"><h2>Crew Changes</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=provisionsupply"><img src="../../layoutt/image/903.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=provisionsupply"><h2>Provision Supply</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=shipsagence"><img src="../../layoutt/image/904.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=shipsagence"><h2>Ships Agency</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=suezcanaltransit"><img src="../../layoutt/image/905.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=suezcanaltransit"><h2>Suez Canal Transit</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=technicalshipsupplies"><img src="../../layoutt/image/906.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=technicalshipsupplies"><h2>Technical Ship Supplies</h2></a>
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
 
 
  if($do == 'crewchanges') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/302.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Crew Changes</h1>
Experienced GEMS team arrange all formalities of embarkation and disembarkation operations, also assisting incoming and outgoing crew members by with immigration, police and customs authorities . Luggage and equipment are organized as well as personal transportation, accommodation and comfortable accommodation at nearby excellent hotels if necessary.<br><br>
GEMS team are a link between owner and seafarer. We can provide owners with qualified and competent officers who have extensive experience on all types of vessels for international crews.<br><br>
<div class="line-marine">
<ul>
 <li>Receiving Crew at airport.</li>
 <li>Arranging transportation.</li>
 <li>Booking hotels.</li>
 <li>Booking flight tickets.</li>
</ul>
  </div><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestmarineservice.php" target="_blank">Request Marine Service</a>
</button>
  </div>
 <div class="icons">

  
    <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=bunkeringsuppliers"><img src="../../layoutt/image/900.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=bunkeringsuppliers"><h2>Bunkering Suppliers</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="marineservices.php?do=crewchanges"><img src="../../layoutt/image/902.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=crewchanges"><h2>Crew Changes</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=provisionsupply"><img src="../../layoutt/image/903.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=provisionsupply"><h2>Provision Supply</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=shipsagence"><img src="../../layoutt/image/904.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=shipsagence"><h2>Ships Agency</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=suezcanaltransit"><img src="../../layoutt/image/905.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=suezcanaltransit"><h2>Suez Canal Transit</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=technicalshipsupplies"><img src="../../layoutt/image/906.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=technicalshipsupplies"><h2>Technical Ship Supplies</h2></a>
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
 
 
  if($do == 'provisionsupply') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/303.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Provision Supply</h1>
Over the past few years, ever-greater cost awareness has developed in the sector. In addition, with the Maritime Labour Convention (MLC), the supply of sufficient and healthy provisions has taken a prominent position. Your crew must be assured of a varied and balanced diet.<br><br>
It is exactly here that we want to get involved, supporting you with our Provision Supply Management. With our customer-oriented solutions, we ensure optimal, healthy provisioning and transparent provision budget planning and control.<br><br>
GEMS team eligible to supply any kind/quantity of desired provisions with high quality and good prices. <br><br>
Frozen prime meat, poultry, dairy products and dry stuff are sourced from famous brands from all over the world considering variation in crew nationalities to meet the different tastes.<br><br>
<h2>QUALITY FOOD & BONDED STORES</h2>
<div class="line-marine">
<ul>
 <h2>Fresh & Chilled</h2>
 <li>Seasonal Fruits & Vegetables.</li>
 <li>Fresh Local Meat, Poultry, Seafood and fishes.</li>
 <li>Dairy Products, Cheese, and Eggs.</li>
  <li>Pastries, Sweets, and Desserts.</li>
 <li>Assortment of Chocolates, Biscuits, Nuts and Chips. </li>
 <li>Juices, Soft Drinks.</li>
 <h2>Frozen</h2>
  <li>Beef, Pork, Mutton Meat Cuts & Preserves.</li>
 <li>Frozen Fruits and vegetables.</li>
 <li> Ice Creams, Cakes and pastries.</li>
 <h2>Dry</h2>
 <li>Condiments, Sauces & Spices. </li>
  <li>Rice, Flour, Grains and Pulses.</li>
 <li> Dried Fruits and Nuts.</li>
 <li>Milk and Milk Products.</li>
 <li>Canned Meat, Fish, Fruits &Vegetables.</li>
 <li>Oils and Fats.</li>
 <h2>Bonded Goods</h2>
 <li>Cigarettes and other tobacco products.</li>
</ul>
</div>
<h2>CABIN</h2>
We can supply you with quality laundry detergent, bleach, fabric softener, and cleaning supplies at a reasonable price<br><br>
Your cabin order would not be complete without paper products, mops, brooms and cleaning brushes.<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestmarineservice.php" target="_blank">Request Marine Service</a>
</button>
  </div>
 <div class="icons">
  

  
    <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=bunkeringsuppliers"><img src="../../layoutt/image/900.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=bunkeringsuppliers"><h2>Bunkering Suppliers</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="marineservices.php?do=crewchanges"><img src="../../layoutt/image/902.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=crewchanges"><h2>Crew Changes</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=provisionsupply"><img src="../../layoutt/image/903.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=provisionsupply"><h2>Provision Supply</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=shipsagence"><img src="../../layoutt/image/904.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=shipsagence"><h2>Ships Agency</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=suezcanaltransit"><img src="../../layoutt/image/905.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=suezcanaltransit"><h2>Suez Canal Transit</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=technicalshipsupplies"><img src="../../layoutt/image/906.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=technicalshipsupplies"><h2>Technical Ship Supplies</h2></a>
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
 
   if($do == 'shipsagence') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/304.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Ships Agency</h1>
GEMS offer a full range of agency services at all major Egyptian Ports.<br><br>
We work closely with harbor masters, local authorities and service providers, to achieve prompt attention to vessels with minimum delays and cost to the Owner.<br><br>
We ensure that your interests are well taken care of to avoid any conflict of interest that may arise with many stakeholders involved in various operations.<br><br>
<h2>Our agency services include:</h2>
<h2>Full Port Agency</h2>
<div class="line-marine">
<ul>
 <li>managing all port and cargo operations as well as service procurement.</li>
 <li>reporting and accounting on behalf of ship operators and charterers.</li>
</ul>
 <h2>Dry-docking Agency</h2>
 <ul>
  <li>handling all arrival, departure and shifting formalities.</li>
  <li>providing logistic support, handling crew and personnel on arrival.</li>
    <li>clearing, safe keeping, storage, and delivery of ship’s spares needed for the dry-docking.</li>
  <li>coordination of services beyond the yard’s capability.</li>
  <li>providing onsite technical and administrative support.</li>
 </ul>
 <h2>Protective Agency</h2>
 <ul>
  <li>
   Representing ship owners’ and operators’ interests in the port operations process to supervise the counterparty’s agent throughout the port call.
  </li>
 </ul>
 <h2>Husbandry Agency</h2>
  <ul>
  <li>Managing all service requirements for ship and crew, as well as bunker calls and transits.</li>
 </ul>
 <h2>Cargo Agency</h2>
  <ul>
  <li>
   Representing the cargo owners’ interests in the port either as the nominated agent or as the shippers/receivers agents for both wet and dry operations.
  </li>
 </ul>
 <h2>Crew support</h2>
  <ul>
  <li>
   Arranging transport, accommodation, facilitating immigration and medical assistance.
  </li>
 </ul>
 <h2>Logistics Services</h2>
  <ul>
  <li>
   Arranging air freight, warehousing, customs clearance for ships spares.
  </li>
 </ul>
 <h2>Other Agency Services</h2>
  <ul>
  <li>Cash To Master</li>
  <li>Forwarding of Documents</li>
    <li>Supply of bunkers & lube oil</li>
  <li>Ship’s Maintenance and Repairs</li>
    <li>Technical Services & Support</li>
    <li>Cargo loading/discharging</li>
  <li>Oversized Cargo Handling</li>
    <li>Stevedoring Activities</li>
  <li>Vessel & Cargo Surveys</li>
    <li>Marine Surveyors and Technical Consultants</li>
  <li>Waste & Sludge Removal</li>
    <li>Marine Air Ticketing</li>
  <li>Cruise Lines Port Agency & Tour Excursions</li>
    <li>Integrated Container Services</li>
  <li>International Freight Forwarding</li>
    <li>Salvage Agency</li>
  <li>Slops Recovery</li>
      <li> Ship’s Maintenance and Repairs</li>
  <li>STS Operations</li>
    <li>Towage Operations</li>
 </ul>
</div>
 We are continually upgrading our services to ensure the best quality at all times as well as modernizing our agency capabilities.<br><br>
 <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestmarineservice.php" target="_blank">Request Marine Service</a>
</button>
  </div>
 <div class="icons">
  
  
    <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=bunkeringsuppliers"><img src="../../layoutt/image/900.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=bunkeringsuppliers"><h2>Bunkering Suppliers</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="marineservices.php?do=crewchanges"><img src="../../layoutt/image/902.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=crewchanges"><h2>Crew Changes</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=provisionsupply"><img src="../../layoutt/image/903.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=provisionsupply"><h2>Provision Supply</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=shipsagence"><img src="../../layoutt/image/904.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=shipsagence"><h2>Ships Agency</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=suezcanaltransit"><img src="../../layoutt/image/905.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=suezcanaltransit"><h2>Suez Canal Transit</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=technicalshipsupplies"><img src="../../layoutt/image/906.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=technicalshipsupplies"><h2>Technical Ship Supplies</h2></a>
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
 
 
    if($do == 'suezcanaltransit') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/305.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Suez Canal Transit</h1>
GEMS qualified team has trained to finish all Suez Canal authority procedures before vessel arrival, also easy entrance to berth area and following up Completion all formalities (marine inspection, quarantine doctor, immigration, visas and pilot).<br><br>
Our staff, whose connections in this niche market are sensibly extended to all personnel of the local authorities, have solid know-how, vast expertise, contacts and local intelligence which are all put together to provide an efficient and comprehensive service saving the customer’s precious time and money.<br><br>
To satisfy the demand of our clients, the service is being consistently upgraded by updating information and knowledge which have been acquired by our staff and shipping reps.<br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestmarineservice.php" target="_blank">Request Marine Service</a>
</button>
  </div>
 <div class="icons">
  

  
    <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=bunkeringsuppliers"><img src="../../layoutt/image/900.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=bunkeringsuppliers"><h2>Bunkering Suppliers</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="marineservices.php?do=crewchanges"><img src="../../layoutt/image/902.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=crewchanges"><h2>Crew Changes</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=provisionsupply"><img src="../../layoutt/image/903.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=provisionsupply"><h2>Provision Supply</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=shipsagence"><img src="../../layoutt/image/904.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=shipsagence"><h2>Ships Agency</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=suezcanaltransit"><img src="../../layoutt/image/905.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=suezcanaltransit"><h2>Suez Canal Transit</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=technicalshipsupplies"><img src="../../layoutt/image/906.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=technicalshipsupplies"><h2>Technical Ship Supplies</h2></a>
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
 
 
    if($do == 'technicalshipsupplies') {
    ?>
    <div class="baner">
     <img src="../../layoutt/image/306.jpg" alt="">
    </div>
    <div class="offering">
 <div class="container">
  <div class="text">
   <h1>Technical Ship Supplies</h1>
 Through our own transit stores, we can supply your vessel with bond- engine-deck stores imported from the most reliable sources in the Far East and Europe & the ability of easy clearance of supply and shipping at Cairo airport and immediate dispatch of spares to or from the vessel.<br><br>
 <h2>Safty Equipments</h2>
First Aid Kits, Safety Helmets, Gloves, Safety Shoes, Protective Clothing Safety Harness Fire Blankets Safety Signs, FIRE HOSE / FIRE HOSE COUPLINGS, FIRE EXTINGUISHERS & all The breathing apparatus parts.<br><br>
<h2>Technical Ship Supply</h2><br>
<h4>We supply original and genuine parts of high standards in quality and functionality:</h4>
Our technical department has an excellent and renowned reputation in obtaining all your vessel requirements; our expertise and knowledge help the ship owners to obtain the correct items and spare parts at the most competitive price.<br><br>
<h2>Engine Stores</h2>
<div class="line-marine">
<div class="engine">
 <div class="engine-one">
<ul>
  <li>HOSES & COUPLINGS</li>
    <li>Mooring Ropes</li>
  <li>LUBRICANTS,CHEMICALS SOLVENTS,CLEANERS</li>
    <li>POWERED TOOLS</li>
    <li>Rigging Equipment</li>
  <li>HAND TOOLS</li>
    <li>CUTTING TOOLS</li>
  <li>MEASURING EQUIPMENT</li>
    <li>STEEL/METAL WORK</li>
</ul>
</div>
 <div class="engine-two">
<ul>
  <li>PIPE & TUBE FITTINGS</li>
    <li>VALVES & pumps</li>
  <li>BEARINGS</li>
    <li>ELECTRICAL EQUIPMENT</li>
  <li>PACKINGS & JOINTINGS</li>
    <li>WELDING EQUIPMENT</li>
  <li>Anchor Chains</li>
      <li>Cargo & Helideck Nets</li>
      <li>Pilot & Gangway Ladder</li>
</ul>
 </div>
</div>
</div>
<h2>Deck Stores</h2>
<div class="line-marine">
<div class="engine">
 <div class="engine-one">
<ul>
    <li>admiralty Charts</li>
  <li>nautical publications</li>
    <li>flags</li>
  <li>ROPES & HAWSERS</li>
    <li>Razor wire</li>
    <li>CARGO & DECK EQUIPMENT</li>
  <li>SAFETY & FIRE-FIGHTING EQUIPMENT</li>
    <li>MARINE PAINT</li>
</ul>
</div>
 <div class="engine-two">
<ul>
  <li>navigation equipment</li>
    <li>Marine Lubricants</li>
  <li>Adhesives</li>
    <li>Pressure Gauges</li>
  <li>Fasteners</li>
    <li>Welding Equipment</li>
  <li>Search / Navigation Lights</li>
    <li>BRIDGE & NAUTICAL  EQUIPMENT</li>
</ul>
</div>
</div>
</div><br><br>
<button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="requestmarineservice.php" target="_blank">Request Marine Service</a>
</button>
  </div>
 <div class="icons">

  
    <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=bunkeringsuppliers"><img src="../../layoutt/image/900.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=bunkeringsuppliers"><h2>Bunkering Suppliers</h2></a>
  </div>
 </div>
    
      <div class="itemm">
  <div class="picture">
   <a href="marineservices.php?do=crewchanges"><img src="../../layoutt/image/902.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=crewchanges"><h2>Crew Changes</h2></a>
  </div>
 </div>
      
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=provisionsupply"><img src="../../layoutt/image/903.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=provisionsupply"><h2>Provision Supply</h2></a>
  </div>
 </div>
     
     <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=shipsagence"><img src="../../layoutt/image/904.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=shipsagence"><h2>Ships Agency</h2></a>
  </div>
 </div>
   
   
        <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=suezcanaltransit"><img src="../../layoutt/image/905.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=suezcanaltransit"><h2>Suez Canal Transit</h2></a>
  </div>
 </div>
        
         <div class="itemm">
  <div class="picture">
  <a href="marineservices.php?do=technicalshipsupplies"><img src="../../layoutt/image/906.png" alt=""></a>
  </div>
   <div class="awesone">
  <a href="marineservices.php?do=technicalshipsupplies"><h2>Technical Ship Supplies</h2></a>
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


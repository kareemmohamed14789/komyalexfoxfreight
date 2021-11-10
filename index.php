<?PHP
ob_start();
session_start();
$pageTitle = 'GEMS';
include 'includess/templates/function.php';
include 'includess/templates/navbarindex.php';
include 'includess/templates/headerindex.php';
include 'xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
 if($do == 'Insert'){
if($_SERVER['REQUEST_METHOD'] == 'POST') {

 $full = filter_var($_POST['FullName'], FILTER_SANITIZE_STRING);
 $mobile = filter_var($_POST['MobileNumber'], FILTER_SANITIZE_NUMBER_INT);
 $email = filter_var($_POST['EmailAddress'], FILTER_SANITIZE_EMAIL);
 $subject = filter_var($_POST['Subject'], FILTER_SANITIZE_STRING);
 $mess =    filter_var($_POST['Message'], FILTER_SANITIZE_STRING);

 echo "<div class='container'>";
 $formErrors = array();
if(strlen($full) < 4){
 $formErrors[] = 'Full Name Cant Be Less Than <strong>4 Letters</strong>';
}

if(strlen($full) > 20){
 $formErrors[] = 'Full Name Cant Be More Than <strong>20 Letters</strong>';
}

if(empty($full)){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}

if(empty($mobile)){
 $formErrors[] = 'Mobile Number Cant Be<strong> empty</strong>';
}

if(empty($email)){
 $formErrors[] = 'Email Address Cant Be<strong> empty</strong>';
}

if(empty($subject)){
 $formErrors[] = 'Subject Cant Be<strong> empty</strong>';
}

if(empty($mess)){
 $formErrors[] = 'Message Cant Be<strong> empty</strong>';
}

echo "</div>";
if (empty($formErrors)){

 $stmt = $con->prepare("INSERT INTO contact(FullName, MobileNumber, EmailAddress, Subject, Message)
                       VALUES(:zfulln, :zmobilen, :zemaila, :zsubj, :zmessa) ");
 $stmt->execute(array(
  ':zfulln' => $full,
  ':zmobilen' => $mobile,
  ':zemaila' => $email,
  ':zsubj' => $subject,
  ':zmessa' => $mess
  ));
 echo "<div class='container text-message'>";
$theMsg = 'Thank You For Contacting With US <br> Your Message Was Sent Successfuly';
redirectIndex($theMsg);
 echo "<div>";
}
}
}


 if($do == 'Commenting'){
if($_SERVER['REQUEST_METHOD'] == 'POST') {

 $full = filter_var($_POST['FullName'], FILTER_SANITIZE_STRING);
 $email = filter_var($_POST['EmailAddress'], FILTER_SANITIZE_EMAIL);
 $comm =    filter_var($_POST['Comment'], FILTER_SANITIZE_STRING);

 echo "<div class='container'>";
 $formErrors = array();
if(strlen($full) < 4){
 $formErrors[] = 'Full Name Cant Be Less Than <strong>4 Letters</strong>';
}

if(strlen($full) > 20){
 $formErrors[] = 'Full Name Cant Be More Than <strong>20 Letters</strong>';
}

if(empty($full)){
 $formErrors[] = 'Full Name Cant Be<strong> empty</strong>';
}


if(empty($email)){
 $formErrors[] = 'Email Address Cant Be<strong> empty</strong>';
}

if(strlen($comm) > 250){
 $formErrors[] = 'Full Name Cant Be More Than <strong>250 Letters</strong>';
}
if(empty($comm)){
 $formErrors[] = 'Message Cant Be<strong> empty</strong>';
}

echo "</div>";
if (empty($formErrors)){

 $stmt = $con->prepare("INSERT INTO comment(FullName, EmailAddress, Comment)
                       VALUES(:zfulln, :zemaila,:zcomma) ");
 $stmt->execute(array(
  ':zfulln' => $full,
  ':zemaila' => $email,
  ':zcomma' => $comm
  ));
 echo "<div class='container text-message'>";
$theMsg = 'Thank You For Commenting <br> Your Comment Was Sent Successfuly';
redirectIndex($theMsg);
 echo "<div>";
}
}
}

if($do == 'Manage'){
 $sort = 'DESC';
$stmt = $con->prepare("SELECT * FROM comment WHERE GroupID != 1 ORDER BY Id $sort");
$stmt->execute();
$commentings = $stmt->fetchAll();
?>
<!-- start about us -->

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


<div class="about-us">
 <div class="containerrrrrrr">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
       
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

     <div class="item active">
     
      <img src="layoutt/image/work230.png" alt="">

</div>
    <!--
    <div class="item">
      <img src="layoutt/image/work24.png" alt="">
      <div class="carousel-caption">
       <div class="overlay2">

           <p>MASA’s extensive experience with Ship registration, Seafarers' certifications: including STCW courses and endorsements, Class and statutory, Flag state inspections, Pre-purchase surveys with qualified marine engineers and Masters who have the technical capability to evaluate ships and cover issues of interest to buyers Bunker surveys, on hire/off hire surveys Cargo surveys for both quality and quantity Insurance surveys, Manuals and plans and their approvals, Drawings and designs, Insurance by reputed clubs: P&I and H&M enable us to provide the clients with professional and cost effective solutions with 24/7 services with emergency contacts in holidays.</p>
           </div>
      </div>
    </div>
   -->
        <div class="item">
      <img src="layoutt/image/231.png" alt="">

    </div>
                 <div class="item">
      <img src="layoutt/image/work28.png" alt="">

    </div>
                 
       <div class="item">
      <img src="layoutt/image/Stock_trucking.5e74cd8b7281f.png" alt="">

    </div>
         
   

    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
</div>
<!-- end about us -->

<!--

      <div class="honduras">
   <img src="layoutt/image/work15.png" alt="">
   <h3>Honduras</h3>
  </div>
     <div class="palau">
   <img src="layoutt/image/work16.png" alt="">
   <h3>Palau</h3>
  </div>
       <div class="panama">
   <img src="layoutt/image/work17.png" alt="">
   <h3>Panama</h3>
  </div>
      <div class="sierra">
   <img src="layoutt/image/work18.png" alt="">
   <h3> Sierra leone </h3>
  </div>
    <div class="comoros">
   <img src="layoutt/image/work19.png" alt="">
   <h3>Comoros</h3>
  </div>
     <div class="bolivia">
   <img src="layoutt/image/work20.png" alt="">
   <h3 class="text-center">Bolivia</h3>
  </div>
     <!--
     <div class="map">
      <img src="layoutt/image/work21.png" alt="">
     </div>
     -->


<div class="services-marine" id="scroollogestic">
 <div class="container">
  <h1 class="text-center">Logestic Services</h1>
  <div class="vessel">
   <a href="includess/templates/offerings.php?do=airfreight">

    <img src="layoutt/image/6.png" alt="">

   <h3>AIR FREIGHT</h3>
   <p>Our Airfreight Network offers the fastest and most convenient connections between the shipment’s origin and destination</p>
   </a>
  </div>
    <div class="Seafarers">
<a href="includess/templates/offerings.php?do=seafreight">
    <img src="layoutt/image/7.png" alt="">

   <h3>SEA FREIGHT</h3>
   <p>GEMS has been offering a wide range of ocean freight services clearance and handling door-to-door ocean delivery to all key locations around the globe</p>
</a>
  </div>
      <div class="Consultancy">

<a href="includess/templates/offerings.php?do=overland">
   <img src="layoutt/image/8.png" alt="">

   <h3>OVERLAND</h3>
   <p>GEMS offers a variety of transportation services from trusted transportation companies with best price and fastest delivery</p>
</a>
  </div>
 <div class="Statutory">
<a href="includess/templates/offerings.php?do=customsbrokerage">
    <img src="layoutt/image/9.png" alt="">

   <h3>BROKERAGE</h3>
   <p>Compliance with customs regulations is an essential component in the international supply chain and a responsibility for all importers</p>
</a>
  </div>
 
  <div class="rail">
<a href="includess/templates/offerings.php?do=cargoinsurance">
    <img src="layoutt/image/10.png" alt="">

   <h3>CARGO INSURANCE</h3>
   <p>Your shipment will go through many hands before it reaches its final destination</p>
</a>
  </div>
  <div class="Inspections">

<a href="includess/templates/offerings.php?do=projectlogistics">
    <img src="layoutt/image/11.png" alt="">

   <h3>PROJECT LOGISTICS</h3>
   <p>GEMS has been serving Project Cargo customers involved in various industries that include moves for</p>
</a>
  </div>
  
    <div class="chain">
<a href="includess/templates/offerings.php?do=supplychain">
<img src="layoutt/image/12.png" alt="">

   <h3>SUPPLY CHAIN</h3>
  <p>GEMS delivers a distinctive supply chain performance that enables clients to segregate the transportation carrier costs from origin to destination</p>
</a>
  </div>
    
 <div class="Vacancies">
  <a href="includess/templates/offerings.php?do=warehousing">
     <img src="layoutt/image/13.png" alt="">

   <h3>WAREHOUSING</h3>
   <p>GEMS warehousing facilities are built in a flexible design to meet the industry needs</p>
  </a>
  </div>
   
 </div>
</div>

<div class="industries" id="scrollproduct">
 <div class="container">
  <h1>PRODUCTS AND SERVICES</h1>
 
  <div id="prouduct" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#prouduct" data-slide-to="0" class="active"></li>
    <li data-target="#prouduct" data-slide-to="1"></li>
    <li data-target="#prouduct" data-slide-to="2"></li>
    <li data-target="#prouduct" data-slide-to="3"></li>
       <li data-target="#prouduct" data-slide-to="4"></li>
    <li data-target="#prouduct" data-slide-to="5"></li>
    <li data-target="#prouduct" data-slide-to="6"></li>
        <li data-target="#prouduct" data-slide-to="7"></li> 
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
     
      <div class="aerospace">
     
       <p>GEMS supports you in every sector of your supply chain through optimizing the process, reducing the costs, and advising the best solutions for your business with our dependable compliance procedures</p>
       <a href="includess/templates/productsandservices.php?do=aerospace"><img src="layoutt/image/6.png" alt=""></a>
         <a href="includess/templates/productsandservices.php?do=aerospace"><h2>AEROSPACE</h2></a>
      </div>
     </div>
 
        <div class="item">
      <div class="aerospace">
  
       <p>With the growth of the chemical sector among the developing markets, GEMS has prepared a set of secure and highly professional logistics solutions. We are highly trained in delivering dangerous goods as GEMS has professional expertise </p>
       <a href="includess/templates/productsandservices.php?do=chemicals"><img src="layoutt/image/14.png" alt=""></a>
       <a href="includess/templates/productsandservices.php?do=chemicals"><h2>CHEMICALS</h2></a>
      </div>
     
    </div>
        
       <div class="item">
          <div class="aerospace">
              
       <p>With our worldwide capabilities to serve complex operations, GEMS has well established its tailor-made automotive logistics solutions to deliver valuable results while keeping the assembly lines running. We are proud to have the key automotive dealers among our list of loyal customers</p>
       <a href="includess/templates/productsandservices.php?do=automotive"><img src="layoutt/image/15.png" alt=""></a>
       <a href="includess/templates/productsandservices.php?do=automotive"><h2>AUTOMOTIVE</h2></a>
      </div>

    </div>
         
         <div class="item">
          <div class="aerospace">
            
       <p>GEMS Oil & Gas experts provide a full range of onshore and offshore services which involves<br>Customized logistics solutions for transport, customs clearance, and documentation formalities</p>
       <a href="includess/templates/productsandservices.php?do=energy"><img src="layoutt/image/16.png" alt=""></a>
         <a href="includess/templates/productsandservices.php?do=energy"><h2>ENERGY</h2></a>
      </div>
    </div>    
        <div class="item">
      <div class="aerospace">
             
       <p>At GEMS, we provide highly controlled solutions for a proper management of food and beverage shipments across all areas taking into consideration any temperature ranges. Our worldwide presence and experience facilitates our job excellence and continuous innovation</p>
       <a href="includess/templates/productsandservices.php?do=foodandbevearge"><img src="layoutt/image/17.png" alt=""></a>
        <a href="includess/templates/productsandservices.php?do=foodandbevearge"><h2>FOOD & BEVEARGE</h2></a>
      </div>
    </div>
        
       <div class="item">
          <div class="aerospace">
             
       <p>The healthcare industry has strict regulations and tight requirements for the shipping and storage of life-essential products. At GEMS, we offer a set of services that comes in line with those requirements and our facilities and transportation networks are designed to comply</p>
       <a href="includess/templates/productsandservices.php?do=healthcare"><img src="layoutt/image/18.png" alt=""></a>
        <a href="includess/templates/productsandservices.php?do=healthcare"><h2>HEALTH CARE</h2></a>
      </div>
    </div>
         
         <div class="item">
          <div class="aerospace">
              
       <p>We provide all-inclusive logistics solutions to serve industrial companies of all types, nature, sizes, and requirements. We serve many sectors that are not limited to   Construction Transportation and Infrastructure  Medical equipment   Aluminum and Steel Paper and Fiber
</p>
       <a href="includess/templates/productsandservices.php?do=industrials"><img src="layoutt/image/19.png" alt=""></a>
         <a href="includess/templates/productsandservices.php?do=industrials"> <h2>INDUSTRIALS</h2></a>
      </div>
    </div> 
         <div class="item">
          <div class="aerospace">
              
       <p>With the critical requirements or having safety, quality, temperature and hygiene necessities, our logistics solutions guarantee the delivery of the goods with high standards. At GEMS, we understand the importance of these special supply chain needs</p>
       <a href="includess/templates/productsandservices.php?do=pharmaceutical"><img src="layoutt/image/20.png" alt=""></a>
       <a href="includess/templates/productsandservices.php?do=pharmaceutical"><h2>PHARMACEUTICAL</h2></a>
      </div>
    </div> 
  </div>

</div>
 </div>
</div>


<div class="services-marine" id="scrollmarine">
 <div class="container">
  <h1 class="text-center">Marine Services</h1>

    <div class="Suppliers">
<a href="includess/templates/marineservices.php?do=bunkeringsuppliers">
    <img src="layoutt/image/901.png" alt="">

   <h3>Bunkering Suppliers</h3>
   <p>Being in direct contact with the major bunker suppliers in Egypt as well as having a strong market position, we ensure safe / prompt delivery of quality bunker products at competitive prices...</p>
</a>
  </div>
      <div class="Crew">

<a href="includess/templates/marineservices.php?do=crewchanges">
   <img src="layoutt/image/902.png" alt="">

   <h3>Crew Changes</h3>
   <p>Experienced GEMS team arrange all formalities of embarkation and disembarkation operations, also assisting incoming and outgoing crew members by with immigration, police and customs authorities...</p>
</a>
  </div>
 <div class="Provision">
<a href="includess/templates/marineservices.php?do=provisionsupply">
    <img src="layoutt/image/903.png" alt="">

   <h3>Provision Supply</h3>
   <p>Over the past few years, ever-greater cost awareness has developed in the sector. In addition, with the Maritime Labour Convention (MLC), the supply of sufficient and healthy provisions has taken a prominent position. Your crew must be assured of a varied ...</p>
</a>
  </div>
 
  <div class="Ships">
<a href="includess/templates/marineservices.php?do=shipsagence">
    <img src="layoutt/image/904.png" alt="">

   <h3>Ships Agency</h3>
   <p>GEMS offer a full range of agency services at all major Egyptian Ports. 
We work closely with harbor masters, local authorities and service providers, to achieve prompt attention to vessels with minimum delays and cost to the Owner...
</p>
</a>
  </div>
  <div class="Suez">

<a href="includess/templates/marineservices.php?do=suezcanaltransit">
    <img src="layoutt/image/905.png" alt="">

   <h3>Suez Canal Transit</h3>
   <p>GEMS qualified team has trained to finish all Suez Canal authority procedures before vessel arrival, also easy entrance to berth area and following up Completion all formalities (marine inspection, quarantine doctor, immigration, visas and pilot)... </p>
</a>
  </div>
  
    <div class="Technical">
<a href="includess/templates/marineservices.php?do=technicalshipsupplies">
<img src="layoutt/image/906.png" alt="">

   <h3>Technical Ship Supplies</h3>
  <p>Through our own transit stores, we can supply your vessel with bond- engine-deck stores imported from the most reliable sources in the Far East and Europe & the ability of easy clearance of supply and shipping at Cairo airport and immediate dispatch of spares to or from the vessel... </p>
</a>
  </div>

 </div>
</div>



<div class="contact-us" id="scrollcontact">
 <div class="container">
  <h1 class="text-center">Contact US</h1>
  <div class="phone">
   <i class="fa fa-mobile mo"></i>
   <h2>01220222275<br>03-5834144</h2>
  </div>
  <div class="sendmail">
   <i class="fa fa-envelope ma"></i>
   <h2>info@globalexpressms.com</h2>
  </div>
  <div class="adreesscompany">
   <i class="fa fa-map-marker lo"></i>
   <h2>366 El Gaish Street Gleem,Alexandria-Egypt</h2>
  </div>
   </div>
</div>
<div class="branches">
 <div class="container">
  <h1 class="text-center">Our Branches</h1>
  <div class="branche-one">
   <h3>Fakhry Alexandria Logistic</h3>
   <div class="bran">
   <i class="fa fa-mobile mo"></i>
   <span>0097455765990</span><br><br>
      <i class="fa fa-envelope ma"></i>
      <span>mahmoud_5810@yahoo.com</span><br><br>
  <i class="fa fa-map-marker lo"></i>
  <a href="https://goo.gl/maps/peLEhRKeLYmbKWec7" target="_blank"><span>Qatar</span></a><br><br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923095.8092917283!2d51.778182176044496!3d25.343048667997703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x1cfa88cf812b4032!2z2YLYt9ix!5e0!3m2!1sar!2seg!4v1601933789852!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  </div>
    <div class="branche-two">
   <h3>Fakhry  Logistics</h3>
   <div class="bran">
   <i class="fa fa-mobile mo"></i>
   <span>0096871128710</span><br><br>
      <i class="fa fa-envelope ma"></i>
      <span>mahmoud_5810@yahoo.com</span><br><br>
  <i class="fa fa-map-marker lo"></i>
  <a href="https://goo.gl/maps/uMMzuroJww9kdWVL6" target="_blank"><span>Store In Public Free Region Sultante Of Oman<br>Sohar Port </span></a><br><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7608487.132875287!2d60.645482575673206!3d21.386691127991792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3dd69f66a9d59bbf%3A0x3a064c7665b1a817!2z2LnZhdin2YY!5e0!3m2!1sar!2seg!4v1601937029958!5m2!1sar!2seg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
 </div>

</div>
</div>

<div class="container-contact">
  <div class="container">
  <h1 class="text-center">Contact Form</h1>
  <form class="contactform" action="?do=Insert" method="post">
  
    <?PHP if(! empty($formErrors)) { ?>
<div class="alert alert-danger alert-dismissible" role="start">
 <button type="button" class="close" data-dismiss="alert" aria-label="close">
   <span aria-hidden="true">&times;</span>
 </button>
 <?PHP
  foreach($formErrors as $error){
 echo $error . '<br/>';
}
?>
</div>
<?PHP } ?>
<?php if(isset($success)) {echo $success; } ?>
<div class="form-group>">
  <input type="text" placeholder="Full Name" name="FullName" class="fullname form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($full)) { echo  $full; }?>" />
  <div class="alert alert-danger custom-alert">
   User Name Must Be Larger Than <strong> 4 </strong> characters
  </div>
  </div>
  <div class="form-group>">
  <input type="text" placeholder="Mobile Number" name="MobileNumber" class="form-control input-lg mobilenumber" autocomplete"off" required="required" value="<?php if (isset($mobile)) { echo  $mobile; }?>" />
  <div class="alert alert-danger custom-alert">
   Mobile Number cant Be  <strong>Empty</strong>
  </div>
  </div>
  
<div class="form-group>">
  <input type="email" placeholder="Email Address" name="EmailAddress" class="form-control input-lg email" autocomplete"off" required="required" value="<?php if (isset($email)) { echo  $email; }?>" />
  <div class="alert alert-danger custom-alert">
   Email Cant Be  <strong>Empty</strong>
  </div>
    </div>
  <div class="form-group>">
  <input type="text" placeholder="Subject" name="Subject" class="form-control input-lg subject" autocomplete"off" required="required" value="<?php if (isset($subject)) { echo  $subject; }?>" />
  <div class="alert alert-danger custom-alert">
   Subject Cant Be  <strong>Empty</strong>
  </div>
    </div>
<div class="form-group>">
  <input type="text" placeholder="Message" name="Message" class="form-control input-lg message" autocomplete"off" required="required" value="<?php if (isset($mess)) { echo  $mess; }?>" />
    <div class="alert alert-danger custom-alert">
   Message Cant Be less than <strong>10</strong> characters
   </div>
      </div>
  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block"/>
  </form>
    </div>
</div>
</div>
<div class="containerr-contact">
 <div class="container">
   <h1 class="text-center">Search In Web Site</h1>
  <form class="contactform" action="includess/templates/search.php" method="get">
      <input type="text" placeholder="Search..." name="searchArea" class="form-control input-lg sear" required="required">
   <input type="submit" name="search" value="search" class="btn btn-primary btn-lg"/>
      <div class="form-group>">
     <div class="alert alert-danger custom-alert">
   Search Must Be Larger Than <strong> 3 </strong> characters
  </div>
 </div>
  </form>
   </div>
</div>

<!-- comment -->
<div class="container-contact">
 <div class="container">
  <div class="panel panel-primary">
  <div class="panel-heading">
   <h3 class="text-center">Comments Our Customers</h3>
  </div>
  <div class="panel-body">

     <?php
  foreach($commentings as $commenting)
  {
   echo "<div class='container-contact commentings'>";
    echo "<h4>" .$commenting['FullName']. "</h4>";
    echo "<span>" .$commenting['Comment']. "</spsn>" . '</br>';
    echo "</div>";
  }
  ?>

  </div>
</div>
  <button type="button" id="myButton" data-loading-text="Loading..." class="btn btn-primary">
  <a href="includess/templates/comment.php">Read More Comments</a>
</button>
 </div>
</div>
<div class="container-contact">
  <div class="container">
  <h1 class="text-center">Add Comment</h1>
  <form class="contactform" action="?do=Commenting" method="post">
  
    <?PHP if(! empty($formErrors)) { ?>
<div class="alert alert-danger alert-dismissible" role="start">
 <button type="button" class="close" data-dismiss="alert" aria-label="close">
   <span aria-hidden="true">&times;</span>
 </button>
 <?PHP
  foreach($formErrors as $error){
 echo $error . '<br/>';
}
?>
</div>
<?PHP } ?>
<?php if(isset($success)) {echo $success; } ?>
<div class="form-group>">
  <input type="text" placeholder="Full Name" name="FullName" class="fullname form-control input-lg" autocomplete"off" required="required" value="<?php if (isset($full)) { echo  $full; }?>" />
  <div class="alert alert-danger custom-alert">
   User Name Must Be Larger Than <strong> 4 </strong> characters
  </div>
  </div>

  
<div class="form-group>">
  <input type="email" placeholder="Email Address" name="EmailAddress" class="form-control input-lg email" autocomplete"off" required="required" value="<?php if (isset($email)) { echo  $email; }?>" />
  <div class="alert alert-danger custom-alert">
   Email Cant Be  <strong>Empty</strong>
  </div>
    </div>

<div class="form-group>">
  <input type="text" placeholder="Comment" name="Comment" class="form-control input-lg comment" autocomplete"off" required="required" value="<?php if (isset($comm)) { echo  $comm; }?>" />
    <div class="alert alert-danger custom-alert">
   Comment Cant Be less than <strong>4</strong> characters
   </div>
      </div>
  <input type="submit" value="Add Comment" class="btn btn-primary btn-lg btn-block"/>
  </form>
    </div>
</div>
</div>

<div class="footerr">
 <div class="container">

  <div class="ourservices">
   <div class="who">
    <h2>ABOUT US</h2>
    <ul>
     <a href="includess/templates/about-us.php?do=whoweare"><li>WHO WE ARE</li></a>
 <a href="includess/templates/about-us.php?do=mission"><li>MISSION</li></a>
     <a href="includess/templates/about-us.php?do=vision"><li>VISION</li></a>
     <a href="includess/templates/about-us.php?do=values"><li>VALUES</li></a>
     <a href="includess/templates/about-us.php?do=ourteam"><li>OUR TEAM</li></a>
    </ul>
   </div>
   <div class="air">
    <h2>LOGESTIC SERVICES</h2>
    <ul>
     <a href="includess/templates/offerings.php?do=airfreight"><li>AIR FREIGHT</li></a>
     
<a href="includess/templates/offerings.php?do=seafreight"><li>SEA FREIGHT</li></a>
     <a href="includess/templates/offerings.php?do=overland"><li>OVERLAND</li></a>
     <a href="includess/templates/offerings.php?do=customsbrokerage"><li>CUSTOMS BROKERAGE</li></a>
     
<a href="includess/templates/offerings.php?do=cargoinsurance"><li>CARGO INSURANCE</li><a/>
     
<a href="includess/templates/offerings.php?do=projectlogistics"><li>PROJECT LOGISTICS</li></a>
     <a href="includess/templates/offerings.php?do=supplychain"><li>SUPPLY CHAIN</li></a>
     <a href="includess/templates/offerings.php?do=warehousing"><li>WAREHOUSING</li>
     <a href="includess/templates/requestlogisticservice.php"><li>REQUEST LOGISTIC SERVICE</li>
     </ul><a/>
   </div>
   <div class="aero">
    <h2>PRODUCTS & SERVICES</h2>
    <ul>
    <a href="includess/templates/productsandservices.php?do=aerospace"> <li>AEROSPACE</li></a>
     
<a href="includess/templates/productsandservices.php?do=chemicals"><li>CHEMICALS</li></a>
     <a href="includess/templates/productsandservices.php?do=automotive"><li>AUTOMOTIVE</li></a>
     <a href="includess/templates/productsandservices.php?do=energy"><li>ENERGY</li></a>
     <a href="includess/templates/productsandservices.php?do=foodandbevearge"><li>FOOD & BEVEARGE</li></a>
     <a href="includess/templates/productsandservices.php?do=healthcare"><li>HEALTHCARE</li></a>
     <a href="includess/templates/productsandservices.php?do=industrials"><li>INDUSTRIALS</li></a>
     <a href="includess/templates/productsandservices.php?do=pharmaceutical"><li>PHARMACEUTICAL</li></a>
     <a href="includess/templates/requestproductandservicr.php"><li>REQUEST PRODUCT & SERVICE</li></a>
     </ul>
   </div>
      <div class="loca">
    
    <ul>
     <h2>Marine Services</h2>
    <a href="includess/templates/marineservices.php?do=bunkeringsuppliers"> <li>BUNKERING SUPPLIERS
</li></a>
     
<a href="includess/templates/marineservices.php?do=crewchanges"><li>Crew Changes
</li></a>
     <a href="includess/templates/marineservices.php?do=provisionsupply"><li>PROVISION SUPPLY
</li></a>
     <a href="includess/templates/marineservices.php?do=shipsagence"><li>SHIPS AGENCY
</li></a>
     <a href="includess/templates/marineservices.php?do=suezcanaltransit"><li>SUEZ CANAL TRANSIT
</li></a>
     <a href="includess/templates/marineservices.php?do=technicalshipsupplies"><li>TECHNICAL SHIP SUPPLY
</li></a>
       <a href="includess/templates/requestmarineservice.php"><li>REQUEST MARINE SERVICE
</li></a>   
     </ul>
   </div>
  </div>

  <div class="quicklinks">
 <h2>Quick Links</h2>
   <ul>
    <li>Terms</li>
    <li>Policy</li>
    <li>About Us</li>
    <li>Contact Us</li>
   </ul>
  </div>
  <div class="followus">
   <h2>Follow Us</h2>
  <a href="https://www.facebook.com/GlobalExpressMS" target="_blank"><i class="fa fa-facebook-square"></i><a/>
  <a href="https://twitter.com/GlobalExpressMs" target="_blank"><i class="fa fa-twitter-square"></i></a>
  <a href="https://www.linkedin.com/company/68491727/admin/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
  <a href="https://www.instagram.com/globalexpressms/" target="_blank"><i class="fa fa-instagram"></i></a>
  </div>

      <div class="copy-right">
     <p class="copyright">copyright &copy; 2020 all right reserved to <span>GLOBAL EXPRESS AND MARINE SERVICES</span></p> 
  </div>
    <a class="scroll-to-top" href="#">
   <i class="fa fa-chevron-up" aria-hidden="true"></i>
  </a>    
</div>  
    </div>

  <a class="scroll-to-top" href="#">
   <i class="fa fa-chevron-up" aria-hidden="true"></i>
  </a>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7ba49c138104eb"></script>
<?php
}
include 'includess/templates/footindex.php';
ob_end_flush();

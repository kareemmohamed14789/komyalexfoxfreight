<?PHP
session_start();
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
if($_SERVER['REQUEST_METHOD'] == 'POST') {

 $full = filter_var($_POST['FullName'], FILTER_SANITIZE_STRING);
 $mobile = filter_var($_POST['MobileNumber'], FILTER_SANITIZE_NUMBER_INT);
 $email = filter_var($_POST['EmailAddress'], FILTER_SANITIZE_EMAIL);
 $subject = filter_var($_POST['Subject'], FILTER_SANITIZE_STRING);
 $mess =    filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
 $logis = $_POST['Logestic'];
 $prod = $_POST['Product'];
 $mari = $_POST['Marine'];
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

 $stmt = $con->prepare("INSERT INTO request(FullName, MobileNumber, EmailAddress, Subject, Message, Logistic, Product, Marine)
                       VALUES(:zfulln, :zmobilen, :zemaila, :zsubj, :zmessa, :zlogist, :zprodu, :zmarin) ");
 $stmt->execute(array(
  ':zfulln' => $full,
  ':zmobilen' => $mobile,
  ':zemaila' => $email,
  ':zsubj' => $subject,
  ':zmessa' => $mess,
   ':zlogist' => $logis,
  ':zprodu' => $prod,
  ':zmarin' => $mari 
  ));
 echo
"
<div class='container'>
<div class='col-sm-12 alert alert-success text-center'>Thank You For Contacting With US <br> Your Message Was Sent Successfuly</div>
</div>
";
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- IE compitability meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- first mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Service</title>
    <link rel= "stylesheet" href="../../layoutt/css/normalize.css">
    <link rel= "stylesheet" href="../../layoutt/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel= "stylesheet" href="../../layoutt/css/bootstrap.min.css">
    <link rel= "stylesheet" href="../../layoutt/css/rtl.css">
    <link rel= "stylesheet" href="../../layoutt/css/main.css">
    <!--[if lt IE 9]>
    <script src="../../layoutt/js/html5shiv.min.js"></script>
    <script src="../../layoutt/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbarr-media">
  <div class="container-fluid">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <a href="../../index.php"><img alt="Brand" src="../../layoutt/image/logo.png"></a>
    </div>
     <br><br><br><br><br>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
 
          <a href="#" class="dropdown-toggle .custom-about"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="about-us.php?do=whoweare">Who We Are</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="about-us.php?do=mission">Mission</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="about-us.php?do=vision">Vision</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="about-us.php?do=values">Values</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="about-us.php?do=ourteam">Our Team</a></li>
          </ul>
        </li>
      </ul>
      
              <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGESTIC SERVICES<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="offerings.php?do=airfreight">AIR FREIGHT</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="offerings.php?do=seafreight">SEA FREIGHT</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="offerings.php?do=overland">OVERLAND</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="offerings.php?do=customsbrokerage">CUSTOMS BROKERAGE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="offerings.php?do=cargoinsurance">CARGO INSURANCE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="offerings.php?do=projectlogistics">PROJECT LOGISTICS</a></li>
            <li role="separator" class="divider"></li>            
            <li><a href="offerings.php?do=supplychain">SUPPLY CHAIN</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="offerings.php?do=warehousing">WAREHOUSING</a></li>   
          </ul>
        </li>
      </ul>
              
              
                     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS & SERVICES<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="productsandservices.php?do=aerospace">AEROSPACE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productsandservices.php?do=chemicals">CHEMICALS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productsandservices.php?do=automotive">AUTOMOTIVE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productsandservices.php?do=energy">ENERGY</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productsandservices.php?do=foodandbevearge">FOOD & BEVEARGE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productsandservices.php?do=healthcare">HEALTHCARE</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productsandservices.php?do=industrials">INDUSTRIALS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="productsandservices.php?do=pharmaceutical">PHARMACEUTICAL</a></li>      
          </ul>
        </li>
      </ul>       
   
     <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MARINE SERVICES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            
             <li><a href="marineservices.php?do=bunkeringsuppliers">BUNKERING SUPPLIERS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="marineservices.php?do=crewchanges">CREW CHANGES</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="marineservices.php?do=provisionsupply">PROVISION SUPPLY</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="marineservices.php?do=shipsagence">SHIPS AGENCY</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="marineservices.php?do=suezcanaltransit">SUEZ CANAL TRANSIT</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="marineservices.php?do=technicalshipsupplies">TECHNICAL SHIP SUPPLIES</a></li>
           </ul>
        </li>
      </ul>
<ul class="nav navbar-nav">

<li><a href="sustainability.php">SUSTAINABILITY</a></li>
      </ul>
        <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTACT<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">OUR LOCATIONS</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">SUBMIT A RFQ</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">CONTACT US</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">CAREERS</a></li>
          </ul>
        </li>
      </ul>
      <!--
         <ul class="nav navbar-nav">
        <li><a href="includess/templates/arabic.php">Ar</a></li>
       
        <li><a href="includess/templates/signup.php">Sign Up <span class="sr-only">(current)</span></a></li>
        <li><a href="includess/templates/login.php">LogIn</a></li>
  
      </ul>
         -->
    </div>

  </div>
  </div>
</nav>
  
  
  
  
<div class="container-contact">
  <div class="container">
  <h1 class="text-center">Request Service Form</h1>
  <form class="contactform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  
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
         <select name="Logestic" class="request-loge">
          <option value="Request Logistic Service">Request Logistic Service</option>
          <option value="AIR FREIGHT">AIR FREIGHT</option>
          <option value="SEA FREIGHT">SEA FREIGHT</option>
          <option value="OVERLAND">OVERLAND</option>
          <option value="CUSTOMS BROKERAGE">CUSTOMS BROKERAGE</option>
          <option value="CARGO INSURANCE">CARGO INSURANCE</option>
          <option value="PROJECT LOGISTICS">PROJECT LOGISTICS</option>
          <option value="SUPPLY CHAIN">SUPPLY CHAIN</option>
          <option value="WAREHOUSING">WAREHOUSING</option>           
       </select>
              <select name="Product" class="request-loge">
          <option value="Request Logistic Service">Request Logistic Service</option>
          <option value="AEROSPACE">AEROSPACE</option>    
          <option value="CHEMICALS">CHEMICALS</option>
          <option value="AUTOMOTIVE">AUTOMOTIVE</option>
          <option value="ENERGY">ENERGY</option>
          <option value="FOOD & BEVEARGE">FOOD & BEVEARGE</option>
          <option value="HEALTHCARE">HEALTHCARE</option>
          <option value="INDUSTRIALS">INDUSTRIALS</option>
          <option value="PHARMACEUTICAL">PHARMACEUTICAL</option>          
       </select>
              <select name="Marine">
          <option value="Request Logistic Service">Request Logistic Service</option>
          <option value="Bunkering Suppliers">Bunkering Suppliers</option>
          <option value="Crew Changes">Crew Changes</option>
          <option value="Provision Supply">Provision Supply</option>
          <option value="Ships Agency">Ships Agency</option>
          <option value="Suez Canal Transit">Suez Canal Transit</option>
          <option value="Technical Ship Supplies">Technical Ship Supplies</option>          
       </select>
   
<div class="form-group>">
  <input type="text" placeholder="Message" name="Message" class="form-control input-lg message" autocomplete"off" required="required" value="<?php if (isset($mess)) { echo  $mess; }?>" />
    <div class="alert alert-danger custom-alert">
   Message Cant Be less than <strong>10</strong> characters
   </div>
      </div>
      
      
  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block submitai"/>
  </form>
    </div>
</div>
   <div class="footerr">
 <div class="container">

  <div class="ourservices">
   <div class="who">
    <h2>ABOUT US</h2>
    <ul>
     <a href="about-us.php?do=whoweare"><li>Who We Are</li></a>
     <a href="about-us.php?do=mission"><li>Mission</li></a>
     
<a href="about-us.php?do=vision"><li>Vision</li></a>
     
<a href="about-us.php?do=values"><li>Values</li><a/>
     <a href="about-us.php?do=ourteam"><li>Our Team</li></a>
    </ul>
   </div>
   <div class="air">
    <h2>Logestic Services</h2>
    <ul>
     
<a href="offerings.php?do=airfreight"><li>AIR FREIGHT</li></a>
     <a href="offerings.php?do=seafreight"><li>SEA FREIGHT</li></a>
     <a href="offerings.php?do=overland"><li>OVERLAND</li></a>
     <a href="offerings.php?do=customsbrokerage"><li>CUSTOMS BROKERAGE</li></a>
     <a href="offerings.php?do=cargoinsurance"><li>CARGO INSURANCE</li></a>
     <a href="offerings.php?do=projectlogistics"><li>PROJECT LOGISTICS</li></a>
     
<a href="offerings.php?do=supplychain"><li>SUPPLY CHAIN</li></a>
     <a href="offerings.php?do=warehousing"><li>WAREHOUSING</li></a>
     </ul>
   </div>
   <div class="aero">
    <h2>PRODUCTS & SERVICES</h2>
    <ul>
     
<a href="productsandservices.php?do=aerospace"><li>AEROSPACE</li></a>
     <a href="productsandservices.php?do=chemicals"><li>CHEMICALS</li></a>
     <a href="productsandservices.php?do=automotive"><li>AUTOMOTIVE</li></a>
<a href="productsandservices.php?do=energy"><li>ENERGY</li></a>
     <a href="productsandservices.php?do=foodandbevearge"><li>FOOD & BEVEARGE</li></a>
     <a href="productsandservices.php?do=healthcare"><li>HEALTHCARE</li></a>
     <a href="productsandservices.php?do=industrials"><li>INDUSTRIALS</li></a>
     <a href="productsandservices.php?do=pharmaceutical"><li>PHARMACEUTICAL</li></a>
     </ul>
   </div>
      <div class="loca">
    
     <ul>
     <h2>Marine Services</h2>
    <a href="marineservices.php?do=bunkeringsuppliers"> <li>BUNKERING SUPPLIERS
</li></a>
     
<a href="marineservices.php?do=crewchanges"><li>CREW CHANGES
</li></a>
     <a href="marineservices.php?do=provisionsupply"><li>PROVISION SUPPLY
</li></a>
     <a href="marineservices.php?do=shipsagence"><li>SHIPS AGENCY
</li></a>
     <a href="marineservices.php?do=suezcanaltransit"><li>SUEZ CANAL TRANSIT
</li></a>
     <a href="marineservices.php?do=technicalshipsupplies"><li>TECHNICAL SHIP SUPPLIES
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
  <a href="https://www.facebook.com/GlobalExpressMS" target="_blank"><i class="fa fa-facebook-square"></i></a>
  <a href="https://twitter.com/GlobalExpressMs" target="_blank"><i class="fa fa-twitter-square"></i></a>
  <a href="https://www.linkedin.com/company/68491727/admin/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
  <a href="https://www.instagram.com/globalexpressms/" target="_blank"><i class="fa fa-instagram"></i></a>
  </div>
      <div class="copy-right">
     <p class="copyright">copyright &copy; 2020 all right reserved to <span>GLOBAL EXPRESS AND MARINE SERVICES</span></p> 
  </div>
</div>  
    </div> 
  <script src="../../layoutt/js/jquery-1.12.4.min.js"></script>
  <script src="../../layoutt/js/bootstrap.min.js"></script>
  <script src="../../layoutt/js/main.js"></script>
  </body>
  </html> 

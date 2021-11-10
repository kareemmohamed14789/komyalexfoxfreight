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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <br>
      <form class="navbar-form navbar-right" action="search.php" method="get">
          <input type="text" placeholder="Search..." name="searchArea" class="form-control seara" required="required">
        <button type="submit" name="search" value="search" class="btn btn-primary">search</button>
              <div class="form-group form-search">
     <div class="alert alert-danger alert-dismissible custom-alert sear-alert">
   Search Must Be Larger Than <strong> 3 </strong> characters
  </div>
 </div>     
  <div class="followus followusnav">
  <a href="https://www.facebook.com/GlobalExpressMS" target="_blank"><i class="fa fa-facebook-square"></i><a/>
  <a href="https://twitter.com/GlobalExpressMs" target="_blank"><i class="fa fa-twitter-square"></i></a>
  <a href="https://www.linkedin.com/company/68491727/admin/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
  <a href="https://www.instagram.com/globalexpressms/" target="_blank"><i class="fa fa-instagram"></i></a>
  </div>
      </form>
     <br><br><br>
          <?php
    if(isset($_SESSION['UserName'])){
        ?>
        <div class="signuplogin">  
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Your Profile<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php"><?php echo $_SESSION['UserName'] ?></a></li>
            <li role="separator" class="divider"></li>
<li><a href="profile.php?do=edit&Activatecode=<?php echo $_SESSION['Active'] ?>">Edit Your Info</a></li>
            <li role="separator" class="divider"></li>           
            <li><a href="profile.php?do=History">History</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
        </div> 
      <?php

       }else{
        ?>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="signup.php">Sign Up</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="login.php">Log In</a></li>
          </ul>
        </li>
      </ul> 
      <?php
    }
      ?>     
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
            <li role="separator" class="divider"></li>
            <li><a href="requestlogisticservice.php">REQUEST LOGISTIC SERVICE</a></li>
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
            <li role="separator" class="divider"></li>
            <li><a href="requestproductandservicr.php">REQUEST PRODUCT & SERVICE</a></li>
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
                        <li role="separator" class="divider"></li>
            <li><a href="requestmarineservice.php">REQUEST MARINE SERVICE</a></li>
           </ul>
        </li>
      </ul>
     <!--
<ul class="nav navbar-nav">

<li><a href="sustainability.php">SUSTAINABILITY</a></li>
      </ul>
 -->
           <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-scroll="scrollcontact">CONTACT<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="contactus.php">CONTACT US</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="branches.php">OUR BRANCHES</a></li>
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
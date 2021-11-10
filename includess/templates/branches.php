<?PHP
ob_start();
session_start();
$pageTitle = 'Our Branches';
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
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

 $stmt = $con->prepare("INSERT INTO branch(FullName, MobileNumber, EmailAddress, Subject, Message)
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
redirectBranches($theMsg);
 echo "<div>";
}
}
}
if($do == 'Manage'){
?>
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


<div class="branches">
 <div class="container">
  <h1 class="text-center">Our Branches</h1>
  <div class="branche-one contact-branches">
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
    <div class="branche-two contact-branches">
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

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f7ba49c138104eb"></script>
<?php
}
 include 'footinr.php';
include 'footerinner.php';
ob_end_flush();

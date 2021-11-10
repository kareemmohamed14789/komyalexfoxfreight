<?PHP
ob_start();
session_start();
$pageTitle = 'Request Marine Services';
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
$id = $_POST['UserIdMarine'];
 $full = filter_var($_POST['FullName'], FILTER_SANITIZE_STRING);
 $mobile = filter_var($_POST['MobileNumber'], FILTER_SANITIZE_NUMBER_INT);
 $email = filter_var($_POST['EmailAddress'], FILTER_SANITIZE_EMAIL);
 $subject = filter_var($_POST['Subject'], FILTER_SANITIZE_STRING);
 $mess =    filter_var($_POST['Message'], FILTER_SANITIZE_STRING);
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

if(($mari) == "Request Marine Service"){
 $formErrors[] = 'You Must Select Any <strong>Marine Services</strong>';
}

echo "</div>";
if (empty($formErrors)){

 $stmt = $con->prepare("INSERT INTO marine(FullName, MobileNumber, EmailAddress, Subject, Message, Marine, UserIdMarine, Date, Time)
                       VALUES(:zfulln, :zmobilen, :zemaila, :zsubj, :zmessa, :zmarin, :zuim, now(), now()) ");
 $stmt->execute(array(
  ':zfulln' => $full,
  ':zmobilen' => $mobile,
  ':zemaila' => $email,
  ':zsubj' => $subject,
  ':zmessa' => $mess,
  ':zmarin' => $mari,
  ':zuim' => $id
  ));
 echo "<div class='container text-message'>";
$theMsg = 'Thank You For Contacting With US <br> Your Message Was Sent Successfuly';
redirectMarine($theMsg);
 echo "<div>";
}
}

if($do == 'Manage'){
?>
 
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
   <input type="hidden" name="UserIdMarine" value="<?php
  if(isset($_SESSION['UserName'])){
   echo $_SESSION['ID'];
  }
  ?>" />
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

              <select name="Marine">
          <option value="Request Marine Service">Request Marine Service</option>
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
      
      
  <input type="submit" value="Send Message" class="btn btn-primary btn-lg btn-block"/>
  </form>
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
ob_end_flush();

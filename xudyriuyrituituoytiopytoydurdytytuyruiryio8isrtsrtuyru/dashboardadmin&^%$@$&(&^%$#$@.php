<?php
session_start();
$pageTitle = 'Home';
    include "initinnerdashboard(&%$#@%&&^^$#@.php";
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  if ($do == 'Manage') {
   ?>

   <div class="container-contactt">
  <div class="container">
  <h1 class="text-center">Welcome To Dashboard<br><br>You Can Manage Your Website Now</h1>
  </div>
<?php }

include 'footerdash.php';
?>

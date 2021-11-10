<?php
session_start();
$pageTitle = 'Comments Our Customers';
    include "initinner.php";
    include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
 $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';

if($do == 'Manage') {
$sort = 'DESC';
$stmt = $con->prepare("SELECT * FROM comment WHERE CommentID != 1 ORDER BY Id $sort");
$stmt->execute();
$commentings = $stmt->fetchAll();
?>
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
 </div>
</div>
<?php
 }
 include 'footinr.php';
include 'footerinner.php';


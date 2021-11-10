<?php

function getTitle(){
    global $pageTitle;
    if(isset($pageTitle)){
        echo $pageTitle;
    }else{
        echo 'Default';
    }
}
function redirectHome ($theMsg, $seconds = 3){
    echo "<div class='alert alert-danger text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To profile Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = profile.php");
    exit();
}

function redirectContact ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact Us Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = contactus.php");
    exit();
}

function redirectBranches ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Our Branches Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = branches.php");
    exit();
}

function redirectLogistic ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Request Logistic Service Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = requestlogisticservice.php");
    exit();
}

function redirectUpdate ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Profile Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = logout.php");
    exit();
}
function redirectProuduct ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Request Product And Service Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = requestproductandservicr.php");
    exit();
}

function redirectMarine ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Request Marine Service Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = requestmarineservice.php");
    exit();
}

function redirectIndex ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Home Page Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = index.php");
    exit();
}
function redirectActivate ($theMsg, $seconds = 9){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Home Page Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = ../../index.php");
    exit();
}
function redirectAct ($theMsg, $seconds = 3){
    echo "<div class='alert alert-danger text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Sign Up Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = signup.php");
    exit();
}
function redirectRepeat ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Home Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = signup.php");
    exit();
}

function redirectVerifi ($theMsg, $seconds = 3){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With New Password Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = resetpassword.php");
    exit();
}

function redirectsuccess ($theMsg, $seconds = 5){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Log In Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = login.php");
    exit();
}
function redirectForget ($theMsg, $seconds = 5){
    echo "<div class='alert alert-danger text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Verification Code Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = activation.php");
    exit();
}
function redirectRestore ($theMsg, $seconds = 5){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Verification Code Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = activation.php");
    exit();
}

function redirectlogination ($theMsg, $seconds = 5){
    echo "<div class='alert alert-success text-center func-sig'>$theMsg</div>";
    echo "<div class='alert alert-info text-center'>You Will Be Redirected To Contact With Login Page After
    $seconds Seconds</div>";
    header("refresh:$seconds; url = login.php");
    exit();
}
function checkItem($select, $from, $value) {
   global $con;
   $statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");
   $statement->execute(array($value));
   $count = $statement->rowCount();
   return $count;
}

function getLogistic($where, $value) {
   global $con;
   $getLogistic = $con->prepare("SELECT * FROM logestic WHERE $where = ? ORDER BY UserId DESC");
   $getLogistic->execute(array($value));
   $logistics = $getLogistic->fetchAll();
   return $logistics;
}

function getProduct($where, $value) {
   global $con;
   $getProduct = $con->prepare("SELECT * FROM product WHERE $where = ? ORDER BY UserId DESC");
   $getProduct->execute(array($value));
   $products = $getProduct->fetchAll();
   return $products;
}

function getMarine($where, $value) {
   global $con;
   $getMarine = $con->prepare("SELECT * FROM marine WHERE $where = ? ORDER BY UserId DESC");
   $getMarine->execute(array($value));
   $marines = $getMarine->fetchAll();
   return $marines;
}

function get_pro_search(){
    $con = mysqli_connect($dsn, $user, $pass, $option);
    global $con;
    if(isset($_GET['search'])){
      $searchArea = $_GET['searchArea'];
      $get_pro_search = mysqli_query($con,"select * from product");
      $run_pro_search = mysqli_query($con, $get_pro_search);
             while($row_pro_search = mysqli_fetch_array($run_pro_search)){
        echo $row_pro_search;
      }
    }
}
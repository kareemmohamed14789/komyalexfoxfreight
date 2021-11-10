<?PHP
ob_start();
session_start();
$pageTitle = 'Request Logistic Services';
include "initinner.php";
include '../../xudyriuyrituituoytiopytoydurdytytuyruiryio8isrtsrtuyru/connectDWRTRGSFGHHTYHEHSFGFG.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
     $username = $_POST['user'];
     $password = $_POST['pass'];
     $hashedpass = sha1($password);
     
     $stmt = $con->prepare("SELECT
                           UserId,UserName, Password, Activatecode
                           FROM
                           users
                           WHERE UserName = ?
                           AND Password = ?
                           AND GroupID = 1
                           AND RegStatus = 1
                           AND Activate = 1
                           LIMIT
                            1");
     $stmt->execute(array($username, $password));
     $row = $stmt->fetch();
     $count = $stmt->rowCount();
     
      if($count > 0){
      $_SESSION['UserName'] = $username;
      $_SESSION['ID'] = $row['UserId'];
      $_SESSION['Active'] = $row['Activatecode'];
      header('Location:  ../../index.php');
      exit();
     }
     
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
     $username = filter_var($_POST['user'], FILTER_SANITIZE_STRING);
     $password = $_POST['pass'];
     $hashedpass = sha1($password);
     
     $stmt = $con->prepare("SELECT
                           UserId,UserName, Password, Activatecode
                           FROM
                           users
                           WHERE UserName = ?
                           AND Password = ?
                           AND GroupID = 0
                           AND RegStatus = 0
                           AND Activate = 1
                           LIMIT
                            1");
     $stmt->execute(array($username, $password));
     $row = $stmt->fetch();
     $count = $stmt->rowCount();
     
      if($count > 0){
      $_SESSION['UserName'] = $username;
      $_SESSION['ID'] = $row['UserId'];
      $_SESSION['Active'] = $row['Activatecode'];
      header('Location: ../../index.php');
      exit();
     }
    }
 ?>
<form class="login contactform" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
 <h2>LogIn</h2>
 <input  class="form-control input-lg" type="text" name="user" placeholder="username" autocomplete="off" value="<?php if (isset($username)) { echo  $username; }?>" />
 <input  class="form-control input-lg" type="password" name="pass" placeholder="password" autocomplete="new-password"/>
 <a href="forgetpassword.php">Forget Password ?</a>
 <input  class="btn btn-lg btn-primary btn-block" type="submit" value="login" />
</form>

<?php
 include 'footinr.php';
include 'footerinner.php';
ob_end_flush();



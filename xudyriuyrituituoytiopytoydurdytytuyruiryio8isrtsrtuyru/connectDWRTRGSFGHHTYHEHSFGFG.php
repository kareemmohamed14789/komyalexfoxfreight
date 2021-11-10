
<?php

$dsn = 'mysql:host=localhost;dbname=globasms_agency';
$user = 'globasms_globalm';
$pass = '123456789kimo@#$%';
$option = array(
    PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try {
    $con = new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo 'failed' . $e->getMessage();
}









/*
$dsn = 'mysql:host=localhost;dbname=globasms_agency';
$user = 'globasms_globalm';
$pass = '123456789kimo@#$%';
$option = array(
    PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

try {
    $con = new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo 'failed' . $e->getMessage();
}
*/


/*
   <input type="text" placeholder="Full Name" name="FullName" class="form-control input-lg fullname" autocomplete"off" required="required" value="<?php if (isset($full)) { echo  $full; }?>"/>
        <label>your favourite text editor</label>
        */
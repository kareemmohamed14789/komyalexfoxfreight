
<?php
include "initinner.php";
?>
        <div class="container">
        <h1 class="text-center">The Result Of Your Searching</h1>
        </div>
<?php
    if(isset($_GET['search'])){
    $con = mysqli_connect("localhost", "globasms_globalm", "123456789kimo@#$%", "globasms_agency");
    $searchArea = $_GET['searchArea'];
    $result = mysqli_query($con,"select * from search where FullName like '%$searchArea%'");
    if(mysqli_num_rows($result) > 0){
    while($row= mysqli_fetch_array($result)){
        echo
        '
        <div class="services-marine">
        <div class="container">
        <h1 class="text-center"></h1>
      <a href='.$row['Link'].'>     
   <div class="vessel searching">
   <img src='.$row['Image'].' alt="">
   <h3>'.$row['Title'].'</h3>
   <p>'.$row['Description'].'</p>
  </div>
   </a>  
        </div>
        </div>
        ';
      }
    }else{
   echo  '
     <div class="container">
     <div class="alert alert-danger">
     The Result Is Not found
     </div>
     </div>
     ';
    }
    }
include 'footinr.php'; 
 include 'footerinner.php'; 

 
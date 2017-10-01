<?php

require 'connection.php';
session_start();
$conn    = Connect();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form

      $myemail = mysqli_real_escape_string($conn,$_POST['email']);
      $mymob = mysqli_real_escape_string($conn,$_POST['mob']);
      $myboard = mysqli_real_escape_string($conn,$_POST['board']);


      $sql = "SELECT `id` FROM `users` WHERE `email`='$myemail' AND `phone`='$mymob'";
      $sql1 = "SELECT `id` FROM `boards` WHERE `name`='$myboard'";
      $result = mysqli_query($conn,$sql);
      $result1 = mysqli_query($conn,$sql1);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      $count1 = mysqli_num_rows($result);


      // If result matched $myemail and $mypassword, table row must be 1 row

      if($count == 1 && $count1 == 1) {
         $_SESSION['myemail'] = $myemail;
         $_SESSION['mymob'] = $mymob;
         $_SESSION['myboard'] = $myboard;
         $_SESSION['board_id'] = $row1['id'];



         header('location: board.php');
      }else {
         header('location: view.html?err=invalid data');
      }
   }
?>

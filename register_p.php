<?php
if($_POST)
{
include 'config.php';
session_start();
$_SESSION['showAlert']=0;


  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $pass = $_POST['pass'];
  $gender = $_POST['gender'];
  $cpass = $_POST['cpass'];
            if($pass=$cpass)
            {
              $sql = "INSERT INTO USER (first_name, last_name,email,password,contact,gender)VALUES('$first','$last','$email','$pass','$contact','$gender')";
              $result=mysqli_query($conn,$sql);
              if($result)
              {
                $_SESSION['showAlert']=1;  
                header("location:register.php"); 
              }
            }
            
  }

    ?>
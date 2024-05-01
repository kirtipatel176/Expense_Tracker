<?php

session_start();
include 'C:\xampp\htdocs\expenseTracker\finalproject\configuration\config.php';


if(isset($_POST['submit']))
{ 
   $email= $_SESSION['email'];
    
    $user=$_POST['name'];
    $accountype=$_POST['type'];
    $amount=$_POST['amount'];
    
 
if(isset($_SESSION['email'])==true)
{
    $query="insert into account (email,AccountName,AccountType,Income) values ('$email','$user','$accountype','$amount')";
    $AddData=mysqli_query($conn,$query);

    echo '<script type="text/javascript">alert("Balanace  Successfully created");
    window.location.href = "http://localhost/expenseTracker/finalproject/html/add_Balance.html";
  </script>';
}


}
?>
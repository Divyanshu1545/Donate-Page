<?php
$Initiater=$_POST['Initiater'];
$Phone=$_POST['Phone'];
$Email=$_POST['Email'];
$Beneficiary=$_POST['Beneficiary'];
$Reason=$_POST['Reason'];
$Description=$_POST['Description'];
$Fundraiser_Name=$_POST['Fundraiser_Name'];
$End_Date=$_POST['End_Date'];
$Target=$_POST['Target'];


  $host ="localhost";
  $dbUsername ="phpmyadmin";
  $password="Divyanshu"; 
  $dbname ="charity_website";
  
  //Database Connection
  $conn =new mysqli($host, $dbUsername, $password, $dbname);
  if($conn->connect_error){
      die('Connection Failed:' .$conn->connect_error);
  } else{
      $stmt =$conn->prepare("insert into Registrations(Initiater,Phone, Email, Beneficiary, Reason, Description, Fundraiser_Name,End_Date,Target)
      values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sisssssdi",$Initiater, $Phone, $Email, $Beneficiary, $Reason, $Description, $Fundraiser_Name, $End_Date, $Target);  
      $stmt->execute();
      echo "Resgistered Successfully....   :)";
      $stmt->close();
      $conn->close();


        }
?>
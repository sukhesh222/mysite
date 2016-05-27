<?php 
 /*use isset for not needed values.so that it wont show errors*/
 /*http://192.168.0.208/cewidusmusic/jsonLogin.php?username=sukhesh@123&password=94*/

include_once 'includes/functions.php';

$username=$_GET['username'];
$password=sha1($_GET['password']);

$result =queryMysql("SELECT * FROM users WHERE username='$username' AND password='$password'");
$num=mysql_num_rows($result);

       if($num==1)
            {
            
             echo '{"status" : "0", "message" : "success"}';
			
					   }
	   else
      {
          
             echo '{"status" : "1", "message" : "invalid"}';
			 
			
           }
		   
			







?>
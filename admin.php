<?php
// Inialize session
session_start();
?>

<?php
include_once 'functions.php';

$loginerror="";
if (isset($_POST['submit'])) {
$user=sanitizeString($_POST['user']);
$pass=sha1($_POST['pass']);


if(isset($_POST['choiceAdmin'])){
    $priv=$_POST['choiceAdmin'];
    
    if($priv=="all")
    {
$sql = "SELECT * FROM myshema.adminusername where userName='$user' and pass='$pass'  LIMIT 1";
$result = pg_query($sql);
$num=pg_num_rows($result);

 if ($num>0) {
    
     $_SESSION['username'] = $user;
     $_SESSION['password'] = $pass;
    
     
     if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
		$loginerror .= "\n The captcha code does not match!";
	}else{
     
         echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admindashboard3.php">';  
  
        }
     
	   }
    	
	  }  
          
if($priv=="hospital"){
$hospital= $_POST['hospital']; 
$sql = "SELECT * FROM myshema.hospitals_admin where userName='$user' and pass='$pass'and hospitalname='$hospital'  LIMIT 1";
$result = pg_query($sql);
$num=pg_num_rows($result);

 if ($num>0) {
    
     $_SESSION['username'] = $user;
     $_SESSION['password'] = $pass;
    
     
     if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
		$loginerror .= "\n The captcha code does not match!";
	}else{
     
         echo '<META HTTP-EQUIV="Refresh" Content="0; URL=hospitalAdmindashboard.php?hospital='.$hospital.'">';
  
        }
     
	   }
    	
	  }  
          
}

    }

    	
	  

?>
<!DOCTYPE HTML>

<html>
    <head> 
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
        <title>Sign-In</title> 
       
        <style>
#body-color{ background-color:#3498db; } 
#Sign-In
{ 
    margin-top:10%;
    margin-bottom:10%;
    margin-right:65%;
    margin-left:35%;
    border:3px solid #a1a1a1; 
    padding:20px 25px; 
    background:#95a5a6; 
    width:27%;
    border-radius:10px; 
    box-shadow: 20px 17px 26px;
    position: inherit;
} 
#button
{
    border-radius:10px; 
    width:100px; 
    height:40px; 
    background:#e74c3c; 
    font-weight:bold; 
    font-size:19px;
    cursor: pointer;
                    
}  
.admin 
{
   opacity: 0;
   max-height: 0;
   overflow: hidden;
   font-size: 16px;
  -webkit-transform: scale(0.8);
   -ms-transform: scale(0.8);
   transform: scale(0.8);
  -webkit-transition: 0.5s;
   transition: 0.5s;
}
.admin label 
{
   display: block;
   margin: 0 0 3px 0;
}
.admin input[type=text] 
{
  width: 100%;
}
input[type="radio"]:checked ~ .admin, input[type="checkbox"]:checked ~ .admin 
{
  opacity: 1;
  max-height: 100px;
  padding: 10px 20px;
 -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  overflow: visible;
}

form 
{
  max-width: 500px;
  margin: 20px auto;
}
form > div 
{
  margin: 0 0 20px 0;
}
form > div label
{
  font-weight: bold;
}
form > div > div 
{
  padding: 5px;
}
form > h4 
{
  color: #2c3e50;
  font-size: 18px;
  margin: 0 0 10px 0;
  border-bottom: 2px solid green;
}


select 
{
    padding:3px;
    width: 250px;
     box-shadow: 0 3px 0 #ccc, 0 -1px #fff
}
.loginerror
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
fieldset 
{ 
    border:1px solid green;
    width: 50%;
    height: 100%;

}


</style>
<script>
var FormStuff = 
        {
  
  init: function() {
    this.applyConditionalRequired();
    this.bindUIActions();
  },
  
  bindUIActions: function() {
    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);
  },
  
  applyConditionalRequired: function() {
  	
    $(".require-if-active").each(function() {
      var el = $(this);
      if ($(el.data("require-pair")).is(":checked")) {
        el.prop("required", true);
      } else {
        el.prop("required", false);
      }
    });
    
  }
  
};

FormStuff.init();
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
    </head> 
    
    <body id="body-color"> 
      
         <div align="center"><br><br>
            <img border="0" src="img/ck logo.png" width="290" height="76"><br>
         </div>
        <div id="Sign-In"> 
            <fieldset><legend style="font-size:18px;color: black;">ADMIN LOG-IN HERE</legend>
               
                <form method="POST" action="adminsignin.php"> 
                      <?php
if(!empty($loginerror)){
echo "<p class='loginerror'>".nl2br($loginerror)."</p>";
}
?>
        <div id='adminsignin' class='loginerror'></div>
        
                    User: <br>
                    <input type="text" name="user" size="40" placeholder="username"><br> Password: <br>
                    <input type="password" name="pass" size="40" placeholder="password"><br><br>
           <h4>Which  privilege do you Want?</h4>
  <div>
    <div>
      <input type="radio" name="choiceAdmin" id="choice-admin" value="all" required>
      <label for="choice-admin">privilege For All</label>
    </div>
    
    <div>
      <input type="radio" name="choiceAdmin" value="hospital" id="choice-admin">
      <label for="choice-admin">privilege For Selected Hospital</label>
    
      <div class="admin">
        <label for="which-hospitals">Select The Hospitals:-</label>
        <select name="hospital">
        <option selected> Select Box </option>
       
       <?php
   $res =pg_query("select * FROM myshema.hospitals_admin ");   
   while ($row1 = pg_fetch_array($res)) {
       $val=$row1['hospitalname'];
       echo "<option value='". $val."'>".$val."</option>";
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=hospitaladmin.php">'; 
   }
   
       ?>
       </select>
      </div>
      <br>
      <DIV>
          <img src="captcha.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
<label for='message'>Enter the code above here :</label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
      </div>
    </div>
  </div>
 <div>
<input id="button" type="submit" name="submit" value="Log-In"> 
</form> 
</fieldset> 
</div> 
</body> 
</html> 


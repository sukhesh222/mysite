
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus�">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Checkupkart</title>
asasasasas

	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type= "text/javascript" src = "js/countries.js"></script>

 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  
  
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
$(document).ready(function(){
    $("document").click(function(){
       
        var disp = $(".popUp").css("display");
        if(disp=="block"){
            alert(disp);
       $(".popUp").css({"display":"none"});
       
       }
    });
});
</script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
function openpopUp(id)
{  
    if(document.getElementById(id).style.display==="block")
    {  document.getElementById(id).style.display="none";
    }
    else{
       document.getElementById(id).style.display="block";
      
    }
    
}
</script>

<style>
#heightDiv{
   background: whitesmoke none repeat scroll 0% 0%;
    width: 200px;
    height: 100px;
    padding: 25px;
    border:2px solid #777 ;
     margin:10px;
     box-shadow:0px 0px 5px #444;
   
}
#heightDiv:hover{
     
     box-shadow:0px 0px 5px #444;
   
}
#heightDiv1{
    background-color: whitesmoke;
    width: 300px;
    padding: 15px;
    height:200px;
    border:2px solid #777 ;
     margin:10px;
     box-shadow:0px 0px 5px #444;
     display:none;
     
}
#sectionTitle {
    font-size: 22px;
    font-family: "Segoe UI Light","Segoe UI Web Light","Segoe UI Web Regular","Segoe UI","Segoe UI Symbol","HelveticaNeue-Light","Helvetica Neue",Arial,sans-serif;
    width: 220px;
    padding: 15px;
    text-justify: ;
   

}
#nameDiv{font-size:32px;
color:#3366CC;
padding:10px;}
#openButton{float:right;
            background: none;
            font-size:12px;
 border: none;}

#tittleDiv{padding:10px;font-size:30px;}

.measurement{position:relative;float:left
}

#recordDiv11{width:80%;
          height:50%;
          margin-left:10%;
	 border:2px solid #5EBFDF;
         border-radius:20px;
        color:white;
        font-size:22px;}
#adminlogin{
    margin-left:15%;
    margin-top:7%;
    width: 80px;
    height: 80px;
    color: #333;
    font-size:20px;}
#admin{
    margin-left:80%;
    margin-top:-6.5%;
    width: 80px;
    height: 80px;
    color: #333;
    font-size:20px;}
#numdiv{
    width: 80px;
    height: 80px;
    margin-top:25%;
    margin-top:15%;
    padding-left: 55px;
}
.doc{
    width: 250px;
    height:30%;
    border-top-color: #28597a;
   background: wheat;
   color: #ccc;
   margin-top: 38%;
   margin-left:-13%;
   
}

</style>

 </head>
 <body>
 
 
  <?php // include_once  'includes/adminheader.php' ?>

  

<div id="recordDiv11" style="min-height:800px ;">
<div id="record" >

<div id="recordFormDiv" >
<div  id="record-tittle2">
<p style="width:200px;">Admin Das</p> 
   
</div>
    <br><br>

     <div id="nameDiv"></div>
     <div id="phrDiv">

<div class="measurement">
<div id="heightDiv">
    <a href="showDoctorsdetails.php">
        <h1 style="position: relative;color: #28597a;z-index: 15px; margin: 0; padding: 0;">Doctor</h1>
		<div class="doc">
                    <p style="font-size:18px;color:black;text-align:left;">Total Doctors : </p>
                    <p style=" margin-bottom:-10px;">
                <?php   $res=mysql_query("SELECT * from doctors") or die(mysql_errors());
		        $num=mysql_num_rows($res);

				echo "<p style='font-size:22px;color:black;text-align:right;'>".$num."</p>";
			   
                                ?>
                    </p>
                </div>
    </a>
            
        </div>
        
    </a>

 </div>
</div>
 <div class="measurement">
                <div id="heightDiv">
                    <a href="showPatientdetails.php">
<h1 style="position: relative;color: #28597a;z-index: 15px; margin: 0; padding: 0;">Patient</h1>
    <div class="doc">
         <p style="font-size:18px;color:black;text-align:left;">Total Patient : </p>
          <p style=" margin-bottom:-10px;">
        <?php   $res=mysql_query("SELECT * from patient") or die(mysql_errors());
		        $num=mysql_num_rows($res);

				echo "<p style='font-size:22px;color:black;text-align:right;'>".$num."</p>";
			   
                                ?>
          </p>
    </div>
        </a>
                <div id="popUpDivSteps"></div></div>
               
             </div>
         
        
             <div class="measurement">
                <div id="heightDiv">
                    <a href="appointment.php">
                        <h1 style="position: relative;color: #28597a;z-index: 15px; margin: 0; padding: 0;">Appointment</h1>
                          <div class="doc">
         <p style="font-size:18px;color:black;text-align:left;">Total Appointment : </p>
          <p style=" margin-bottom:-10px;">
              <?php   $res=mysql_query("SELECT * from mypatients") or die(mysql_errors());
		        $num=mysql_num_rows($res);

				echo "<p style='font-size:22px;color:black;text-align:right;'>".$num."</p>";
			   
                                ?>
          </p></div>
          </a>
                    <div id="popUpDivExercise"></div></div>
               
               </div>
              
              <div class="measurement">
                 <div id="heightDiv">
                     <a href="Noticeboard.php">
                          <h1 style="position: relative;color: #28597a;z-index: 15px; margin: 0; padding: 0;">Notice board</h1>
          <div class="doc">
         <p style="font-size:18px;color:black;text-align:left;">Total Notice : </p>
          <p style=" margin-bottom:-10px;">
              <?php   $res=mysql_query("SELECT * from noticeboard") or die(mysql_errors());
		        $num=mysql_num_rows($res);

				echo "<p style='font-size:22px;color:black;text-align:right;'>".$num."</p>";
			   
                                ?>
          </p></div>
         </a>
                    <div id="popUpDivBloodpressure" ></div></div>
                <div id="heightDiv1"></div>
                </div>
        
              <div class="measurement">
               <div id="heightDiv">
                   <a href="addHospital.php">
                       <h1 style="position: relative;color: #28597a;z-index: 15px; margin: 0; padding: 0;">Hospitals</h1>
                   <div class="doc">
         <p style="font-size:18px;color:black;text-align:left;">Total Hospitals : </p>
         <p style=" margin-bottom:-10px;">
             <?php   $res=mysql_query("SELECT * from myschema.hospital") or die(mysql_errors());
		        $num=mysql_num_rows($res);

				echo "<p style='font-size:22px;color:black;text-align:right;'>".$num."</p>";
                                ?>
         </p></div>
          </a> 
                   <div id="heightDiv1"></div>
               </div>
    
 </div>             
</div>
</div>
</div>
</div>

     <br><br>
<?php //include_once  'includes/footer.php' ?>

</script>
 </body>
</html>

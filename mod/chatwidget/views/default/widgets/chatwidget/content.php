<?php

if (isset($_GET['u'])){
   unset($_SESSION['username']);
}

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Anonymous";   
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>
<head>
   <link href="mod/chatwidget/views/default/css/chatwidget.css" rel="stylesheet" type="text/css" />
    <script language="javascript" type="text/javascript">
    <!-- var httpObject = null;
      var link = "";
      var timerID = 0;
      var userName = "<?php if(elgg_is_logged_in()) {
$user = elgg_get_logged_in_user_entity();
echo $user->username; ?>";

      // Get the HTTP Object
      function getHTTPObject(){
         if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
         else if (window.XMLHttpRequest) return new XMLHttpRequest();
         else {
            alert("Your browser does not support AJAX.");
            return null;
         }
      }   

      // Change the value of the outputText field
      function setOutput(){
         if(httpObject.readyState == 4){
            var response = httpObject.responseText;
            var objDiv = document.getElementById("result");
            objDiv.innerHTML += response;
            objDiv.scrollTop = objDiv.scrollHeight;
            var inpObj = document.getElementById("msg");
            inpObj.value = "";
            inpObj.focus();
         }
      }

      // Change the value of the outputText field
      function setAll(){
         if(httpObject.readyState == 4){
            var response = httpObject.responseText;
            var objDiv = document.getElementById("result");
            objDiv.innerHTML = response;
            objDiv.scrollTop = objDiv.scrollHeight;
         }
      }

      // Implement business logic    
      function doWork(){    
         httpObject = getHTTPObject();
         if (httpObject != null) {
            link = "mod/chatwidget/views/default/widgets/chatwidget/message.php?username="+userName+"&msg="+document.getElementById('msg').value;
            httpObject.open("GET", link , true);
            httpObject.onreadystatechange = setOutput;
            httpObject.send(null);
         }
      }

      // Implement business logic    
      function doReload(){    
         httpObject = getHTTPObject();
         var randomnumber=Math.floor(Math.random()*10000);
         if (httpObject != null) {
            link = "mod/chatwidget/views/default/widgets/chatwidget/message.php?all=1&rnd="+randomnumber;
            httpObject.open("GET", link , true);
            httpObject.onreadystatechange = setAll;
            httpObject.send(null);
         }
      }

      function UpdateTimer() {
         doReload();   
         timerID = setTimeout("UpdateTimer()", 5000);
      }
    
    
      function keypressed(e){
         if(e.keyCode=='13'){
            doWork();
         }
      }
//-->
    </script>   
</head>
<?php
$website = $user->getURL()
?>
<body onload="UpdateTimer();">
    <div id="main">
     <div id="result">
     <?php 
        $data = file("msg.html");
        foreach ($data as $line) {
        	echo $line;
        }
     ?>
      </div>
      <div id="sender" onkeyup="keypressed(event);">
         <div id="info">Type your message and press "Enter" to send.</div> <input type="text" name="msg" size="30" id="msg" />
      </div>
<?php } ?>
    </div>
</body>   
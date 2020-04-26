

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Control</title>
</head>
<script type='text/javascript' src='./assets/js/jquery.js'></script>
<style>
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 35px 62px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 36px;
  cursor:pointer;
}
</style>

<body>
<table width="99.9%" height="99.99%" border="0">
  <tr height="65">
    <td align="left" width="160">
    	<img src="./assets/images/logo-regis.png" width="141" height="64"/>
    </td>
    <td><h1>Contactless Queue Management</h1></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" height="500" valign="middle" align="center">
    	
        <table bgcolor="#FFFFCC" width="50%" border="0">
          <tr>
            <td align="center"><h3>Click on the button below to allow the next person in the queue to enter.</h3></td>
          </tr>
          <tr>
            <td valign="middle" align="center">
            	<button id="button1" type="button" class="button">Allow Next</button>
          	</td>
          </tr>
          <tr>
            <td height="50" align="center">
            	<div id="status" style="font-weight:bold; color:#F0F;"></div>
            </td>
          </tr>
        </table>

    	<!--<div class="centered">
        	<button id="button1" type="button" class="button">Next</button>
        </div>-->
    </td>
  </tr>
  <tr height="20">
    <td colspan="3" valign="middle" align="center"><span style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:11px;">© 2020 Bloque Labs. All Rights Reserved</span></td>
  </tr>
</table>



</body>
<script type='text/javascript'>
$('#button1').click(function(){
 $.ajax({
 type: "POST",
 url: "assets/php/write.php",
 data: "",
 success: function(msg){
     console.log(msg);
	 var d = new Date();
	 dt = d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getYear() + " - " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	 document.getElementById("status").innerHTML = "[" + dt + "] " + msg;
 },
 error: function(XMLHttpRequest, textStatus, errorThrown) {
    console.error("Some error occured.");
	document.getElementById("status").innerHTML = "Some error occured. Try again.";
 }
 });
});
</script>
</html>

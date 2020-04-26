<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client</title>
</head>
<script type='text/javascript' src='./assets/js/jquery.js'></script>
<style>
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -250px;
  margin-left: -250px;
}
.imageFull {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
    overflow: auto;
}
</style>

<body>
<div id="wait" class="centered">
	<img src="./assets/images/wait.png" width="500" height="500"/>
</div>
<div id="walk" class="centered">
	<img src="./assets/images/walk.png" width="500" height="500"/>
</div>
<audio id="walkMp3" src="./assets/sound/walk.mp3" autoplay="false" ></audio>
<audio id="waitMp3" src="./assets/sound/wait.mp3" autoplay="false" ></audio>
</body>
<script type='text/javascript'>
var myVar;
var count=0;
var isWaitPlayed=false;

function myFunction() {		  
	document.getElementById("walk").style.display = "none";
					document.getElementById("wait").style.display = "block";
  	myVar = setInterval(alertFunc, 1000);
}

function alertFunc() {
	console.log("Count:", count);
	if(count == 0){
		$.ajax({
 			type: "POST",
 			url: "./assets/php/read.php",
 			data: "",
 			success: function(msg){
     			console.log(msg);
	 			if(msg == 'yes'){
		 			count = 1;
					document.getElementById("walk").style.display = "block";
					document.getElementById("wait").style.display = "none";
					
					var sound = document.getElementById("walkMp3");
    				sound.play();
					
					isWaitPlayed=false
					
	 			}else{
		 			document.getElementById("walk").style.display = "none";
					document.getElementById("wait").style.display = "block";
					
					if(!isWaitPlayed){
						var sound = document.getElementById("waitMp3");
						sound.play();
						isWaitPlayed=true
					}
	 			}
 			},
 			error: function(XMLHttpRequest, textStatus, errorThrown) {
    			console.error("Some error occured");
 			}
 		});
	}else{
		if(count < 4){
			count++;
		}else{
			count=0;
		}
	}
}

myFunction()

/*$('#button1').click(function(){
 $.ajax({
 type: "POST",
 url: "write.php",
 data: "",
 success: function(msg){
     console.log(msg);
 },
 error: function(XMLHttpRequest, textStatus, errorThrown) {
    console.error("Some error occured");
 }
 });
});*/
</script>
</html>

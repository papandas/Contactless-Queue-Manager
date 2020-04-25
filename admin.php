

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Control</title>
</head>
<script type='text/javascript' src='./js/jquery.js'></script>
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
<div class="centered">
<button id="button1" type="button" class="button">Next</button>
</div>

</body>
<script type='text/javascript'>
$('#button1').click(function(){
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
});
</script>
</html>

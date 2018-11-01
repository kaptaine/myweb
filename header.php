<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="allcss.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div>
   	<nav class="mynav" id="mynav">
   		<a href="index.php">HOME</a>
   		<a href="mycv.php">CURICULLUM VITAE</a>
   		<a href="#">SERVICES</a>
   		<a href="#" onclick="showall();">CONTACTS</a>
   		 <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776 MENU</a>
   	</nav>
   </div>

 <script src="jquery.js"></script>
<script>
	function showall(){
	var pn="Phone Number:  0798693754 /0782404102 ";
	var em="Email Address:  akwashdickson@gmail.com";
	var fb="FaceBook Account: kaptaine Dickson";
	var tw="Twitter Handle:  @abyserE";
	var ins="Instagram Account:  @kaptaine dickson";
	var all=alert(pn +'\n'+ em+ '\n'+ fb+'\n '+tw+ '\n '+ins);
  }
</script>
  <script>            
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
var x = document.getElementById("mynav");
if (x.className === "mynav") {
x.className += " responsive";
} else {
x.className = "mynav";
}
}
</script>
</body>
</html>
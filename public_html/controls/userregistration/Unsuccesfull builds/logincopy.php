<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

body{
	margin: 0;
	padding: 0;
	background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)), url(image.jpg);
	background-size: fill;
	background-position: center;
}

.containerLOGIN{
	text-align: center;
	margin-top: 310px;
}

/* Set a style for all buttons */
button {
  display: block;
	width: 50%;
	border: 2px solid #fff;
	background: none;
	padding: 10px 20px;
	color: white;
	font-size: 35px;
	font-family: sans-serif;
	cursor: pointer;
	margin-left: auto;
  	margin-right: auto;
	margin-top: 20px;
}

button:hover {
  opacity: 0.6;
}

/* Set a style for all buttons */
button1 {
  	display: block;
	width: 50%;
	border: 2px solid #fff;
	background: none;
	padding: 10px 20px;
	color: white;
	font-size: 35px;
	font-family: sans-serif;
	cursor: pointer;
	margin-left: auto;
  	margin-right: auto;
	margin-top: 20px;
}

button1:hover {
  background-color: rgba(211, 211, 211, 0.5);
  color: black;
}

.submitbtn{
	font-size: 20px;
  width: auto;
  padding: 10px 18px;
  background-color: #000;
  margin-bottom: 20px;
}

/* Extra styles for the cancel button */
.cancelbtn {
	font-size: 20px;
  width: auto;
  padding: 10px 18px;
  background-color: #000;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background: #fff;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #fff;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  border: none;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div class="containerLOGIN">
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">PRISIJUNGTI</button>

<div id="id01" class="modal">
  
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    	<form action="validation.php" method="post">
    		  <div class="form-group">
						<label>Vartotojo vardas</label>
						<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Slaptažodis</label>
						<input type="password" name="password" class="form-control" required>
					</div>
		        
		      <button class="submitbtn" type="submit">Prisijungti</button>
		      <label>
		        <input type="checkbox" checked="checked" name="remember"> Prisiminti mane
		      </label>
    	</form>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Atšaukti</button>
      <!--<span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
</div>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

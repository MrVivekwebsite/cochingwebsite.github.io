<html>
<head>
<style>
#div12{
	height:500px;
	width:845px;
	background:#91aba1;
	
}
#cnttd{
	width:500px;
	height:650px;
	background:#91aba1;
	color:white;
	float:left;
	
	
}
.login-box {
 position:relative;
 top:50%;
 left:70%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}

</style>


<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<table style=background:#91aba1><tr>
<td id=cnttd>
<table><tr><td>
<i class="fas fa-address-card"></i><p style=color:white>Softtech computer center Ratanlal Nagar, Ratanlal Nagar Main Rd, Neemeshwar MahaMandir Society, Ratan Lal Nagar, Kanpur, Uttar Pradesh 208022</p></td><tr><td>
<i class="fas fa-map-marker-alt"></i>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28578.733082826842!2d80.27319063955076!3d26.444714500000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c4752b94dc915%3A0xaf6a1f4173301c3c!2sSofttech%20computer%20center%20Ratanlal%20Nagar!5e0!3m2!1sen!2sin!4v1637997619253!5m2!1sen!2sin" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</td></tr><tr><td>
<i class="fas fa-phone"></i><span style=color:white>7355227196</span></td></tr></table>
</td>

<td id=div12>
<div id=div12>
<div class="login-box">

  <h2>Login</h2>
  <form>
    <div class="user-box">
      <input type="text" name="" required="">
      <label>Username</label>
    </div>
	<div class="user-box">
      <input type="text" name="" required="">
      <label>Email-Id</label>
    </div>
	
    <div class="user-box">
      <input type="password" name="" required="">
      <label>Password</label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </a>
  </form>
</div></div>


</td></tr></table>













<!--
<?php 
if(isset($_POST['esubmit'])){
	


$to="vibhorsaini147@gmail.com";

$subject="Test Mail";
$message="hello this is a simple mail messge";
$from="vibhorsaini147@gmail.com";
$header="From : $From";
mail($to,$subject,$message,$header);
echo "mail Sent";





}
?>
!-->

</body>
</html>
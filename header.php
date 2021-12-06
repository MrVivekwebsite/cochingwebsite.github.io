<html>
<head>
<style>
#header1{
	margin:0px;
	padding:0px;
	background:#f5f8fc;
	height:50px;
	width:100%;
}
.font1{
	font-size:25px;
	
}

#header1 ul{
	display:flex;
	padding-left:20px;
}
	
#header1 ul li{
	padding-top:16px;
	font-size:14px;

}
#li1{
	width:380px;
	color:gray;
	padding-left:100px;
	
	
}
#li2{
	width:200px;
	color:gray;
	padding-left:30px;
	
}
#li3{
	width:480px;
	float:left;
	color:gray;
	padding-left:16px;
	
}
#li4{
	width:20px;
	color:gray;
	float:right;
	
	padding-left:0px;
	
}
#li5{
	width:20px;
	float:right;
	color:gray;
	padding-left:45px;
}



*{
	padding;0px;
	margin:0px;
	text-decoration:none;
	list-style:none;
	box-sizing:border-box;
	
}
body{
	font-family:montserrat;
}
nav{
	background:white;
	height:120px;
	width:100%;
	padding:20px;
}
label.logo{
	color:white;
	font-size:35px;
	line-height:80px;
	padding:100px;
	font-weight:bold;
}
nav ul{
	float:right;
	margin-right:16px;
}
nav ul li{
	display:inline-block;
	line-height:80px;
	margin:0 5px;
	
}
nav ul li a{
	color:gray;
	font-size:18px;
	text-transform:uppercase;
	padding:7px 14px;
	border-radius:3px;
	font-size:14px;
}
a.active,a:hover{
	background:#1b9bff;
	transition:0.5s;
}

.checkbtn{
	font-size:30px;
	color:gray;
	float:right;
	line-height:80px;
	margin-right:40px;
	margin-top:20px;
	display:none;
	cursor:pointer;
}

#check{
display:none;
}

@media (max-width:952px){
	label.logo{
	font-size:30px;
	padding-left:50px;
}
nav ul li a{
	font-size:16px;
}
}



@media (max-width:858px){
	.checkbtn{
		display:block;
	}
	ul{
		position:fixed;
		width:100%;
		height:100vh;
		background:#2c3e50;
		top:80px;
		left:-100%;
		text-align:center;
		transition:all 0.5s;
	}
	nav ul li{
		display:block;
	}
	nav ul li a{
		font-size:20px;
		margin:50px 0;
		line-height:30px;
		
	}
	a:hover,a.active{
		background:none;
		color:#0082e6;
	}
	#check:checked ~ ul{
		left:0;
	}
}

</style>
</head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



<body>
<div id=header1>
<ul>
<li id=li1><i class="far fa-clock"></i>&nbsp;&nbsp;Mon - Fri 8:00 - 18:00 / Sunday 8:00 - 14:00</li>
<li id=li2><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;1-800-458-56987</li>
<li id=li3><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;47 Bakery Street, London, UK</li>
<li id=li4>LOGIN</li>
<li id=li5>ENGLISH</li>
</ul>

</div>


<nav>

<input type="checkbox" id=check>
<label for="check" class=checkbtn>
<i class="fas fa-bars"></i>
</label>



<label class="logo"><img src="image/png2.png"></label>
<ul>
<li><a class=active href="#">home</a></li>
<li><a href="#">pages</a></li>
<li><a href="#">Shop</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Features</a></li>
<li><a href="#">contact us</a></li>
<li><a class=font1 href="#"><i class="fas fa-cart-plus"></i></a></li>
<li><a class=font1 href="#"><i class="fas fa-search"></i></a></li>



</ul>
</nav>

</body>
</html>
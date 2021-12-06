<html>
<head>
<title></title>
<style>

#header1{
	height:50px;
	background-color:rgba(141, 153, 146,0.4);
}
#header1 ul{
	margin:0px;
	list-style:none;
	padding:0px;
}
#header1 ul li{
	display:inline-block;
	margin:5px;
	
}

#header1 ul li a{
	
     color:black;
	 font-size:30px;
	 
	
}

#header1 ul li a:hover{
	
    background:rgba(126, 226, 230,0.4);
	
}

@media screen and (max-width:1350px){
	#header1 ul li a{
		color:black;
		font-size:30px;
	}
	  
	


}


@media screen and (max-width:1200px){
	#header1 ul li a{
		color:black;
		font-size:25px;
	}
	  
	


}


@media screen and (max-width:1000px){
	#header1 ul li a{
		color:pink;
		font-size:23px;
	}
	  
	


}


@media screen and (max-width:800px){
	#header1 ul li a{
		color:pink;
		font-size:20px;
	}
	  
	


}



@media screen and (max-width:400px){
	#header1 ul li a{
		color:pink;
		font-size:15px;
	}
	  
	


}
/*
#header{
	height:80px;
	background-color:green;
	width:100%;
	
	//z-index:100000;
	//position:fixed;
	
}

*/






.header {
  //padding: 10px 16px;
  background:rgba(94, 219, 144,0.5);
  //color: #f1f1f1;
  width:100%;
	
  //z-index:100000;
	//position:fixed;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}













/*

#banner{
	float:left;
	clear:both;
	width:100%;
	min-height:100vh;
	//background:#a9fcf4 url("image/lab.jpg");
	background-size:cover;
	background-position:center;
	background-blend-mode:multiply;
	position:relative;
}

*/

.nav-links{
	flex:1;
	text-align:right;
}
.nav-links ul li{
	list-style:none;
	display:inline-block;
	padding:28px 12px;
	position:relative;
}
.nav-links ul li a{
	color:#fff;
	text-decoration:none;
	font-size:13px;
}
.nav-links ul li::after{
	content:'';
	width:0%;
	height:2px;
	background:#f44336;
	display:block;
	margin:auto;
	transition:0.5s;
	
}
.nav-links ul li:hover::after{
	width:100%;
}
#head{
	position:relative;
	top:260;
	left:60;
	color:white;
}
path{
	filter:blur(3.5px);
	
}

.headbtn{
	width:290px;
	height:50px;
	font-size:20px;
	position:relative;
	top:260;
	left:20;
	color:white;
	//background:RED;
	background-color:rgba(96, 224, 131,0.4);
	
}
.headbtn:hover{
//background-color:green;
background:rgba(126, 226, 230,0.9);
color:green;
	
}














.slider76{
	width:100%;
	height:500px;
	background:url("image/img5.jpg");
	//margin:10px auto;
	animation:slide2 30s infinite;
	float:left;
}
@keyframes slide2{
	25%{
		background:url("image/img1.jpg");
	}
	50%{
		background:url("image/img2.jpg");
	}
	75%{
		background:url("image/img3.jpg");
	}
	100%{
		background:url("image/img4.jpg");
	}
}






















</style>


 
 




<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div>

<div id=header1>

<ul><li><a href="">
<i class="fab fa-facebook"></i>
</a>
</li>
</a>
<li><a href="">

<i class="fab fa-twitter"></i>
</a>
</li>
<li><a href="">

<i class="fab fa-linkedin-in"></i></a>
</li>
<li><a href="">

<i class="fab fa-instagram"></i>
</a>
</li>
<li><a href="">

<i class="fab fa-whatsapp"></i>
</a>
</li>
</ul>
</div>


<div class="header" id="myHeader">
<div class="nav-links">
<ul>

<li><a href="">Home</a></li>

<li><a href="">About Us</a></li>

<li><a href="">Course</a></li>

<li><a href="">Blog</a></li>

<li><a href="">Contact Us</a></li>


</ul>

</div>
</div>








<div id=banner>




<div class="slider76">
<div id=head>




<!--
<img src="image/hug.png" height=200px width=200px>

!-->
<h1>
SofTech<br>Computer Education Center

</h1></div>
<button class=headbtn>Know more for me</button>

</div>
</div>

</div>
















<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>













</body>
</html>
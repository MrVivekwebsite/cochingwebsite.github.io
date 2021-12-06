<html>
<head>

<style>
.slider{
	width:50%;
	height:400px;
	background:url("image/img5.jpg");
	margin:10px auto;
	animation:slide 10s infinite;
	float:left;
}
@keyframes slide{
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





.slider1{
	width:50%;
	height:400px;
	background:url("image/img5.jpg");
	margin:10px auto;
	animation:slide1 10s infinite;
	float:right;
}
@keyframes slide1{
	25%{
		background:url("image/img4.jpg");
	}
	50%{
		background:url("image/img3.jpg");
	}
	75%{
		background:url("image/img2.jpg");
	}
	100%{
		background:url("image/img1.jpg");
	}
}

</style>



</head>
<body>

<div class="slider">

<h1>   </h1>
</div>


<div class="slider1">
<h1>
</h1>
</div>
</body>
</html>

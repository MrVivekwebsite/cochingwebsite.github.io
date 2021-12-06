<html>
<head>
<style>


.head34{
	display:flex;
	justify-content:center;
	align-items:center;
	height:450px;
	background:rgba(126, 226, 230,0.4);
	
}
.main34{
	position:relative;
	width:200px;
	height:200px;
	transform-style:preserve-3d;
	animation:animate 20s linear infinite;
	box-sizing:border-box;


}
@keyframes animate{
	0%{
		transform:perspective(1000px) rotateY(0deg);
	}
	100%{
		transform:perspective(1000px) rotateY(360deg);
	}
}

.main34 span{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	transform-origin:center;
	transform-style:preserve-3d;
	transform:rotateY(calc(var(--i)*45deg)) translateZ(400px);
	-webkit-box-reflect:below 0px linear-gradient(transparent,transparent,#0000);
}
.main34 span img{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:80%;
	object-fit:cover;
	filter:drop-shadow(8px 15px 20px #2b62ba);

	
}
	
</style>
</head>
<body><div class=head34>
<div class="main34">
<span style="--i:1;"><img src="image/slider1.jpg"></span>
<span style="--i:2;"><img src="image/slider2.jpg"></span>
<span style="--i:3;"><img src="image/slider3.jpg"></span>
<span style="--i:4;"><img src="image/slider4.png"></span>
<span style="--i:5;"><img src="image/slider5.jpg"></span>
<span style="--i:6;"><img src="image/slider6.jpg"></span>
<span style="--i:7;"><img src="image/slider7.png"></span>
<span style="--i:8;"><img src="image/slider8.jpg"></span>

</div>
</div>

</body>
</html>

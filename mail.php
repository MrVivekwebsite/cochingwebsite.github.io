<html>
<head>
</head>
<body>

<h4 class="sent-notification"></h4>
<form id="myform">
<h2>Send An Email</h2>
<label>Name</label>
<input id="name" type="text" placeholder="enter name"><br><br>
<label>Email</label>
<input id="email" type="text" placeholder="enter email"><br><br>
<label>Subject</label>
<input id="subject" type="text" placeholder="enter name"><br><br>
<p>message</p>



<textarea name="message" row="5" cols="40" placeholder="type message"></textarea><br><br>
<button id="body" value="send an Email" onclick="sendEmail()" type="button">Submit</button>
<!--<input name="esubmit" onclick="sendEmail()" type="submit">

!--></form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
function sendEmail(){
	var name=$("#name");
	var email=$("#email");
	var subject=$("#subject");
	var body=$("#body");
	
	if(isNotEmpty(name)&& isNotEmpty(email)&& isNotEmpty(subject) && isNotEmpty(body)){
		$.ajax({
			url:'sendEmail.php';
			method:'POST',
			dataType:'json',
			data:{
				name:name.val(),
				email:email.val(),
				subject:subject.val(),
				body:body.val()
			},success:function(response){
				$('#myForm')[0].reset();
				$('.sent-notification').text("message sent successfully");
				
			}
		});

	}
}

function isNotEmpty(caller){
	if(caller.val()==""){
		caller.css('border','1px solid red');
		return false;
		
	}
	else{
		caller.css('border','');
		return true;
	}
}



</script>


</body>
</html>



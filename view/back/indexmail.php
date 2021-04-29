<!DOCTYPE html>

<head>
	
	<title>send an email</title>	


</head>

<body>
	<h4 class="sent-notification"></h4>
	<center>
	<form id="myForm">
		<h2>send an email</h2>
		<label>Name</label>
		<input id="name" type="text" placeholder="Enter name">
		<br><br>
		<label>Email</label>
		<input id="email" type="text" placeholder="Enter email">
		<br><br>
		<label>subject</label>
		<input id="subject" type="text" placeholder="Enter subject">
		<br><br>
		<p>Message</p>
		<textarea id="body" rows="5" placeholder="type Message"></textarea>
		<br><br>
		<button type="button" onclick="sendEmail()" value="send an Email"> submit</button>
		
	</form>
	</center>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
	function sendEmail()
	{
		var name =document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var subject =  document.getElementById('subject').value;	
		var body =  document.getElementById('body').value;
		
		if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
			$.ajax({
				url: 'sendEmail.php',
				method: 'POST',
				dataType: 'json',
				data:{
					name: name.val(),
					email: email.val(),
					subject: subject.val(),
					body: body.val()
				}, success: function(response)
				{
					$('#myForm')[0].reset();
					$('.sent-notification').text("Message sent successfully.");
				}
			});
		}
	}
function isNotEmpty(caller)
{
	if (caller.val()=="") {
		caller.css('border','1px solid red');
		return false;
	}
	else 
	{
		caller.css('border','');
		return true;
	}
}
</script>
</body>

</html>
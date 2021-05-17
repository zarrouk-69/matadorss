<?php 
include('header.php');
?>
<body>
<div class="container">

<br>
<br>
<br>
<br>

   
<div class="thumbnail" style="border:1px solid #1982d1; background:;">
     <div class="row">
	<div class="span3 offset1"></div>
    <div class="span8">
	<br>
	
	<div class="alert alert-danger"><b><i class="icon-file"></i> Please Fill up all the details Below</b></div>
	
	<form class="form-horizontal" method="POST">
	 
    <div class="control-group">
    <label class="control-label" for="inputEmail">FirstName</label>
    <div class="controls">
    <input type="text" class="span4" name="firstname" id="inputEmail" placeholder="FirstName" autofocus="autofocus" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">LastName</label>
    <div class="controls">
    <input type="text" class="span4" name="lastname" id="inputEmail" placeholder="LastName" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Age</label>
    <div class="controls">
    <input type="text" class="span1" name="age" id="inputEmail" placeholder="Age" required>
    </div>
    </div>
	 
	<div class="control-group">
    <label class="control-label" for="inputEmail">Gender</label>
    <div class="controls">
	<select class="span2" name="gender" required>
	<option>Male</option>
	<option>Female</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Address</label>
    <div class="controls">
    <input type="text" class="span4" name="address" id="inputEmail" placeholder="Address" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Email Adress</label>
    <div class="controls">
    <input type="text" class="span4" name="email" id="inputEmail" placeholder="Email Address" required>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Contact Number</label>
    <div class="controls">
    <input type="text" class="span4" name="c_number" id="inputEmail" placeholder="Contact Number" required>
    </div>
    </div>
	
	<div class="control-group">
		<div class="controls">
		
		<img src="generatecaptcha.php?rand=<?php echo rand(); ?>" name="captcha_img" id='image_captcha' > 
		<a href='javascript: refreshing_Captcha();'><i class="icon-refresh"></i></a> 
		<script language='JavaScript' type='text/javascript'>
			function refreshing_Captcha()
			{
				var img = document.images['image_captcha'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
		</script>
		</div>
	</div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Captcha Confirmation</label>
    <div class="controls">
    <input type="text" class="span4" name="captcha_code" id="inputEmail" placeholder="Enter the Captcha Code above" required>
    </div>
    </div>
 
    <div class="control-group">
    <div class="controls">
    <button type="submit" name="submit" class="btn btn-primary"><i class="icon-save icon-large"></i> Register Member</button>
    </div>
    </div>
    </form>
	
	</div>
    </div>
	</div>
	<center>
	<div class="alert alert-danger" role="alert">
	<b>Free Source Code - Tutorials - SourceCodester</b>
	</div>
	</center>
	
	<?php
	if (isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$c_number = $_POST['c_number'];
	$captcha_code = $_POST['captcha_code'];
	if($_SESSION['code_confirmation'] != $captcha_code){
	?>
	<script type="text/javascript">
	alert('Entered Captcha Code did not match.');
	window.location="index.php";
	</script>
	<?php	
	}
	mysqli_query($conn,"INSERT into reg_member (firstname, lastname, age, address, gender, email, c_number, captcha_code, date)
	values('$firstname', '$lastname', '$age', '$address', '$gender', '$email', '$c_number', '$captcha_code', NOW())
	")or die(mysqli_error());
	?>
	<script type="text/javascript">
	alert('You are Successfully Register Thank You');
	window.location="index.php";
	</script>

	<?php
	}
	?>
	
	
</div>
</body>
</html>
<?php 
include('header.php');
?>
<body>
<div class="container">

<br><br>
	<div class="alert alert-info" role="alert">
		<h2>Student Membership System</h2>
	</div>

    <div class="row-fluid">
    <div class="span6" style="margin-left:300px;">
	<div class="alert alert-danger">Please Enter The Detials Below</div>
	    <form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail">Username</label>
    <div class="controls">
    <input type="text" id="inputEmail" name="username" placeholder="Username" autofocus="autofocus" required>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
    <input type="password" id="inputPassword" name="password" placeholder="Password" required>
    </div>
    </div>
    <div class="control-group">
    <div class="controls">

    <button type="submit" name="login" class="btn btn-success"><i class="icon-signin"></i>&nbsp;Login</button>
    </div>
    </div>
    </form>
	</div>
    </div>
	
	<?php
	if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($conn,"select * from user where username='$username' and password='$password'")or die(mysqli_error());
	$count=mysqli_num_rows($query);
	$row=mysqli_fetch_array($query);

		
	if ($count > 0){
	    session_start();
                            session_regenerate_id();
                            $_SESSION['id'] = $row['user'];
                            header('location:home.php');
                            session_write_close();
	}
	}
	?>
	
</div>
</body>
</html>
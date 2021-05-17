<?php 
include('header.php');
include('session.php');
?>
<body>
<br><br>
<div class="container">

 <div class="navbar">
	<div class="alert alert-info" role="alert">
		<h2>Student Membership System</h2>
	</div>
    </div>

    <div class="row-fluid">
	<div class="span12">
	<ul id="myTab" class="nav nav-tabs">

    <li class="active"><a href="#member" data-toggle="tab"><i class="icon-group icon-large"></i>&nbsp;Registered Member</a></li>
    <li><a href="#user" data-toggle="tab"><i class="icon-user icon-large"></i>&nbsp;User</a></li>
    <li>
   <a  href="#myModal" data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a>
	</li>

    </ul>
	</div>

    </div>


<div class="tab-content">

<?php 
include('tab_member.php');
?>
<?php
include('tab_user.php');
?>

</div>
	<center>
	<div class="alert alert-danger" role="alert">
	<b>Free Source Code - Tutorials - SourceCodester</b>
	</div>
	</center>
<?php 
include('modal.php');
?>	
</div>
</body>
</html>
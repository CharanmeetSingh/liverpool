<?php include('header.php'); ?>
<body class="bg-color">

<div class="jumbotron">
  <div class="container text-center">
    <h1>A2z Example</h1>      
    <p>The Online Mobile & Accessories Store</p>
  </div>
</div>

<?php include('navbar.php'); ?>
<div class="container" style="margin-top: 50px;">
		<h2>Registration Panel</h2>
	
		<form action="" method="post">
			<div class="form-group">
			  <label for="name">Name</label>
			  <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
			</div>
			<div class="form-group">
			  <label for="email">Email:</label>
			  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="form-group">
			  <label for="pwd">Password:</label>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
			</div>
			<div class="form-group">
			  <label for="pwd1">Re-type Password:</label>
			  <input type="password" class="form-control" id="pwd2" placeholder="Enter password Again" name="pwd2">
			</div>
			<button type="submit" class="btn btn-success" id="form_register">Submit</button>
			<a href="login.php" type="button" class="btn btn-info" id="form_register">Back to Login</a>
			<!--<a href="account_panel.php"><button type="button" class="btn btn-primary" id="form_register">Back to Login</button></a>-->
		</form>
	</div>
<br><br>
<?php include('footer.php'); ?>
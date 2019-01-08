<?php include('header.php'); ?>
<body class="bg-color">

<div class="jumbotron">
  <div class="container text-center">
    <h1>A2z Example</h1>      
    <p>The Online Mobile & Accessories Store</p>
  </div>
</div>

<?php include('navbar.php'); ?>
<div class="container">
  <h2>Login Panel</h2>
  <div align="center" style="margin-top: 50px;">
	  <a href="user.php"><button type="button" class="btn btn-primary" id="register_btn">Create an Account</button></a>
	  
	  <?php if(isset($msg)) :?>
		<div class="alert alert-danger alert-dismissable fade in" style="margin-top: 30px;">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Sorry!</strong> Check Email or Password.
		</div>
	<?php endif; ?>
	
  </div>
  <form id="login" action="" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
	  <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
    <button type="submit" class="btn btn-info">Login</button>
  </form>
</div>
<br><br>
<?php include('footer.php'); ?>
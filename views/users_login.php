<?php include VIEWS.'header.php' ?>
<div class="container">
	<h3>Authorization</h3>
	<div class="row">
		<div class="col-sm-12">
			
			<form method="POST" action="<?php echo WEB.'login'; ?>" class="form-horizontal">
			<div class = "form-group">
				<label class="col-sm-2 control-label">Login:</label>
				<div class ="col-sm-10">
					<input type = "text" name = "login" class="form-control"> 
				</div>
			</div>
			
			<div class = "form-group">
				<label class="col-sm-2 control-label">Password:</label>
				<div class ="col-sm-10">
					<input type = "password" name = "password" class="form-control"> 
				</div>
			</div>

			<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type = "submit" class="btn btn-default" value="Submit">
					</div>
				</div>
			
			</form>
			
		</div>
	</div>
</div>
</html>


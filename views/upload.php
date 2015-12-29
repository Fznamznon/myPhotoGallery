<?php include VIEWS.'header.php' ?>
<div class = "container">
	<h3>Upload new photo</h3>
	<div class="row">
		<div class="col-sm-12">
			<form class = "form-horizontal" style = "padding-top: 10px;" method = "POST" enctype = "multipart/form-data" action = "<?php echo WEB.'photos/upload'; ?>">
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Name: </label> 
					<div class="col-sm-10">
						<input type = "text" name = "name" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-2">
						<label>File input</label>
						<input type = "file" name = "file">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">Album: </label> 
				<div class="col-sm-10">
				<select name="album" class="form-control" id="my_selection">
					
					<option value="-1">Without album</option>
					<?php if (count($albums) != 0) : foreach ($albums as $key => $value) : ?>
						
						<option value = "<?php echo $value['id']; ?>" <?php if ($value['id']==$album_id) echo "selected";?>><?php echo $value['name']; ?> </option>
						
					<?php endforeach; endif;?>
					<option href="<?php echo WEB; ?>/albums/add?redirect">+ New album 
					</option>
				</select>
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

<script type="text/javascript">
	document.getElementById('my_selection').onchange = function() {
		if (this.children[this.selectedIndex].hasAttribute('href'))
    		window.location.href = this.children[this.selectedIndex].getAttribute('href');
}
</script>

</html>
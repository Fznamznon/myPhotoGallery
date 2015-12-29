<?php include VIEWS.'header.php' ?>

<div class="container">
<h3>Hello, <?php echo $cur_user['name']; ?>! All photos:</h3>

	
	<div class="row">
	<?php	if (count($photo) != 0) : foreach($photo as $value) : ?>
		
		<div class="col-sm-6 photo ">
		<label>Name: <?php	echo "{$value['name']}"; ?></label>
		<a href="<?php echo WEB.'photos/'."{$value['id']}";?>"><?php	echo "<img src = '".UPLOAD."{$value['filename']}' class = 'img-responsive img-thumbnail'> "; ?></a>
		</div>
		
	<?php endforeach; else : ?>
	<div class="col-sm-12">
		<h4>No photos!</h4>
	</div>
	<?php endif ?>
	</div>
</div>

</body>
</html>
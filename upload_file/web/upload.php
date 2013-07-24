<?php

$file = $_FILES['file'];
if (isset($file)) {

	for ($i = 0; $i < 3; $i++) {
		$upload_file = './upload_files/'.$file['name'][$i];
		$tmp_file = $file['tmp_name'][$i];
		
		if (move_uploaded_file($tmp_file, $upload_file) ) {

		} else {

		}
	}
		
}


?>
<html>

<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>

	<form class="form-horizontal" action="upload.php" method="POST" enctype="multipart/form-data">
	<fieldset>

	<!-- Form Name -->
	<legend>Form Name</legend>

	<!-- File Button --> 
	<div class="control-group">
	  <label class="control-label">file</label>
	  <div class="controls">
		<input id="file" name="file[]" class="input-file" type="file">
	  </div>
	</div>

	<!-- File Button --> 
	<div class="control-group">
	  <label class="control-label">file</label>
	  <div class="controls">
		<input id="file" name="file[]" class="input-file" type="file">
	  </div>
	</div>
	
	<!-- File Button --> 
	<div class="control-group">
	  <label class="control-label">file</label>
	  <div class="controls">
		<input id="file" name="file[]" class="input-file" type="file">
	  </div>
	</div>
	
	<!-- Button -->
	<div class="control-group">
	  <label class="control-label"></label>
	  <div class="controls">
		<button id="singlebutton" name="singlebutton" class="btn btn-primary">upload</button>
	  </div>
	</div>

	</fieldset>
	</form>



</body>
</html>

<body>
		<center><h1></h1></center>
		<table align="center">
			<form method="post" action="<?php echo base_url();?>Major/addrating">
			<input type='hidden' name="hide" value="<?php echo $movieid ?>">
				<tr><th>Rating: </th><td><textarea name="rating" required class="form-control"></textarea></td></tr>
				<tr><td></td><td><input type="submit" value="Submit" required class="btn btn-success"></td></tr>
			</form>
			</table>
	</body>
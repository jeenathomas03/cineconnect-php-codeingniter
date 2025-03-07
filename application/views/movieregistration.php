
	<body bgcolor='lavender'>
		<center><h1></h1></center>
		<table align="center">
			<form method="post" action="<?php echo base_url();?>Major/movieregister"  enctype="multipart/form-data">
				<tr><th>Movie Name </th><td><input type="text" name="name" required class="form-control"></td></tr>
				<tr><th>Category </th><td><input type="text" name="category" required class="form-control"></td></tr>
				<tr><th>Language </th><td><input type="text" name="language" required class="form-control"></td></tr>
				<tr><th>Duration </th><td><input type="text" name="duration" required class="form-control"></td></tr>
				<tr><th>From </th><td><input type="date" name="from" required class="form-control"></td></tr>
				<tr><th>To </th><td><input type="date" name="to" required class="form-control"></td></tr>
				<tr><th>Image</th><td><input type="file" name="image" required class="form-control"></td></tr>
				<tr><th>Cast</th><td><input type="textarea" name="cast" required class="form-control"></td></tr>
				<tr><th>Director Name </th><td><input type="text" name="dname" required class="form-control"></td></tr>
				<tr><th>Year</th><td><input type="date" name="year" required class="form-control"></td></tr>
				<tr><th>Release Date</th><td><input type="date" name="date" required class="form-control"></td></tr>
				<tr><th>Description</th><td><input type="text" name="description" required class="form-control"></td></tr>
				<!-- <tr><th>Amount</th><td><input type="text" name="amount" required class="form-control"></td></tr> -->
				<tr><td></td><td><input type="submit" value="Register" required class="btn btn-success"></td></tr>

			</form>
			</table>
	</body>

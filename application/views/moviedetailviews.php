<html>
	<head>
		<title>Details</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	</head>
	<body>
		<center><h1></h1></center>
		<table align="center">
			<form method="post" action="">
				<?php foreach($disp as $row)
				{
					?>
				
                <tr><th>Movie Name : </th><td><input type="text" name="moviename" value="<?php echo $row->moviename;?>"  required class="form-control" readonly></td></tr>
				<tr><th>Category : </th><td><input type="text" name="category" value="<?php echo $row->category;?>" required class="form-control" readonly></td></tr>
				<tr><th>Language : </th><td><input type="text" name="language" value="<?php echo $row->language;?>" required class="form-control" readonly></td></tr>
				<tr><th>Duration : </th><td><input type="text" name="duration" value="<?php echo $row->duration;?>" required class="form-control" readonly></td></tr>
				<tr><th>From : </th><td><input type="date" name="from" value="<?php echo $row->from;?>"  required class="form-control" readonly></td></tr>
				<tr><th>To : </th><td><input type="date" name="to" value="<?php echo $row->to;?>"  required class="form-control" readonly></td></tr>
				<tr><th>Image : </th><td><input type="file" name="image" value="<?php echo $row->image;?>"  required class="form-control" readonly></td></tr>
				<tr><th>Cast : </th><td><textarea name="cast" required class="form-control" readonly><?php echo $row->cast;?></textarea></td></tr>
				<tr><th>Director Name :  </th><td><input type="text" name="directorname" value="<?php echo $row->directorname;?>"  required class="form-control" readonly></td></tr>
				<tr><th>Year : </th><td><input type="date" name="year" value="<?php echo $row->year;?>"  required class="form-control" readonly></td></tr>
				<tr><th>Release Date : </th><td><input type="date" name="date" value="<?php echo $row->releasedate;?>"  required class="form-control" readonly></td></tr>
				<tr><th>Description : </th><td><input type="text" name="description" value="<?php echo $row->description;?>"  required class="form-control" readonly></td></tr>
				<tr><th>Amount : </th><td><input type="text" name="amount" value="<?php echo $row->amount;?>"  required class="form-control"></td></tr>

					<?php
				}
				?>
			</form>
			</table>
	</body>
</html>
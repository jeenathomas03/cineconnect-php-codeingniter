<body bgcolor='lavender'>
	<center>
		<h1></h1>
	</center>
	<table align="center">
		<form method="post" action="<?php echo base_url(); ?>Major/addticketamount">
			<input type="hidden" name="hide" value="<?php echo $movieid;?>">
			<tr>
				<th>Seat Category </th>
				<td>
					<select name="seatcategory" class="form-control mb-2">
						<option>-Select-</option>
						<option>IMAX</option>
						<option>VIP</option>
					</select>
			<tr>
				<th>Seat Amount</th>
				<td><input type="text" name="seatamount" required class="form-control"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Submit" required class="btn btn-success"></td>
			</tr>
		</form>
	</table>
</body>
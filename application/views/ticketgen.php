<body bgcolor='lavender'>
    <?php foreach ($dis as $row) {  ?>
		<table align="center">
			<form method="post" action="<?php echo base_url();?>Major/issueticket">
				<tr><th>Movie Name  </th><td><input type="text" name="mname" value="<?php echo $row->moviename;?>" required class="form-control"></td></tr>
				<tr><th>Seat Number </th><td><input type="text" name="seatno" value="<?php echo $row->seatnumbers;?>" required class="form-control"></td></tr>
				<tr><th>Theater Name  </th><td><input type="text" name="tname"value="<?php echo $row->theatername;?>" required class="form-control"></td></tr>
				<tr><th>No of Seats  </th><td><input type="text" name="noofseat"value="<?php echo $row->numberofseats;?>" required class="form-control"></td></tr>
				<tr><th>Date  </th><td><input type="text" name="date" value="<?php echo $row->currentdate;?>" required class="form-control"></td></tr>
				<tr><td></td><td><input type="submit" name="submit" value="submit" required class="btn btn-success"></td></tr>
			</form>
			</table>
            <?php } ?>
	</body>
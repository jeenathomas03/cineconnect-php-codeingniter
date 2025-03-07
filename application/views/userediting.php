
	<body bgcolor='lavender'>
		<table>
			<form method="post" action="<?php echo base_url();?>Major/userupdate">
			<!-- <input type="hidden" name="hide" value="<?php echo $id;?>"> -->
				<?php foreach($disp as $row)
				{ ?>
                 <tr><th>Name : </th><td><input type="text" name="name" value="<?php echo $row->name;?>"  required class="form-control"></td></tr>
				<tr><th>Contact : </th><td><input type="text" name="contact" value="<?php echo $row->contact;?>"  required class="form-control"></td></tr>
				<tr><th>Email : </th><td><input type="text" name="email" value="<?php echo $row->email;?>"  required class="form-control"></td></tr>
				<tr><td></td><td><input type="submit" value="Edit" required class="btn btn-success"></td></tr>
                <?php
				}
                ?>
			</form>
			</table>
	</body>

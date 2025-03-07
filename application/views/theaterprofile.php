
<body bgcolor='lavender'>
<table>
    <form method="post" action="<?php echo base_url();?>Major/theaterupdate">
    <!-- <input type="hidden" name="hide" value="<?php echo $id;?>"> -->
        <?php foreach($disp as $row)
        { ?>
         <tr><th> Theater Name : </th><td><input type="text" name="theatername" value="<?php echo $row->theatername;?>"  required class="form-control"></td></tr>
        <tr><th>Category : </th><td><input type="text" name="category" value="<?php echo $row->category;?>"  required class="form-control"></td></tr>
        <tr><th>City : </th><td><input type="text" name="city" value="<?php echo $row->city;?>"  required class="form-control"></td></tr>
        <tr><th>Seats: </th><td><input type="text" name="seats" value="<?php echo $row->seats;?>"  required class="form-control"></td></tr>
        <tr><th>Contact : </th><td><input type="text" name="contact" value="<?php echo $row->contact;?>"  required class="form-control"></td></tr>
        <tr><th>Email : </th><td><input type="text" name="email" value="<?php echo $row->email;?>"  required class="form-control"></td></tr>
        <tr><td></td><td><input type="submit" value="Edit" required class="btn btn-success"></td></tr>
        <?php
        }
        ?>
    </form>
    </table>
</body>

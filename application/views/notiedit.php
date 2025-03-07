
<body>
<center><h1></h1></center>
<table align="center">
    <form method="post" action="<?php echo base_url();?>Major/notificationupdate">
    <input type="hidden" name="hide" value="<?php echo $id;?>">
        <?php foreach($disp as $row)
        {
            ?>
        
        <tr><th>Notification : </th><td><textarea name="notification" value="<?php echo $row->notification;?>"  required class="form-control"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="Edit" class='btn btn-primary'></td></tr>

            <?php
        }
        ?>
    </form>
    </table>
</body>
</html>
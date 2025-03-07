      <body>
      <table align="center" border="1" class="table table-stripped">
        <form method="post" action="<?php echo base_url();?>Major/viewtheater">
        <tr><td><input type="text" name="search" ></td></tr>
           <tr><td><input type="submit" value="search" class="btn btn-primary" ></td></tr>
            <br><br>
            </table>
            <table align="center" border="1">
            <?php if (isset($search_message)) { ?>
        <div class="center-container">
            <p><?php echo $search_message; ?></p>
    </div>
        <?php }
        else { ?>
        <table align="center" border="1" class="table table-bordered">
    <tr> 
    <th>Theater Name</th>
    <th>City</th>
    </tr>
            <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->theatername;?></td>
                                           <td style="text-align:center;"><?php echo $d->city;?></td>
                                           <td><a class='btn btn-primary'href="<?php echo base_url();?>Major/moviesearchview/<?php echo $d->loginid;?>">Movies</a></td>
                                       </tr>

           <?php  } 
           
                                        } ?>
           
        </table>
        </body>
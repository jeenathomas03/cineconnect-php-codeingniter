
    <body>
        <table align="center" border="1">
        <form method="post"action="">
            <br><br>
       <tr>                                 
                                            <th>Movie Name</th>
                                            <th>Review</th>
                                       </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->moviename;?></td>
                                           <td style="text-align:center;"><?php echo $d->review;?></td>
                                           <td><a class='btn btn-primary' href="<?php echo base_url();?>Major/reviewedit/<?php echo $d->rid;?>">Edit</a></td>
                                           <td><a class='btn btn-primary'href="<?php echo base_url();?>Major/reviewdelete/<?php echo $d->rid;?>">delete</a></td>
                                          
           <?php  } ?>
        </table>
        </body>
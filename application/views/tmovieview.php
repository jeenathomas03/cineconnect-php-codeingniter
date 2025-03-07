
    <body>
        <table align="center" border="1">
        
       <tr> 
                                            <th>Movie Name</th>
                                            <th>Category</th> 
                                            <th>Language</th>
                                            <th>Duration</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Image</th>
                                            <th>Director Name</th>
                                            <th>Cast</th>
                                            <th>Year</th>
                                            <th>Release Date</th>
                                            <th>Description</th>
                                            <!-- <th>Amount</th> -->
                                        </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->moviename;?></td>
                                           <td style="text-align:center;"><?php echo $d->category;?></td>
                                           <td style="text-align:center;"><?php echo $d->language;?></td>
                                           <td style="text-align:center;"><?php echo $d->duration;?></td>
                                           <td style="text-align:center;"><?php echo $d->from;?></td>
                                           <td style="text-align:center;"><?php echo $d->to;?></td>
                                           <td style="text-align:center;"><img src="<?php echo base_url();?>uploads/<?php echo $d->image;?>"></td>
                                           <td style="text-align:center;"><?php echo $d->cast;?></td>
                                           <td style="text-align:center;"><?php echo $d->directorname;?></td>
                                           <td style="text-align:center;"><?php echo $d->year;?></td>
                                           <td style="text-align:center;"><?php echo $d->releasedate;?></td>
                                           <td style="text-align:center;"><?php echo $d->description;?></td>
                                           <!-- <td style="text-align:center;"><?php echo $d->amount;?></td> -->
                                           <td><a class='btn btn-success' href="<?php echo base_url();?>Major/movieedit/<?php echo $d->movieid;?>">Edit</a></td>
                                           <td><a class='btn btn-danger' href="<?php echo base_url();?>Major/moviedelete/<?php echo $d->movieid;?>">Delete</a></td>
                                           <td><a class='btn btn-danger' href="<?php echo base_url();?>Major/addticketamount1/<?php echo $d->movieid;?>">Add Ticket Amount</a></td>
           <?php  } ?>
        </table>
        </body>
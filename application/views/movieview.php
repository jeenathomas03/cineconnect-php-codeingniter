 <body>
            <table class="table table-striped">
       
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
                                            <th>Amount</th>
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
                                           <td style="text-align:center;"><?php echo $d->amount;?></td>
                                        </tr>
           <?php  } ?>
        </table>
        </body>
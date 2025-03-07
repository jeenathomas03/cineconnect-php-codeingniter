
<body>
        <table align="center" border="1">
        <form method="post"action="">
       <tr> 
                                            <th>Movie Name</th>
                                            <th>Release Date</th>
                                            
                                        </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->moviename;?></td>
                                           <td style="text-align:center;"><?php echo $d->releasedate;?></td>
                                           <td> <a href="<?php echo base_url();?>Major/seatsite/<?php echo $tid;?>/<?php echo $d->movieid;?> " class= "btn btn-success">Book</a></td>
                                      </tr>
           <?php  } ?>
        </table>
        </body>
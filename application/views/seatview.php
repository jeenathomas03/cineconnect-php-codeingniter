
<body>
        <table align="center" border="1">
        <form method="post"action="">
       <tr> 
                                            <th>Theater</th>
                                            <th>Movie</th>
                                            <th>Number of Seats</th>
                                        
                                            
                                        </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                       <td style="text-align:center;"><?php echo $d->theatername;?></td>
                                           <td style="text-align:center;"><?php echo $d->moviename;?></td>
                                           <td style="text-align:center;"><?php echo $d->numberofseats;?></td>
                                         
                                      </tr>
           <?php  } ?>
        </table>
        </body>
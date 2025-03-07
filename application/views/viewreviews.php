
    <body>
        
        <table align="center" border="1">
        <form method="post"action="">
            <br><br>
       <tr>                                 

                                          <th>Review</th>
                                          <th>Date</th>
                                       </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           
                                           <td style="text-align:center;"><?php echo $d->review;?></td>
                                           <td style="text-align:center;"><?php echo $d->currentdate;?></td>


                                
           <?php  } ?>
        </table>
        </body>
        </html>
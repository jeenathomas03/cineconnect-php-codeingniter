
    <body>
        <table align="center" border="1">
        <form method="post"action="">
            <br><br>
       <tr> 
                                            <th>Notification</th>
                                            <th>Current Date</th> 
                                            <th>Time</th>
                                        </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->notification;?></td>
                                           <td style="text-align:center;"><?php echo $d->currentdate;?></td>
                                           <td style="text-align:center;"><?php echo $d->time;?></td>
                                          
           <?php  } ?>
        </table>
        </body>
        </html>
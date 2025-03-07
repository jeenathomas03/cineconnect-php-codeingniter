
<body>
<table align="center" border="1" class="table table-striped">
<form method="post"action=" ">
    <br><br>
    
<tr> 
                                    <th>Name</th>
                                    <th>Rating</th> 
                                    <th>Current Date</th>
                                    <th>Time</th> 

                                </tr>
                               <?php foreach ($data as $d)
                               {  ?>

                               <tr>
                                   <td style="text-align:center;"><?php echo $d->name;?></td>
                                   <td style="text-align:center;"><?php echo $d->rating;?></td>
                                   <td style="text-align:center;"><?php echo $d->currentdate;?></td>
                                   <td style="text-align:center;"><?php echo $d->time;?></td>
                               </tr>

   <?php  } ?>
   
</table>
                               </body>
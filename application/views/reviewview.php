
    <body>
        <table align="center" border="1" class="table table-striped">
        <form method="post"action=" ">
            <br><br>
            
       <tr> 
                                            <th>Name</th>
                                            <th>Review</th> 

                                        </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>

                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->name;?></td>
                                           <td style="text-align:center;"><?php echo $d->review;?></td>
                                       </tr>

           <?php  } ?>
           
        </table>
                                       </body>
<html>
    <head>
        <title>movietableview</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        <table align="center" border="1">
        <form method="post"action="">
            <br><br>
       <tr> 
                                            <th>Theater Name</th>
                                            <th>Category</th> 
                                            <th>city</th>
                                            <th>Seats</th> 
                                            <th>Contact</th>
                                            <th>E-mail</th>
                                        </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->thatername;?></td>
                                           <td style="text-align:center;"><?php echo $d->category;?></td>
                                           <td style="text-align:center;"><?php echo $d->city;?></td>
                                           <td style="text-align:center;"><?php echo $d->seats;?></td>
                                           <td style="text-align:center;"><?php echo $d->contact;?></td>
                                           <td style="text-align:center;"><?php echo $d->email;?></td>
                                           <td><a class='btn btn-primary' href="<?php echo base_url();?>Major/theateredit/<?php echo $d->tid;?>">Edit</a></td>
                                          
           <?php  } ?>
        </table>
        </body>
        </html>
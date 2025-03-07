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
                                            <th>Name</th>
                                            <th>Contact</th> 
                                            <th>Email</th>
                                        </tr>
                                       <?php foreach ($data as $d)
                                       {  ?>
                                       <tr>
                                           <td style="text-align:center;"><?php echo $d->name;?></td>
                                           <td style="text-align:center;"><?php echo $d->contact;?></td>
                                           <td style="text-align:center;"><?php echo $d->email;?></td>
                                           <td><a class='btn btn-primary' href="<?php echo base_url();?>Major/useredit/<?php echo $d->publicid;?>">Edit</a></td>
                                          
           <?php  } ?>
        </table>
        </body>
        </html>
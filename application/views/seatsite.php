<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Theater Booking App</title>
    <link rel="stylesheet" href="styles.css">
</head>
  <body onload="onLoaderFunc()">
  
    <div class="inputForm">
    <center>
      Name *: <input type="text" id="Username" required>
      Number of Seats *: <input type="number" id="Numseats" required>
      <br/><br/>
      <button onclick="takeData()">Start Selecting</button>
    </center>
    </div>

    <div class="seatStructure">
    <center>

    <table id="seatsBlock">
     <p id="notification"></p>
      <tr>
        <td colspan="14"><div class="screen">SCREEN</div></td>
        <td rowspan="20">
          <div class="smallBox greenBox">Selected Seat</div> <br/>
          <div class="smallBox redBox">Reserved Seat</div><br/>
          <div class="smallBox emptyBox">Empty Seat</div><br/>
        </td>

        <br/>
      </tr>

      <tr>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td></td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
        <td>12</td>
    </tr>

    <tr>
        <td>A</td>
        <td><input type="checkbox" class="seats" value="A1"></td>
        <td><?php if($seat!='A2'){ ?><input type="checkbox" class="seats" value="A2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A3'){ ?><input type="checkbox" class="seats" value="A3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A4'){ ?><input type="checkbox" class="seats" value="A4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A5'){ ?><input type="checkbox" class="seats" value="A5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td class="seatGap"></td>
        <td><?php if($seat1!='A6'){ ?><input type="checkbox" class="seats" value="A6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A7'){ ?><input type="checkbox" class="seats" value="A7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A8'){ ?><input type="checkbox" class="seats" value="A8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A9'){ ?><input type="checkbox" class="seats" value="A9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A10'){ ?><input type="checkbox" class="seats" value="A10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A11'){ ?><input type="checkbox" class="seats" value="A11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='A12'){ ?><input type="checkbox" class="seats" value="A12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

      </tr>

      <tr>
        <td>B</td>
        <td><?php if($seat!='B1'){ ?><input type="checkbox" class="seats" value="B1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B2'){ ?><input type="checkbox" class="seats" value="B2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B3'){ ?><input type="checkbox" class="seats" value="B3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B4'){ ?><input type="checkbox" class="seats" value="B4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B5'){ ?><input type="checkbox" class="seats" value="B5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat!='B6'){ ?><input type="checkbox" class="seats" value="B6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B7'){ ?><input type="checkbox" class="seats" value="B7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B8'){ ?><input type="checkbox" class="seats" value="B8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B9'){ ?><input type="checkbox" class="seats" value="B9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B10'){ ?><input type="checkbox" class="seats" value="B10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B11'){ ?><input type="checkbox" class="seats" value="B11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='B12'){ ?><input type="checkbox" class="seats" value="B12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

      <tr>
        <td>C</td>
        <td><?php if($seat!='C1'){ ?><input type="checkbox" class="seats" value="C1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C2'){ ?><input type="checkbox" class="seats" value="C2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C3'){ ?><input type="checkbox" class="seats" value="C3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C4'){ ?><input type="checkbox" class="seats" value="C4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C5'){ ?><input type="checkbox" class="seats" value="C5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='C6'){ ?><input type="checkbox" class="seats" value="C6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C7'){ ?><input type="checkbox" class="seats" value="C7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C8'){ ?><input type="checkbox" class="seats" value="C8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C9'){ ?><input type="checkbox" class="seats" value="C9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C10'){ ?><input type="checkbox" class="seats" value="C10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C11'){ ?><input type="checkbox" class="seats" value="C11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='C12'){ ?><input type="checkbox" class="seats" value="C12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    <tr>
        <td>D</td>
        <td><?php if($seat!='D1'){ ?><input type="checkbox" class="seats" value="D1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D2'){ ?><input type="checkbox" class="seats" value="D2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D3'){ ?><input type="checkbox" class="seats" value="D3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D4'){ ?><input type="checkbox" class="seats" value="D4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D5'){ ?><input type="checkbox" class="seats" value="D5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='D6'){ ?><input type="checkbox" class="seats" value="D6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D7'){ ?><input type="checkbox" class="seats" value="D7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D8'){ ?><input type="checkbox" class="seats" value="D8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D9'){ ?><input type="checkbox" class="seats" value="D9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D10'){ ?><input type="checkbox" class="seats" value="D10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D11'){ ?><input type="checkbox" class="seats" value="D11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='D12'){ ?><input type="checkbox" class="seats" value="D12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    <tr>
        <td>E</td>
        <td><?php if($seat!='E1'){ ?><input type="checkbox" class="seats" value="E1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E2'){ ?><input type="checkbox" class="seats" value="E2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E3'){ ?><input type="checkbox" class="seats" value="E3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E4'){ ?><input type="checkbox" class="seats" value="E4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E5'){ ?><input type="checkbox" class="seats" value="E5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='E6'){ ?><input type="checkbox" class="seats" value="E6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E7'){ ?><input type="checkbox" class="seats" value="E7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E8'){ ?><input type="checkbox" class="seats" value="E8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E9'){ ?><input type="checkbox" class="seats" value="E9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E10'){ ?><input type="checkbox" class="seats" value="E10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E11'){ ?><input type="checkbox" class="seats" value="E11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='E12'){ ?><input type="checkbox" class="seats" value="E12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    <tr class="seatVGap"></tr>

    <tr>
        <td>F</td>
        <td><?php if($seat!='F1'){ ?><input type="checkbox" class="seats" value="F1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F2'){ ?><input type="checkbox" class="seats" value="F2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F3'){ ?><input type="checkbox" class="seats" value="F3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F4'){ ?><input type="checkbox" class="seats" value="F4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F5'){ ?><input type="checkbox" class="seats" value="F5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='F6'){ ?><input type="checkbox" class="seats" value="F6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F7'){ ?><input type="checkbox" class="seats" value="F7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F8'){ ?><input type="checkbox" class="seats" value="F8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F9'){ ?><input type="checkbox" class="seats" value="F9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F10'){ ?><input type="checkbox" class="seats" value="F10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F11'){ ?><input type="checkbox" class="seats" value="F11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='F12'){ ?><input type="checkbox" class="seats" value="F12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    <tr>
        <td>G</td>
        <td><?php if($seat!='G1'){ ?><input type="checkbox" class="seats" value="G1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G2'){ ?><input type="checkbox" class="seats" value="G2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G3'){ ?><input type="checkbox" class="seats" value="G3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G4'){ ?><input type="checkbox" class="seats" value="G4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G5'){ ?><input type="checkbox" class="seats" value="G5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='G6'){ ?><input type="checkbox" class="seats" value="G6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G7'){ ?><input type="checkbox" class="seats" value="G7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G8'){ ?><input type="checkbox" class="seats" value="G8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G9'){ ?><input type="checkbox" class="seats" value="G9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G10'){ ?><input type="checkbox" class="seats" value="G10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G11'){ ?><input type="checkbox" class="seats" value="G11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='G12'){ ?><input type="checkbox" class="seats" value="G12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    <tr>
        <td>H</td>
        <td><?php if($seat!='H1'){ ?><input type="checkbox" class="seats" value="H1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H2'){ ?><input type="checkbox" class="seats" value="H2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H3'){ ?><input type="checkbox" class="seats" value="H3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H4'){ ?><input type="checkbox" class="seats" value="H4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H5'){ ?><input type="checkbox" class="seats" value="H5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='H6'){ ?><input type="checkbox" class="seats" value="H6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H7'){ ?><input type="checkbox" class="seats" value="H7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H8'){ ?><input type="checkbox" class="seats" value="H8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H9'){ ?><input type="checkbox" class="seats" value="H9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H10'){ ?><input type="checkbox" class="seats" value="H10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H11'){ ?><input type="checkbox" class="seats" value="H11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='H12'){ ?><input type="checkbox" class="seats" value="H12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    <tr>
        <td>I</td>
        <td><?php if($seat!='I1'){ ?><input type="checkbox" class="seats" value="I1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I2'){ ?><input type="checkbox" class="seats" value="I2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I3'){ ?><input type="checkbox" class="seats" value="I3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I4'){ ?><input type="checkbox" class="seats" value="I4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I5'){ ?><input type="checkbox" class="seats" value="I5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='I6'){ ?><input type="checkbox" class="seats" value="I6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I7'){ ?><input type="checkbox" class="seats" value="I7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I8'){ ?><input type="checkbox" class="seats" value="I8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I9'){ ?><input type="checkbox" class="seats" value="I9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I10'){ ?><input type="checkbox" class="seats" value="I10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I11'){ ?><input type="checkbox" class="seats" value="I11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='I12'){ ?><input type="checkbox" class="seats" value="I12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    <tr>
        <td>J</td>
        <td><?php if($seat!='J1'){ ?><input type="checkbox" class="seats" value="J1"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J2'){ ?><input type="checkbox" class="seats" value="J2"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J3'){ ?><input type="checkbox" class="seats" value="J3"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J4'){ ?><input type="checkbox" class="seats" value="J4"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J5'){ ?><input type="checkbox" class="seats" value="J5"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>

        <td></td>
        <td><?php if($seat1!='J6'){ ?><input type="checkbox" class="seats" value="J6"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J7'){ ?><input type="checkbox" class="seats" value="J7"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J8'){ ?><input type="checkbox" class="seats" value="J8"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J9'){ ?><input type="checkbox" class="seats" value="J9"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J10'){ ?><input type="checkbox" class="seats" value="J10"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J11'){ ?><input type="checkbox" class="seats" value="J11"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
        <td><?php if($seat1!='J12'){ ?><input type="checkbox" class="seats" value="J12"><?php } else { ?><div class="smallBox redBox"></div><?php } ?></td>
      </tr>

    </table>
    <button onclick="updateTextArea()">Confirm Selection</button>
    </center>
    </div>

    <br/><br/>

    <!-- <div class="displayerBoxes"> -->
    <center>
        <form action="<?php echo base_url();?>Major/seat_book" method="post">
            <input type="hidden" name="tid" value="<?php echo $tid;?>">
            <input type="hidden" name="movieid" value="<?php echo $movieid;?>">
            <table class="Displaytable">
                <tr>
                    <th>Name</th>
                    <th>Number of Seats</th>
                    <th>Seats</th>
                </tr>
                <tr>
                    <td><textarea name="name" id="nameDisplay"></textarea></td>
                    <td><textarea name="noseats" id="NumberDisplay"></textarea></td>
                    <td><textarea name="seatnumbers" id="seatsDisplay"></textarea></td>
                </tr>
            </table>
            <!-- <div>
                <br/><br/>
                
            </div> -->
    
   
    <!-- </div> -->
    <input type="submit" value="Make Payment">
    </form>
    </center>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="script.js"></script>

    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {
            if ($("#Username").val().length == 0 || $("#Numseats").val().length == 0) {
                alert("Please Enter your Name and Number of Seats");
            } else {
                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                document.getElementById("notification").innerHTML = "Please Select your Seats NOW!";
            }
        }

        function updateTextArea() {
            if ($("input:checked").length == $("#Numseats").val()) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = $("#Username").val();
                var allNumberVals = $("#Numseats").val();
                var allSeatsVals = [];
                
                // Storing selected seat values in an array
                $('#seatsBlock :checked').each(function() {
                    allSeatsVals.push($(this).val());
                });

                // Constructing the URL with parameters
                var url = "<?php echo base_url();?>Major/payment?";
                url += "name=" + allNameVals + "&noseats=" + allNumberVals + "&seatnumbers=" + allSeatsVals.join(',');

                // Updating the href attribute of the "Make Payment" link
                $('#makePaymentLink').attr('href', url);
            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }

        $(":checkbox").click(function() {
            if ($("input:checked").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
    </script>
</body>

<style>
    body
{
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

#Username
{
  border:none;
  border-bottom:1px solid;
}

.screen
{
  width:100%;
  height:20px;
  background:#4388cc;
  color:#fff;
  line-height:20px;
  font-size:15px;
}

.smallBox::before
{
  content:".";
  width:15px;
  height:15px;
  float:left;
  margin-right:10px;
}
.greenBox::before
{
  content:"";
  background:Green;
}
.redBox::before
{
  content:"";
  background:Red;
}
.emptyBox::before
{
  content:"";
  box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
    background-color:#ccc;
}

.seats
{
  border:1px solid red;background:yellow;
}

.seatGap
{
  width:40px;
}

.seatVGap
{
  height:40px;
}

table
{
  text-align:center;
}

.Displaytable
{
  text-align:center;
}
.Displaytable td, .Displaytable th {
    border: 1px solid;
    text-align: left;
}
textarea
{
  border:none;
  background:transparent;
}

input[type=checkbox] {
    width:0px;
    margin-right:18px;
}

input[type=checkbox]:before {
    content: "";
    width: 15px;
    height: 15px;
    display: inline-block;
    vertical-align:middle;
    text-align: center;
    box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
    background-color:#ccc;
}

input[type=checkbox]:checked:before {
    background-color:Green;
    font-size: 15px;
}
</style>

<script>
    function onLoaderFunc()
{
  $(".seatStructure *").prop("disabled", true);
  $(".displayerBoxes *").prop("disabled", true);
}
function takeData()
{
  if (( $("#Username").val().length == 0 ) || ( $("#Numseats").val().length == 0 ))
  {
  alert("Please Enter your Name and Number of Seats");
  }
  else
  {
    $(".inputForm *").prop("disabled", true);
    $(".seatStructure *").prop("disabled", false);
    document.getElementById("notification").innerHTML = "Please Select your Seats NOW!";
  }
}

function updateTextArea() {

  if ($("input:checked").length == ($("#Numseats").val()))
    {
      $(".seatStructure *").prop("disabled", true);

     var allNameVals = [];
     var allNumberVals = [];
     var allSeatsVals = [];

     //Storing in Array
     allNameVals.push($("#Username").val());
     allNumberVals.push($("#Numseats").val());
     $('#seatsBlock :checked').each(function() {
       allSeatsVals.push($(this).val());
     });

     //Displaying
     $('#nameDisplay').val(allNameVals);
     $('#NumberDisplay').val(allNumberVals);
     $('#seatsDisplay').val(allSeatsVals);
    }
  else
    {
      alert("Please select " + ($("#Numseats").val()) + " seats")
    }
  }


$(":checkbox").click(function() {
  if ($("input:checked").length == ($("#Numseats").val())) {
    $(":checkbox").prop('disabled', true);
    $(':checked').prop('disabled', false);
  }
  else
    {
      $(":checkbox").prop('disabled', false);
    }
});
</script>
</html>
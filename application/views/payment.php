<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title></title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Card Payment Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link href="<?php echo base_url();?>payment/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url();?>payment/css/creditly.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url();?>payment/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- Web Fonts -->
    <link href="<?php echo base_url();?>payment///fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web Fonts -->
    </head>
    <body>
    <div class="main">	
        <h1>Card Payment Forms</h1>
        <div id="myAccordion" class="nl-accordion">
            <ul>
                <li>
                    <input type="radio" id="nl-radio-1" name="nl-radio" class="nl-radio" checked="checked"/>
                    <label class="nl-label" for="nl-radio-1">Payment Card</label>
                    <div class="nl-content">
                        <div class="agileits_w3layouts_tab1 agileits_w3layouts_tab">
                        <form action="<?php echo base_url();?>Major/paytable" method="post" class="creditly-card-form agileinfo_form">
                        <input type="hidden" name="amount" value="<?php echo $amount;?>">
                        <input type="hidden" name="tid" value="<?php echo $tid;?>">
                        <input type="hidden" name="noofseat" value="<?php echo $no;?>">
                        <input type="hidden" name="seatid" value="<?php echo $seatid;?>">

                            <section class="creditly-wrapper wthree w3_agileits_wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <?php { ?>
                                            <label class="control-label">Name on Card</label>
                                            <input class="billing-address-name form-control" type="text" name="nameoncard" placeholder="Name" required="">
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Card Number</label>
                                            <input class="number credit-card-number form-control" type="text" name="cardnumber"inputmode="numeric" autocomplete="cc-number" autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;" required="">
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Expiration Date</label>
                                                    <input class="expiration-month-and-year form-control date" type="text" name="expirydate" placeholder="MM / YY" required="">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">CVV</label>
                                                    <input class="security-code form-control" Â·inputmode="numeric" type="text" name="cvv" placeholder="&#149;&#149;&#149;" required="">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                    </div>
                                    <input type="submit" value="Make a payment"  aria-hidden="true" class="btn btn-success">
                                    <!-- <button class="submit"></button> -->
                            </section>
                        </form>
                        </div>	
                    </div>
                    <?php } ?>
                </li>
                <!-- <li>
                    <input type="radio" id="nl-radio-2" name="nl-radio" class="nl-radio" />
                    <label class="nl-label" for="nl-radio-2">PayPal</label>
                    <div class="check w3ls"></div>
                    <div class="nl-content">
                        <div class="agileits_w3layouts_tab2 agileits_w3layouts_tab">
                            <h3>Don't Have an Account <a href="#">Register here</a></h3>
                            <form action="#" method="post">
                                <div class="creditly-wrapper wthree">
                                    <input type="email" name="Email" placeholder="Email" required="">
                                    <input type="password" name="Password" placeholder="Password" required="">
                                    <input type="submit" value="Login">
                                </div>	
                            </form>
                        </div>				
                    </div>
                </li> -->
            </ul>
        </div>
        <!-- <div class="agileits_copyright">
            <p>© 2017 Card Payment Forms. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
        </div> -->
    </div>
    <!-- js scripts --> 
    <!-- js -->
        <script type="text/javascript" src="<?php echo base_url();?>payment/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- credit-card -->
        <script type="text/javascript" src="<?php echo base_url();?>payment/js/creditly.js"></script>
        <script type="text/javascript">
            $(function() {
              var creditly = Creditly.initialize(
                  '.creditly-wrapper .expiration-month-and-year',
                  '.creditly-wrapper .credit-card-number',
                  '.creditly-wrapper .security-code',
                  '.creditly-wrapper .card-type');
    
              $(".creditly-card-form .submit").click(function(e) {
                e.preventDefault();
                var output = creditly.validate();
                if (output) {
                  // Your validated credit card output
                  console.log(output);
                }
              });
            });
        </script>
    <!-- //credit-card -->
    <!-- //js scripts --> 
    </body>
    </html>

<html ng-app="myApp">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>
<br><br>
<body bgcolor='lavender'>
	<div ng-controller="cntrl" class="container" style="margin-left: 200px;">
		<!-- <table align="center"> -->
		<form name="SaveForm" method="post" action="<?php echo base_url(); ?>Major/register">
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Name </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="text"
						ng-pattern="/^[a-zA-Z. ]*[a-zA-Z]{1,60}$/" name="name" required class="form-control" ng-model="name">
						                
                 <span style="color:red" ng-show="SaveForm.name.$dirty && SaveForm.name.$invalid" class="ng-hide">   
                  Please Enter Valid  Name.!  
                 </span>
					</div>
			</div>
			
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Contact </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="text"  ng-pattern="/^[7-9][0-9]{9}$/" name="contact" required
						class="form-control" ng-model="contact">  <span style="color:red" ng-show="SaveForm.contact.$dirty && SaveForm.contact.$invalid" class="ng-hide">
            Please Enter Valid Contact.!
          </span></div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Email </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="email" required ng-pattern="/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,30}$/" name="email" required
						class="form-control" ng-model="email"> <span style="color:red" ng-show="SaveForm.email.$dirty && SaveForm.email.$invalid" class="ng-hide">
            Please Enter Valid Email.!
          </span></div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Password </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="password" name="password" required
						class="form-control"></div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: -150px;"></div>
				<div class="col-sm-3" style="margin-left: 150px;"><input type="submit" value="Register" required
						class="btn btn-success"></div>
			</div>
		</form>
		<!-- </table> -->
	</div>
</body>
<script>
    var app = angular.module("myApp", []);
    app.controller('cntrl', function($scope) {})
  </script>

</html>
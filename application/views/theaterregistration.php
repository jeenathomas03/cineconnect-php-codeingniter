
	<html ng-app="myApp">

<head>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
</head>
<br><br>
<body bgcolor='lavender'>
	<div ng-controller="cntrl" class="container" style="margin-left: 200px;">
		<!-- <table align="center"> -->
		<form name="SaveForm" method="post" action="<?php echo base_url(); ?>Major/tregister">
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Theater Name </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="text" ng-pattern="/^[a-zA-Z. ]*[a-zA-Z]{1,60}$/" name="theatername" required
						class="form-control border-primary w-99 py-2 ps-3 pe-4" ng-model="theatername">
						<span style="color:red" ng-show="SaveForm.theatername.$dirty && SaveForm.theatername.$invalid" class="ng-hide">
            Please Enter Valid Name!
          </span></div>
						
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Category </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="text" name="category" required class="form-control border-primary w-99 py-2 ps-3 pe-4" ng-model="category">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">City</div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="text" name="city" required class="form-control border-primary w-99 py-2 ps-3 pe-4" ng-model="city">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Seats</div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="text" name="seats" required class="form-control border-primary w-99 py-2 ps-3 pe-4" ng-model="seats">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Contact </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="text" name="contact" required class="form-control border-primary w-99 py-2 ps-3 pe-4" ng-model="contact" ng-pattern="/^[6    -9][0-9]{9}$/" />
				<span style="color:red" ng-show="SaveForm.contact.$dirty && SaveForm.contact.$invalid" class="ng-hide">
            Please Enter Valid Mobile No.!
          </span>
			</div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Email </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="email" name="email" required ng-pattern="/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,30}$/" class="form-control border-primary w-99 py-2 ps-3 pe-4" ng-model="email" />
				<span style="color:red" ng-show="SaveForm.email.$dirty && SaveForm.email.$invalid" class="ng-hide">
            Please Enter Valid Email.!
          </span>	
			</div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: 150px;">Password </div>
				<div class="col-sm-3" style="margin-left: -150px;"><input type="password" name="password" required
						class="form-control border-primary w-99 py-2 ps-3 pe-4"></div>
			</div>
			<div class="row">
				<div class="col-sm-3" style="margin-left: -150px;"></div>
				<div class="col-sm-3" style="margin-left: 150px;"><input type="submit" value="Register" required class="btn btn-success"></div>
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

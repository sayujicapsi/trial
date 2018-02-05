<html ng-app="myApp">
<head>
<script src="angular.min.js"></script>
<script src="angular-messages.min.js"></script>
<script>
var myApp = angular.module('myApp',['ngMessages']);
myApp.controller('thecontroller',["$scope","$timeout",function($scope,$timeout){
	
	//$scope.name = "sayuj123";
	$scope.damn = "";
	$scope.characters = 7;
	
	$scope.alertonclick = function(){ 
		alert("sdfsdfdsf");
		
	};
	/* $timeout(function(){
		$scope.name = "xaviour";
		
	},3000) */
	/* $scope.$watch('damn',function(n,o){
		console.log("new value is " + n);
		console.log("old vlaue is " +o);
		
		
	});
	
	setTimeout(function(){
		$scope.$apply(function(){
		$scope.damn = "dsfsdfdsfdsfds";
		console.log("change hui hai");
		
	});},3000);
 */
	$scope.rulesaa = [
			{rulename : "dsfsdfds dfsdfsdf"},
			{rulename : "dsfsdfds dfsdfsdf"},
			{rulename : "dsfsdfds dfsdfsdf"},
	];
	
	
	
	
}]






);




	
</script>
</head>
<body>



	<div ng-controller = "thecontroller">
	
	<input type="button" value="click me" ng-click="alertonclick()" />
     <input type="text" ng-model="damn" name="myField" required minlength="5"  />
    </label>
    <div ng-messages="myForm.myField.$error" role="alert">
      <div ng-message="required">You did not enter a field</div>
     <!-- <div ng-message="minlength, maxlength">
        Your email must be between 5 and 100 characters longs
      </div>-->
	  <div class="alert" ng-if="damn.length != characters"  >
        Your email must be  7 characters longs
      </div>
	
	  
	  <ul>
		<li ng-repeat = "rule in rulesaa">
		{{rule.rulename}}
			
		</li>
	  </ul>
	  
    </div>
  </form>
	
	</div>

</body>

</html>
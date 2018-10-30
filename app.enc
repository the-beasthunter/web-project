angular.module('travelBook', ['ngAnimate', 'ui.bootstrap']);
angular.module('travelBook').controller('travelBookCtrl', function ($scope, $window) {

	$scope.data={};
	$scope.step1 = {
		active:true
	};
	$scope.step2 = {
		disabled:true
	};
	$scope.step3 = {
		disabled:true
	};
	$scope.locations = ["Boston","New York", "Chicago", "San Francisco"];

	$scope.toggleOpen = function($event,name) {
		$event.preventDefault();
		$event.stopPropagation();
		$scope[name] = !$scope[name];
	};

	$scope.validateStep1 = function(){
		return $scope.data.step1form.$valid;
	};

	$scope.validateStep2 = function(){
		return $scope.data.step2form.$valid;
	};
	
	$scope.gotoStep2 = function(){
		$scope.step2.disabled = false;
		$scope.step1.active = false;
		$scope.step2.active = true;
	};
	$scope.gotoStep3 = function(){
		$scope.step3.disabled = false;
		$scope.step2.active = false;
		$scope.step3.active = true;
	};
});
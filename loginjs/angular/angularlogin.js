
//create module

var xsignapp = angular.module ( 'signapp', [ 'ngRoute']);

xsignapp.config ( function($routeProvider) {
     $routeProvider
     .when('/',
     {
     	controller:'SimpleController',
     	templateUrl: 'odigos.html'
     })
     .when('/mainmenu.html'
     {
     	controller:'SimpleController',
     	templateUrl: 'mainmenu.html'


     })
     .otherwise({redirectTo: '/'});
});

var controllers= {}; 
controllers.SimpleController = function ($scope, simpleFactory) {
$scope.customers = simpleFactory.getCustomers();

$scope.addCustomer = function() {
	$scope.customers.push(
		{username: $scope.newCustomer.username, email: $scope.newCustomer.email,
 pwd_1: $scope.newCustomer.password, pwd_2: $scope.newCustomer.password}
 );
	document.location.href="/#";
}

}

xsignapp.controller( controllers ); 

xsignapp.factory('simpleFactory', function()){
var customers = [];}

var factory = {};
factory.getCustomers = function() {
	return customers;

}

return factory;



//navigation menu


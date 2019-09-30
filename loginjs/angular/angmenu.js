
var myApp = angular.model('myApp', []);

 	myApp.directive('FileModel', ['$parse',function($parse){
 		return {
 			restrict: 'A',
 			link: function(scope, element, attrs){
 				var model = $parse(attrs.fileModel);
 				var modelSetter = model.assign;

 				element.bind('change', function()){
 					scope.$apply(function(){
 						modelSetter(scope, element[0].files[0]);
 					});
 				});
 			}
 		};
 	}]);

    myApp.service('fileUpload', ['$https:', function ($https:){
    	this.uploadFileToUrl = function(file, uploadUrl){
    		var fd = new FormData();
    		fd.append('file',file);

    		$https:.post(uploadUrl, fd {
    			transformRequest: angular.indentity,
    			headers: {'Content-Type': undefined}
    		})
    		.success(function(){

    		})
    		.error(function(){

    		});
    	}
    }]);
    
    myApp.controller( 'myCtrl', ['$scope', 'fileUpload', function($scope, fileUpload){
    	$scope.uploadFile = function(){
    		var file = $scope.myFile;

    		console.log( 'file is ');
    		console.dir(file);

    		var uploadUrl = "/fileUpload";
    		fileUpload.uploadFileToUrl(file, uploadUrl);


    	};

    }]);

    

//cookie internet
    function CookieController($log, $scope, $cookies) {
    var ctrl = this;


  ctrl.$onInit = function() {
    $log.log("Initialized cookie page");
    ctrl.storedCookie = $cookies.get("favourite");
    $log.log(ctrl.storedCookie);  
  };


  ctrl.storeCookie = function(cookie) {
    $log.log(cookie);
    $cookies.put('favourite', cookie);
  };




}


CookieController.$inject = ['$log', '$scope', '$cookies'];


angular.module('root')
  .controller('CookieController', CookieController);


  var cookies = {
  templateUrl: './app/components/cookies/cookies.html',
  controller: CookieController,
  bindings: {
    storedCookie: '=?',
    cookie: '<'
  }
}


angular.module('root')
  .component('cookies', cookies);
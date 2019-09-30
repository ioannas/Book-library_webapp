'use strict';

/*
function will communicate with phph file for authedication */ 

var app = angular.module('myApp', [])
        app.controller('logctrl', function($scope, $http){
$scope.signin=function(){
    console.log("triggered");
$http.post("login.php",{'collectedemail':$scope.theemailadd,'collectedpassword': $scope.thepswr })

.sucess(function(data, status, headers, config){
    console.log(data);
    if(data.trim()=='correct'){
        window.location.href = 'index.html';
    }
    else{
        $scope.errorMsg = "Login not correct";
    }
})
.error(function(data, status, headers, config){
    $scope.errorMsg = 'unable to Log iN';
})
}

$scope.signup = function(){
    console.log("We want to register");
    $http.post("signup.php", {'firstname': $scope.thefirstname, 'lastname': $scope.thelastname,  'emailadd': $scope.theemailadd, 'password': $scope.thepswr})
    
      .success(function(data, status, headers, config){
          console.log(data);
          if(data.trim()==='correct'){
          window.location.href='index.html';
          }
          else{
          $scope.errorMsg ="Registration wasn't succesful";
          }
          })
          .error(function(data, status, headers, config){
          $scope.errorMsg = "Unable to Register";
          })
          }

$scope.bookg = function() {
    console.log("Book insert");
    $http.post("lesson.php", { 'titlos': $scope.thetitlos, 'siggrafeas': $scope.thesiggrafeas, 'ekdoseis': $scope.theekdoseis})

    .success(function(ata, status, headers, config){
        console.log(data);
        if(data.trim()=='correct'){
            window.location.href='skanarisma.html';
        }
    else{
        $scope.errorMsg="wrong data";
    }
    })
    .error(function(data, status, headers, config){
        $scope.errorMsg = "unable to store the book";
    })
}
   //$scope.istorikog = function() {
    //console.log("Book search");
    //$http.post("lesson.php", { 'titlos': $scope.titlos, 'siggrafeas': $scope.siggrafeas})

   // .success(function(ata, status, headers, config){
       // console.log(data);
      //  if(data.trim()=='correct'){
      //      window.location.href='istoriko.html';
      //  }
 //   else{
  //      $scope.errorMsg="wrong data";
  //  }
  //  })
  //  .error(function(data, status, headers, config){
  //      $scope.errorMsg = "unable to fin the book";
  //  })
//}
        



});
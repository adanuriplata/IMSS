var app = angular.module("Comida", []);
app.controller("myCtrl", function ($scope) {
  //  var kcleche = angular.element( document.querySelector( '#kcleche' ) );
   $scope.sumar = function(){
       $scope.totaldesayuno = parseInt(kcazucar) + parseInt(kcgrasas)  + parseInt(kcleguminosas)  + parseInt(kccereal)  + parseInt(kcvegetales)  + parseInt(kcfruta)  + parseInt(kccarne)  + parseInt(kcleche);
  }
   
})





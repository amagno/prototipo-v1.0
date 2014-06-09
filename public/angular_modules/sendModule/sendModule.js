var sendModule = angular.module('sendModule', []);


sendModule.factory('laravel', ['$http', function($http){
    return {
        post: function(url, data){
            $http.post(url, data)
        }
    }
}]);


sendModule.controller('TestController', ['$scope', '$http', function($scope, $http){
    $scope.ok = '';

    $scope.data = {};

    $scope.sendData = function(url){

        $http.post(url, $scope.data)

            .success(function(data){
                $scope.ok = data
            })
            .error(function(){
               $scope.ok = 'Dados não enviados'
            })
    }
}]);
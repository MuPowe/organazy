
var app = angular.module('todo', ['ngSanitize','ngAnimate']);

app.controller("formCtrl", ['$scope', '$http', function($scope, $http) {
    $scope.url = 'process.php';

    $scope.formsubmit = function(isValid) {

        if (isValid) {

            $http.post($scope.url, {"msg": $scope.msg, "id": $scope.id}).
            success(function(data, status) {
                console.log(data);
                $scope.status = status;
                $scope.data = data;
                $scope.result = data;
            })
        }else{
            alert('Form is not valid');
        }

    }

}]);
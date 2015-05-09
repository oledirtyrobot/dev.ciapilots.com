var aircraftApp = angular.module('aircraftApp', []);

aircraftApp.controller('DemoAircraftController', ['$scope', '$http',
    function ($scope, $http) {

        $scope.airportID = "4 Letter Airport Code";


        $http.get('/jsonAircraft').success(function (todos) {
            $scope.todos = todos;
        });

        $scope.addAircraft = function(){
            var aircraft = {
                tailNumber: $scope.newAircraft
            };
            $scope.todos.push(aircraft);
            $http.post('aircraft', aircraft);
        };

        $scope.getFBO = function(){

            $scope.loading = true;
            //$scope.fboDetails = null;

            //limits unnecessary ajax calls if the airportID being typed is not 4 chars
            if($scope.airportID.length == 4){

                $http.get("/getFBO/" + $scope.airportID)
                    .then(function(response) {
                        $scope.loading = false;
                        //console.log("response.data is: " + response.data);
                        $scope.fbosName = response.data;
                    }, function(result) {
                        console.log("The request failed: " + result);
                    });
            }

        };

        $scope.fboDetails = function(fboDetails){
            $scope.depFboDetails = fboDetails;
            //$scope.fboDetails = "hey some fbo details";
            //alert('Hello ' + fboDetails);
        }



    }]);



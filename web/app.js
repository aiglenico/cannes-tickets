var app = angular.module("CannesApp", ["ngRoute"]);

app.controller('FrontController', 
  ['$scope', '$http', 
    function($scope, $http){
}]);

app.controller('SingleController',
    ['$scope', '$http',
        function($scope, $http){
            var ctrl = this;
            ctrl.seances = [];
            var promListing = $http.get("/cannes-tickets/data/films.json");
            promListing.then(function(response){
                console.log(response.data);
                ctrl.seances= response.data;
            });
        }
    ]
);
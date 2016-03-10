// Directives
var angular;

angular.module("rootCave", ['ngRoute'])

    .service('aboutService', function ($http, $q) {
        "use strict";
        var deferred = $q.defer();
        $http.get('assets/data.json').then(function (rcdata) {
            deferred.resolve(rcdata);
        });
        this.getAbout = function () {
            return deferred.promise;
        };
    })

    .controller('aboutCtrl', function ($scope, aboutService) {
        var promise = aboutService.getAbout();
        promise.then(function (rcdata) {
            $scope.about = rcdata.data.about;
            $scope.products = rcdata.data.products;
            $scope.mopileProduct = rcdata.data.mopileProduct;
            $scope.clients = rcdata.data.clients;
            $scope.anytime = rcdata.data.anytime;
            $scope.lobProduct = rcdata.data.lobProduct;

        });
    })

    .config(function ($routeProvider) {
        $routeProvider
            .when('/lob',
                {
                    controller: 'lobUrl',
                    templateUrl: 'line-of-business.php'
                });
    });

// Directives
var angular;

angular.module("rootCave", [])
    // head
    .directive('rchead', function () {
        "use strict";
        return {
            templateUrl: "assets/html/head.html"
        };
    })

    //navigation
    .directive('rcnav', function () {
        "use strict";
        return {
            templateUrl: 'assets/html/navigation.html'
        };
    })

    //footer
    .directive('rcfooter', function () {
        "use strict";
        return {
            templateUrl: 'assets/html/footer.html'
        };
    }).service('aboutService', function ($http, $q) {
        "use strict";
        var deferred = $q.defer();
        $http.get('assets/data.json').then(function (rcdata) {
            deferred.resolve(rcdata);
        });
        this.getAbout = function () {
            return deferred.promise;
        };
    }).controller('aboutCtrl', function ($scope, aboutService) {
        var promise = aboutService.getAbout();
        promise.then(function (rcdata) {
            $scope.about = rcdata.data.about;
            $scope.products = rcdata.data.products;
            console.log($scope.about);
            console.log($scope.products);
        });
    });

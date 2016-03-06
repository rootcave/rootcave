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
    });

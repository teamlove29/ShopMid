var app = angular.module("myApp", [
    'ngRoute'
]);

app.config(function ($routeProvider) {
    $routeProvider
    .when("/",
        {
        templateUrl: './view/viewers/home.php',
        controller: 'homeCtrl'
        }).when("/login", {
        templateUrl: './view/viewers/login.php',
        controller: 'loginCtrl'
        }).when("/register", {
            templateUrl: './view/viewers/register.php',
            controller: 'registerCtrl'
        
    }).when("/test"
    ,{
        templateUrl: 'test.php'
    }) 
    // .when("/help", {
    //     templateUrl: './view/viewers/help.php',
    //     controller: 'helpCtrl'
    // })
    // .when("/report", {
    //     templateUrl: './view/viewers/report.php',
    //     controller: 'reportCtrl'
    // })
        .otherwise({
            redirectTo: '/'
        });
});
app.controller('pageCtrl', ['$scope', '$http','$location',function($scope ,$http,$location ){

    // console.log('pageCtrl');
    // test 
        const lct = $location.path() ;
        console.log('asd ='+lct)
        if ( lct == '/'){
            
            $('#nav-item-1').tab('show');
        } 
        // else if ( lct == '/login') { 
        // }
        // else if ( lct == '/help') {
        // }
        // else if ( lct == '/help') {

        // }
    // test

 
}]);

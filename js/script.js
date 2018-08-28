(function(angular) {
  'use strict';
  angular.module('OMDbAPISearch', [])
    .controller('searchMovies', ['$scope', '$http',
      function($scope, $http) {
        $scope.method = 'GET';
        $scope.fetch = function() {
          if ($scope.searchparam) {
            $scope.url = 'https://www.omdbapi.com/?apikey=b801da26&s=' + $scope.searchparam + '&type=movie&r=json';
            $http({
              method: $scope.method,
              url: $scope.url
            }).
            then(function(response) {
              if (response.data.Response) {
                $('.results').css('display', 'block');
                $('.noResults').css('display', 'none');
                var theSrchResults = response.data["Search"];
                angular.forEach(theSrchResults, function(obj) {
                  // on boucle sur chaque film avec ses résultats
                  $http({
                    method: $scope.method,
                    url: 'https://www.omdbapi.com/?apikey=b801da26&i=' + obj.imdbID + '&plot=full&r=json&tomatoes=true'
                  }).
                  then(function(response) {

                    obj.details = response.data;
                  });
                });
                $scope.movieResults = theSrchResults;
              } else {
                //erreur, film non trouvé
                console.log("non trouvé");
                $('.results').css('display', 'none');
                $('.noResults').css('display', 'block');
                $('.noResults').html("<strong>Aucun résultat trouvé :(.</strong>");
              }
            }, function(response) {
              console.log("failure");
              $('.results').css('display', 'none');
              $('.noResults').css('display', 'block');
              $('.noResults').html("<strong>Erreur.</strong>");
            });
          } else {
            // pas de saisie
            $('.results').css('display', 'none');
            $('.noResults').css('display', 'none');
            $('#theSearch').fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
          }
        };
      }
    ])
    .directive('movieSrchResults', function() {
      return {
        templateUrl: '../movieResults.html'
      };
    });
})(window.angular);

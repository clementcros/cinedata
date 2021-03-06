<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style_js.css" />
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0-beta.1/angular.min.js"></script>
    <script src="<?php echo base_url() ?>js/script.js"></script>
    <title>Cinedata</title>
</head>

<body ng-app="OMDbAPISearch">
<div class="container" ng-controller="searchMovies">

    <h1>Rechercher un film pour Cinedata</h1><br>
    <form>
        <div class="search">
            <input id="theSearch" ng-model="searchparam" placeholder="Nom de film" text" ngTrim="true" />
            <button ng-click="fetch()">Rechercher</button>
            <div class="clear"></div>
        </div>
    </form>

    <div class="results">

        <div class="result" movie-srch-results ng-repeat="movie in movieResults"></div>

    </div>
    <div class="noResults"></div>

</div>
</body>

</html>

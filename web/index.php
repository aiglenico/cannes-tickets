<!DOCTYPE html>
<html lang="en" ng-app="CannesApp">
<head>
    <meta charset="UTF-8">
    <title>Cannes-tickets</title>
    <script src="../bower_components/angular/angular.js"></script>
    <script src="../bower_components/angular-route/angular-route.min.js"></script>
    <script src="app.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div ng-controller="SingleController as ctrl">
        <table ng-repeat="showseance in ctrl.seances">
            <tr>
                <th></th>
                <th>Debussy</th>
                <th>Lumière</th>
            </tr>
            <tr>
                <td>{{showseance.date}}</td>
                <td ng-repeat="mov in showseance.movies">{{mov.title}}</td>
            </tr>
        </table>
        <!-- <div ng-repeat="showmovies in showmovies">
                <div ng-repeat="show in showmovies.shows">
                    <p>ngjfdngj</p>
                        {{show.director}}
                </div>
        </div> -->
    </div>
</div>

</body>
</html>
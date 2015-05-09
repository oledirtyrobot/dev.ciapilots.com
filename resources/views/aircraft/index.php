<!doctype  html>
<html  lang="en" ng-app>
<head>
    <meta  charset="UTF-8">
    <title>Corporate Image Aviation</title>
</head>
<body>
<h1>Aircraft: Angularjs Demo</h1>

<p ng-controller="DemoAircraftController">
    <ul>
        <li ng-repeat="todo in todos">{{ todo.tailNumber }}</li>
    </ul>
</p>

<p>
    Name: <input type="text" ng-model="name" />
    <br />
    {{ name }}
</p>

<script src="./javascript/angular.min.js"></script>
<script src="./javascript/main.js"></script>

</body>
</html>
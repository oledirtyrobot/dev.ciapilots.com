<!doctype  html>
<html ng-app="aircraftApp">
<head>
    <title>Corporate Image Aviation</title>
    <link  rel="stylesheet"  href="/css/app.css">
    <link  rel="stylesheet"  href="/css/style.css">
    <link  rel="stylesheet"  href="/css/bootstrap.min.css">
    <link  rel="stylesheet"  href="/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="/javascript/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="/javascript/main.js"></script>
</head>
<body ng-controller="DemoAircraftController">
<!-- ng-init="todos=[{ tailNumber: 'N975BD' },{ tailNumber: 'N929SS' },{ tailNumber: 'N418DR' }];" -->

<h1>Aircraft: Angularjs Demo</h1>

<p >Tail Numbers (Controller Test):
    <ul>
        <li ng-repeat="todo in todos">{{ todo.tailNumber }}</li>
    </ul>
</p>
<br /><br />
<p>
    <form ng-submit="addAircraft()">
    Name (Model Binding Test): <input type="text" ng-model="newAircraft" />
    <button type="submit">Add Aircraft</button>
    </form>
    <br />
    {{ newAircraft }}
</p>

<br /><br /><br />

<p>

   Airport Identifier: <input type="text" ng-model="airportID" ng-change="getFBO()" ng-click="airportID=''; depFboDetails='';"/>
<div ng-show="loading" class="loading"><img src="http://www.nasa.gov/multimedia/videogallery/ajax-loader.gif" width="15" height="15""></div>

<br />
<H2>{{ fboName }}</H2>

<!--
<div ng-repeat="fbo in fbosName">

        <H2>{{ fbo.fboName }}</H2>
        <p>{{ fbo.fboDetails }}</p>

</div>
-->
<h2>FBO Name</h2>
<select size="3" multiple="yes" width="188" style="width: 188px" >

    <option ng-repeat="fbo in fbosName" value="{{ fbo.id }}" ng-click="fboDetails(fbo.fboDetails)" ng-model="depFboDetails">{{ fbo.fboName }}</option>
</select>
<div>
    <h2>FBO Details</h2>
    <p>{{ depFboDetails }}
</div>


</p>
</body>
</html>
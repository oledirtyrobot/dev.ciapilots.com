var itineraryApp = angular.module('itineraryApp', ["xeditable"]);

itineraryApp.run(function(editableOptions) {
    editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
});
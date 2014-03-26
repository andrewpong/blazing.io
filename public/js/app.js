'use strict';

// Declare app level module which depends on filters, and services
var App = angular.module('app', ['ngSanitize', 'ngResource', 'ui.router', 'oc.modal']).config(['$stateProvider', '$locationProvider', '$urlRouterProvider', function($stateProvider, $locationProvider, $urlRouterProvider) {
	$locationProvider.hashPrefix('!');
	$urlRouterProvider.otherwise("/todo");

	$stateProvider.state('todo', {
		url: "/todo", // root route
		views: {
			"mainView": {
				templateUrl: "partials/todo.html",
				controller: 'TodoCtrl'
			}
		}
	}).state('view', {
		url: "/view",
		views: {
			"mainView": {
				templateUrl: "partials/partial.html",
				controller: 'MyCtrl'
			}
		}
	});

	// Without server side support html5 must be disabled.
	return $locationProvider.html5Mode(false);
}]);
;App.controller('AppCtrl', [
	'$scope', '$location', '$resource', '$rootScope', function($scope, $location, $resource, $rootScope) {
		// Uses the url to determine if the selected
		// menu item should have the class active.
		$scope.$location = $location;
		$scope.$watch('$location.path()', function(path) {
			return $scope.activeNavId = path || '/';
		});
		/* getClass compares the current url with the id.
		 * If the current url starts with the id it returns 'active'
		 * otherwise it will return '' an empty string. E.g.
		 *
		 *   # current url = '/products/1'
		 *   getClass('/products') # returns 'active'
		 *   getClass('/orders') # returns ''
		 */
		return $scope.getClass = function(id) {
			if($scope.activeNavId.substring(0, id.length) === id) {
				return 'active';
			} else {
				return '';
			}
		};
	}
])
;App.controller('ModalCtrl', ['$scope', function($scope) {
	console.log('modal ctrl');
}]);
;App.controller('MyCtrl', ['$scope', function($scope) {
	$scope.onePlusOne = 2;
}]);
;App.controller('TodoCtrl', ['$scope', function($scope) {
	$scope.todos = [{
		text: "learn angular",
		done: true
	}, {
		text: "build an angular app",
		done: false
	}];
	$scope.addTodo = function() {
		$scope.todos.push({
			text: $scope.todoText,
			done: false
		});
		return $scope.todoText = "";
	};
	$scope.remaining = function() {
		var count;
		count = 0;
		angular.forEach($scope.todos, function(todo) {
			return count += (todo.done ? 0 : 1);
		});
		return count;
	};
	return $scope.archive = function() {
		var oldTodos;
		oldTodos = $scope.todos;
		$scope.todos = [];
		return angular.forEach(oldTodos, function(todo) {
			if(!todo.done) {
				return $scope.todos.push(todo);
			}
		});
	};
}]);
;'use strict';
/* Directives*/

// register the module with Angular
App.directive('appVersion', [ // require the 'app.service' module
	'version', function(version) {
		return function(scope, elm, attrs) {
			return elm.text(version);
		};
	}
]);
;'use strict';
/* Filters*/

App.filter('interpolate', [
	'version', function(version) {
		return function(text) {
			return String(text).replace(/\%VERSION\%/mg, version);
		};
	}
]);
;'use strict';
/* Sevices*/

App.factory('version', function() {
	return "0.4.0";
});
;
//# sourceMappingURL=app.js.map
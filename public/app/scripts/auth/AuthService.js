(function(){

	angular.module('app')
	  .factory('AuthService', function ($rootScope, $http, Session) {
	    var authService = {};
	     
	      authService.login = function (credentials) {
	        return $http
	          .post('/api/sessions', credentials)
	          .then(function (res) {

	            Session.create(res.data.data.session_id, res.data.data.id, res.data.data.role);

	            return res.data.data;
	          });
	      };
	     
	      authService.isAuthenticated = function () {
	        return !!Session.userId;
	      };
	     
	      authService.isAuthorized = function (authorizedRoles) {
	        if (!angular.isArray(authorizedRoles)) {
	          authorizedRoles = [authorizedRoles];
	        }
	        
	        return (authService.isAuthenticated() && authorizedRoles.indexOf(Session.userRole) !== -1);
	      };
	     
	      return authService;
	  })
	  
})();
	var app=angular.module('pa-header', []);
	app.run(function(){
		console.log('hello header');	
	});
	app.controller('ctlHeader', function($scope){
		$scope.logout=function(){
			sessionStorage.token=null;
			window.location.href='/admin/login';
		}
	})
var app=angular.module('pa-language', [])
app.run(function($http,$rootScope){
	console.log('hello language');
	if(sessionStorage.token!=undefined&&sessionStorage.token!=null)
	{
		$http.get('/api/getuser?token='+sessionStorage.token).then(function(res){
			$rootScope.user=res.data;
		}, function(err){
			window.location.href='/admin/login';
		});
	}
	else
	{
		window.location.href='/admin/login';
	}
});
app.controller('language', function($scope,$http){
	$scope.languageSelect='';
	$scope.languageSelect_id='';
	$http.get('/api/languages?token='+sessionStorage.token).then(function(res){
		$scope.listLanguage=res.data.data;
	}, function(err){
		console.log(err);
	});
	$scope.choice=function(id,name){
		$scope.languageSelect=name;
		$scope.languageSelect_id=id;
	}
	$scope.submit=function(){
		$http.put('/api/users/language/update', {token:sessionStorage.token,languagedefault:$scope.languageSelect_id})
		.then(function(res){
				window.location.href='/admin';
		}, function(err){
			console.log(err);
		})
	}
})
angular.element(document).ready(function(){
  $('.loading').fadeOut('slow');
});


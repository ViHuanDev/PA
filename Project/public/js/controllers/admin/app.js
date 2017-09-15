var main = angular.module('PA',['pa-header']);
main.run(function($http,$rootScope){
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
})
angular.element(document).ready(function(){
  $('.loading').fadeOut('slow');
});
// main.config(function(cfpLoadingBarProvider) {
//     cfpLoadingBarProvider.includeSpinner = true;
//   })


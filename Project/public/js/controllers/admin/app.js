var main = angular.module('PA',['pa-header']);
main.run(function($http,$rootScope){
	if(sessionStorage.token!=undefined&&sessionStorage.token!=null)
	{
		$http.get('/api/getuser?token='+sessionStorage.token).then(function(res){
			if(res.data.languagedefault!=null)
			{
				$rootScope.user=res.data;
			}
			else
			{
				window.location.href='/admin/choicelanguage';
			}
			
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


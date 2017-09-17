var app=angular.module('pa-login', []);
app.run(function ($http) {
	if(sessionStorage.token!=undefined&&sessionStorage.token!=null)
  {
    $http.get('/api/getuser?token='+sessionStorage.token).then(function(res){
      if(res.data.languagedefault!=null)
      {
        window.location.href='/admin';
      }
      else
      {
        window.location.href='/admin/choicelanguage';
      }
    }, function(err){
    });
  }
})
app.controller('login', function($scope,$http){
  $scope.login=function(email,password){
    if ($("#validate").valid())
      $http.post('/api/users/signin',{email:email,password:password}).then(function(res){
      if(res.data.response==='success')
      {
        sessionStorage.token=res.data.result.token;
        if(res.data.user.languagedefault==null)
        {
          window.location.href='/admin/choicelanguage';
        }
        else
        {
          window.location.href='/admin';
        }
      }
      else
      {
          $scope.error='Tên đăng nhập hoặc mật khẩu không chính xác'
      }
    }, function(err){
      console.log(err);
    })
  }
});
angular.element(document).ready(function(){
  $('.loading').fadeOut('slow');
});
window.fbAsyncInit = function() {
  FB.init({
    appId      : '138320212970487',
    status     : true, 
    cookie     : true,
    xfbml      : true,
    oauth      : true,
  });
};
(function(d){
   var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "//connect.facebook.net/fr_FR/all.js";
   d.getElementsByTagName('head')[0].appendChild(js);
 }(document));

jQuery(function($)
{
  $('.facebookConnect').click(function(){
      FB.login(function(response){
        var url = "/users/facebook";
        if(response.authResponse)
        {
          window.location = url;
        }
      },{scope:'email'});
      return false;
  });
});
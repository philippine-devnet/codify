var app_router = new AppRouter;
app_router.on('route:allUsersView',function( page ){
	if(page === null)
		page = 0;
	$("[spa-id=main-container]").fadeOut(500);
	var all_users_view = new AllUsersView( { el: $("[spa-id=main-container]"), page: page});
});
app_router.on('route:userView',function( id ){
	if(id == 0)
		app_router.navigate('users/all');
	$("[spa-id=main-container]").fadeOut(500);
	var user_view = new UserView( { el: $("[spa-id=main-container]"), id: id } );

});
app_router.on('route:clearAll',function(){
	$("[spa-id=main-container]").fadeOut(500).delay(500);
	$("[spa-id=main-container]").html("").fadeIn(500);
});
 Backbone.history.start();

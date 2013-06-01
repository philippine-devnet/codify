var app_router = new AppRouter;
app_router.on('route:allUsersView',function( page ){
	if(page === null)
		page = 0;
	$("[spa-id=main-container]").fadeOut(500);
	var all_users_view = new AllUsersView( { el: $("[spa-id=main-container]"), page: page});
});
app_router.on('route:clearAll',function(){
	$("[spa-id=main-container]").html("");
});
 Backbone.history.start();

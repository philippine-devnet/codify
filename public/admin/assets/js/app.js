var AppRouter = Backbone.Router.extend({
		routes: {
			":route/:action":"loadView",
		}
	});
var app_router = new AppRouter;
app_router.on('route:loadView',function(route, action){
	
});
 Backbone.history.start();
var AppRouter = Backbone.Router.extend({
		routes: {
			"users/all(/:page)" 	: 	"allUsersView",
			"users/new"		: 	"clearAll",
			"users/blocked"	: 	"clearAll",
			"users/roles"	: 	"clearAll",
			"user/:id"		: 	"userView",
			"activities/categories(/:page)" : "categoryView"
		}
	});




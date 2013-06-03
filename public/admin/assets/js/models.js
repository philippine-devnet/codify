var User = Backbone.Model.extend({
	urlRoot: 'api/user',
	defaults:{
		username	: 	"",
		role_id		: 	0,
		created_at	: 	null,
		updated_at	: 	null
	}
});


var Category = Backbone.Model.extend({

	urlRoot: "api/category",

	defaults:{

 		name 		: 	"",
 		description	: 	"",
 		created_at 	: 	null,
 		updated_at 	: 	null

	}


});
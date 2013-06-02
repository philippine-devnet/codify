var User = Backbone.RelationalModel.extend({
	urlRoot: 'api/user',
	defaults:{
		username	: 	"",
		role_id		: 	0,
		created_at	: 	null,
		updated_at	: 	null,

	},
	relations: [{
		type 		 	: 	 Backbone.HasOne,
		key			 	: 	'profile',
		relatedModel 	: 	'Profile',
		reverseRelation	: 	{
			key 	: 	"user", 	
		}
	}],

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

var Profile = Backbone.RelationalModel.extend({
	urlRoot: 	"api/profile",
	defaults:{
		email_address 	: 	"",
		first_name 		: 	"",
		middle_name 	: 	"",
		last_name 		: 	"",
		occupation 		: 	"",
		created_at	 	: 	null,
		updated_at 		: 	null
	}
});
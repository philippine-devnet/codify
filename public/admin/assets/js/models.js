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


var Category = Backbone.RelationalModel.extend({

	urlRoot: "api/category",

	defaults:{

 		name 			: 	"",
 		description		: 	"",
 		created_at 		: 	null,
 		updated_at 		: 	null

	},
	relations: [{

		type			: 	Backbone.HasMany,
		key 			: 	'thread',
		relatedModel	: 	'Thread',
		reverseRelation : 	{
			key 	: 	'category',
		}


	}]

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

var Threads = Backbone.RelationalModel.extend({

	urlRoot: 	"api/thread",
	defaults:{

		title: 			:  	"",
		category 		: 	0,
		created_at 		: 	null,
		updated_at 		: 	null
		
	}
});
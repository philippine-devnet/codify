var User = Backbone.Model.extend({
	urlRoot: 'api/user',
	defaults:{
		username	: 	"",
		role_id		: 	0,
		created_at	: 	null,
		updated_at	: 	null
	}
});
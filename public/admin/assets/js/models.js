var User = Backbone.Model.extend({
	urlRoot: 'api/user',
	defaults:{
		id			: 	"",
		username	: 	"",
		role_id		: 	"",
	}
});
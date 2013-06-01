var UserModel = Backbone.Model.extend({
	urlRoot: 'api/users',
	defaults:{
		id			: 	"",
		username	: 	"",
		role		: 	"",
	}
});
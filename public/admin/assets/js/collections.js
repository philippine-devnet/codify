var UserCollection  = Backbone.Model.extend({
	url 		: 	"api/users/all",
	model 		: 	User,
	defaults	: 	{
		model: 	User,
		url: 	"api/users/all",
	}
});
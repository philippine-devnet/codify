var Users  = Backbone.Model.extend({
	url 		: 	"api/users/all",
	model 		: 	User,
});


var CategoryAll = Backbone.Model.extend({

	url: "api/categories/all",
	model: Category, 

});

var Threads = Backbone.Model.extend({

	url: "api/threads/all",
	model: 	Thread,

})
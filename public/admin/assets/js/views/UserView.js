UserView  = Backbone.View.extend({
	initialize: 	function(){
		this.render();
		_.bindAll(this);
	},
	render: 		function(){
		this.user = new User({id: this.options.id});
		this.user.fetch({
			success : 	function(user){
				console.log(user);
			}
		});
	}
});
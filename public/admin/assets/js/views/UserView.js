UserView  = Backbone.View.extend({
	initialize: 	function(){
		this.render();
		_.bindAll(this);
	},
	render: 		function(){
		var that = this;
		user = new User({id: this.options.id});
		user.fetch({
			success : 	function(user){	
				var variables = {
					user : user
				};
				var template = _.template( $("[spa-tpl-id=current_user]").html(), user );
				that.$el.html( template ).fadeIn(500);

			}
		});
	}
});
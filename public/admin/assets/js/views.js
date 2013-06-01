AllUsersView = Backbone.View.extend({
	initialize: 	function(){
		this.render();
		_.bindAll(this);
	},
	render: 		function(){
		var data = new UserCollection;
		var that = this;
		data.fetch({data:{skip:0, take:10}, success:function(){
			var variables = {
				page	: 	that.options.page,
				data	: 	data,
			};
			data.each(function(user){
				console.log(user.get("id"));
			});
			var template = _.template( $("[spa-tpl-id=all_users]").html(), variables );
			that.$el.html( template );
		}});
		

	},

});
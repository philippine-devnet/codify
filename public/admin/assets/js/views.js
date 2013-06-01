AllUsersView = Backbone.View.extend({
	initialize: 	function(){
		this.render();
		_.bindAll(this);
	},
	render: 		function(){
		this.data = new Users;
		var that = this;
		this.data.fetch({data:{skip:this.options.page*10, take:10}, success:function(){
			var variables = {
				page	: 	that.options.page,
				data	: 	that.data.attributes,
			};
			
			var template = _.template( $("[spa-tpl-id=all_users]").html(), variables );
			that.$el.html( template ).fadeIn(500);
		}});
		

	},

});
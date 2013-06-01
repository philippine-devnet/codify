AllUsersView = Backbone.View.extend({
	initialize: 	function(){
		this.render();
	},
	render: 		function(){
		var variables = {
				page	: 	this.options.page,

		};
		var template = _.template( $("[spa-tpl-id=all_users]").html(), variables );
		this.$el.html( template );

	},

});
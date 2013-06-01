AllUsersView = Backbone.View.extend({
	initialize: 	function(){
		this.render();
	},
	render: 		function(){
		var variables = {};
		var template = _.template( $("[spa-tpl-id=all_users]").html(), variables );
		this.$el.html( template );
		alert(this.$page);
	},

});
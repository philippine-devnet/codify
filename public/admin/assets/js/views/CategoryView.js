CategoryView = Backbone.View.extend({

	initialize: function(){

		this.render();

	},

	render: function(){

		this.$el.html("hello world").fadeIn(1000);

	}



});
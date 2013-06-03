CategoryView = Backbone.View.extend({

	initialize: function(){

		this.render();

	},

	render: function(){


		this.data = new CategoryAll;

		var that = this;
		this.data.fetch({data:{skip:this.options.page*10, take:10}, success:function(){
			var variables = {
				page	: 	that.options.page,
				data	: 	that.data.attributes,
			};
			
			var template = _.template( $("[spa-tpl-id=category]").html(), variables );
			that.$el.html( template ).fadeIn(500);

		}});



	}



});
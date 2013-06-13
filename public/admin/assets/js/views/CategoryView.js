CategoryView = Backbone.View.extend({

	initialize: function(){

		this.render();
		_.bindAll(this);

	},

	events: {

		'submit [spa-id=new-category-form]'  : 'saveCategory'

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

	},

	saveCategory: 		function(e){
		e.preventDefault();
		var that = this;
		var text = "[spa-id=new-category-form]";
		var form = $("[spa-id=new-category-form]");
		var category  	 = $(text + " input[name=category]").val();
		var description  = $(text + " textarea[name=description]").val();
		if(category == ""){
			var alertError = _.template( $("[spa-tpl-id=alert-base]").html(), {
				alert_type	: 	"alert-error",
				style		: 	"font-weight:normal; line-height:120%; font-size:12px;",
				alert_info	: 	"<strong><i class='icon-exclamation-sign'></i>&nbsp;An error has occured! Please check all fields and try again.",
			} );
			$("[spa-tpl-id=new-user-tpl-alert]").html( alertError ).delay(500).fadeIn(500).delay(2000).fadeOut(500);
		}else{
			var newCategory = new Category();
			var name = category;
			var details = {
				name 		: 	name,
 				description	: 	description
			}
			console.log(details.name + "hello world");
			newCategory.save(details,{
				wait	 	: 	true,
				success 	: 	function(user){

						var alertError = _.template( $("[spa-tpl-id=alert-base]").html(), {
							alert_type	: 	"alert-success",
							style		: 	"font-weight:normal; line-height:120%; font-size:12px;",
							alert_info	: 	"<strong><i class='icon-ok-sign'></i>&nbsp;Congratulations! You have saved a new user.",
						} );
						$("[spa-tpl-id=new-user-tpl-alert]").html( alertError ).delay(500).fadeIn(500).delay(2000).fadeOut(500);		
		
				},
				error 		: 	function(){
					var alertError = _.template( $("[spa-tpl-id=alert-base]").html(), {
						alert_type	: 	"alert-error",
						style		: 	"font-weight:normal; line-height:120%; font-size:12px;",
						alert_info	: 	"<strong><i class='icon-exclamation-sign'></i>&nbsp;An error has occured! Please check all fields and try again.",
					} );
					$("[spa-tpl-id=new-user-tpl-alert]").html( alertError ).delay(500).fadeIn(500).delay(2000).fadeOut(500);
				}, 
			});

		}
		
	}

});
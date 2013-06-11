UserView  = Backbone.View.extend({
	initialize: 	function(){
		this.render();
		_.bindAll(this);
	},
	events: 		{
		'click [spa-id=profile-save-btn]' : 'saveProfile',
	},
	saveProfile: 	function(){
		var user = this.user;
		var profile = this.user.get('profile');
		var data = $("[spa-id=user-profile-form]").serializeObject();
		profile.set(data);
		profile.save(data,{
			wait	: 	true,
			success : 	function(model){
				profile = model;
				var alertError = _.template( $("[spa-tpl-id=alert-base]").html(), {
					alert_type	: 	"alert-success",
					style		: 	"font-weight:normal; line-height:120%; font-size:12px;",
					alert_info	: 	"<strong><i class='icon-ok-sign'></i>&nbsp;The User's Data has been saved.",
				} );
				$("[spa-tpl-id=saved-user-tpl-alert]").html( alertError ).delay(500).fadeIn(500).delay(2000).fadeOut(500);
			},
			error 	: 	function(){
				var alertError = _.template( $("[spa-tpl-id=alert-base]").html(), {
					alert_type	: 	"alert-error",
					style		: 	"font-weight:normal; line-height:120%; font-size:12px;",
					alert_info	: 	"<strong><i class='icon-ok-sign'></i>&nbsp;The User's Data has not been saved. You may not have priveledge to access the data",
				} );
				$("[spa-tpl-id=saved-user-tpl-alert]").html( alertError ).delay(500).fadeIn(500).delay(2000).fadeOut(500);
			}
		});
	},
	render: 		function(){
		
		this.user = new User({id: this.options.id});
		var that = this;

		this.user.fetch({
			success : 	function(user){	
				var variables = {
					user : that.user
				};
				var template = _.template( $("[spa-tpl-id=current_user]").html(), variables );
				that.$el.html( template ).fadeIn(500);


			}
		});
	}
});
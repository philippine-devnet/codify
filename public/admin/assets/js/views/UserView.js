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
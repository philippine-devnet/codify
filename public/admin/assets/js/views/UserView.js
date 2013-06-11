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
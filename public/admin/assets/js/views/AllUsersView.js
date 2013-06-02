AllUsersView = Backbone.View.extend({

	initialize: 	function(){

		this.render();
		_.bindAll(this);
	},

	events: 		{
		'click [spa-id=new-user-submit]' : 'saveUser',
		'submit [spa-id=new-user-form]'  : 'saveUser'
	},

	render: 		function(){


		var data = new Users;

		var that = this;
		data.fetch({data:{skip:this.options.page*10, take:10}, success:function(){
			var variables = {
				page	: 	that.options.page,
				data	: 	data.attributes,
			};
			
			var template = _.template( $("[spa-tpl-id=all_users]").html(), variables );
			that.$el.html( template ).fadeIn(500);

		}});
		
	},
	append 	: 		function(user){
		$html = "<tr>";
		$html += "<td class='center'>"+user.get("username")+"</td>";
		$html += "<td class='center'>"+user.get("created_at")+"</td>";
		$html += "<td class='center'>"+user.get("role_id")+"</td>";
		$html += "<td>";
		if(user.get("status_code") == 0)
			$html += "<span class='label label-danger'>Inactive</span>";
		else
			$html += "<span class='label label-success'>Active</span>";
		$html += "</td>";
		$html += "<td class='center'><a href='#/user/"+user.get("id")+"' class='btn btn-info'><i class='icon-user'></a></i></td>";
		$html += "</tr>";
		$("[spa-id=users-table]").prepend($html);
	},
	saveUser: 		function(e){
		e.preventDefault();
		var that = this;
		var text = "[spa-id=new-user-form]";
		var form = $("[spa-id=new-user-form]");
		var username  = $(text + " input[name=username]").val();
		var password  = $(text + " input[name=password]").val();
		var password2 = $(text + " input[name=password2]" ).val();
		if(username == "" || password == "" || password2 == "" || (password != password2)){
			var alertError = _.template( $("[spa-tpl-id=alert-base]").html(), {
				alert_type	: 	"alert-error",
				style		: 	"font-weight:normal; line-height:120%; font-size:12px;",
				alert_info	: 	"<strong><i class='icon-exclamation-sign'></i>&nbsp;An error has occured! Please check all fields and try again.",
			} );
			$("[spa-tpl-id=new-user-tpl-alert]").html( alertError ).delay(500).fadeIn(500).delay(2000).fadeOut(500);
		}else{
			var newUser = new User();
			var details = {
				username 	: 	username,
				password 	: 	password
			}
			newUser.save(details,{
				wait	 	: 	true,
				success 	: 	function(user){

						var alertError = _.template( $("[spa-tpl-id=alert-base]").html(), {
							alert_type	: 	"alert-success",
							style		: 	"font-weight:normal; line-height:120%; font-size:12px;",
							alert_info	: 	"<strong><i class='icon-ok-sign'></i>&nbsp;Congratulations! You have saved a new user.",
						} );
						$("[spa-tpl-id=new-user-tpl-alert]").html( alertError ).delay(500).fadeIn(500).delay(2000).fadeOut(500);		
						that.append(user);				
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
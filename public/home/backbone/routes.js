var AppRouter = BackboneMVC.Router.extend({
	routes	: 	{
			'' 	: 	"index"
			},
	index 	: 	function(){
		router.navigate("home/index",{trigger:true, replace: true});
	}

});
var HomeController  = BackboneMVC.Controller.extend({
	name		: 	"home",

	contact 	: 	function(){
		$("[spa-id='title']").html("Contact Us | Codify PH");
	},
	developers 	: 	function(){
		$("[spa-id='title']").html("Developers | Codify PH");
	},
	contact 	: 	function(){
		$("[spa-id='title']").html("Contact Us | Codify PH");
	},
	index		: function(){
		$("[spa-id='title']").html("Codify PH | Beta");
	},
});
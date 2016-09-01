$(document).ready(function () {
	// var user = $.cookie('user_name').split(',');
	var user = window.UserName.split(',');

	$( "textarea[name=bugnote_text], #description, #steps_to_reproduce, #additional_info, #summary, #additional_information").atwho({
		at:"@",
		data: user
	});
});

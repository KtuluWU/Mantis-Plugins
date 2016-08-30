function user_information()
{
	return JSON.parse($("input[name=mention_usr_information]").val());
}


$(document).ready(function () {
	var user = user_information();

	$( "textarea[name=bugnote_text], #description, #steps_to_reproduce, #additional_info, #summary, #additional_information").atwho({
		at:"@",
		data: user
	});
});

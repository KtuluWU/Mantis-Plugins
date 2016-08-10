function user_information()
	{
		return JSON.parse($("input[name=tokenbox_usr_information]").val());
	}

function translation_data()
	{
		return JSON.parse($("input[name=tokenbox_translation_data]").val());
	}

$(document).ready(function() {
	var user = user_information();
	var data = translation_data();
    $("#bug_tokenbox_username").tokenInput(user, {
    	hintText: data.hintText,
    	noResultsText: data.noResultsText,
    	searchingText: data.searchingText
    });
 });
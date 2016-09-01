function JsonForUser() {
	return JSON.parse($("input[name=Users_informations]").val());
}

$(document).ready(function() {
	var user_informations = JsonForUser();
	var user_name = new Array;
	var user_id = new Array;
	var user_info = new Array;

	for (var i=0; i < user_informations.length; i++) {
		user_name.push(user_informations[i].name);
		user_id.push(user_informations[i].id);
	}

	window.UserId = user_id.join(',');
	window.UserName = user_name.join(','); // Il faut utiliser window.username.split(',') pour récupérer les données.
	window.UsersInformation = user_informations;

	/* Deuxième façon pour stokcer les données dans le contexte global: jQuery cookie
	 * Décommenter les codes suivants afin d'utiliser cookie.
	 */
	// $.cookie('UserName', user_name.join(','), { expires: 7});
	// $.cookie('UserId', user_id, { expires: 7});
	// $.cookie('UsersInformation', user_informations.join(','), { expires: 7});

 });
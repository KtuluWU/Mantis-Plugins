(function MonitorAutocompletePlugin($)
{

	function user_data()
	{
		return JSON.parse($("input[name=username_array]").val());
	}

	function highlight(value, search)
	{
		return value.replace(new RegExp('(' + search + ')', 'gi'), '<strong>$1</strong>');
	}

	$.fn.MonitorAutocomplete = function MonitorAutocomplete()
	{	
		var accentMap =
		{
			"é": "e",
			"ê": "e",
			"è": "e",
			"é": "e",
			"à": "a",
			"ô": "o"
		};

		var normalize = function (term)
		{
			var ret = "";
			for (var i = 0; i < term.length; i++)
			{
				ret += accentMap[term.charAt(i)] || term.charAt(i);
			}
			return ret;
		};

		

		return this.each(function ()
		{
			$textbox = $(this);
			var users = user_data();
			
			var $auto = $textbox.autocomplete({
				
				minLength: 0,
				source: function( request, response ) {
					var matcher = new RegExp($.ui.autocomplete.escapeRegex( request.term), "i");
					response ($.grep(users, function(value) {
						value = value.label || value.value || value;
						return matcher.test(value) || matcher.test(normalize(value));
					}));
				}
			}).data('uiAutocomplete');

			$auto._renderMenu = function( ul, items ) {
			  	var that = this;
			  	$.each( items, function( index, item ) {
			    	that._renderItemData( ul, item );
			  	});
			  	$( ul ).addClass( "MonitorAutocompleteMenu" );
			}

			$auto._renderItem = function ( ul, item )
			{
				var pos = $('li', ul).size();
				var search = $textbox.val();
				var html = ['<a class="MonitorAutocompleteItem']

				html.push('">');
				html.push('<span class="MonitorAutocomplete">');
				html.push(highlight(item.label, search));
				html.push('</span>');
				html.push('</a>');

				return $("<li></li>")
						.data("item.autocomplete", item)
						.append(html.join(''))
						.appendTo(ul);

			};
			

			$textbox.focus(function () { if ($textbox.val() == ''){ $textbox.val(''); } });
			$textbox.focus(function () { $auto.search(); });
		});

	}
})(jQuery);

(function ($)
{
	$(document).ready(function ()
	{
		$('input[type="text"][id="bug_monitor_list_username"]').MonitorAutocomplete();
	});

})(jQuery);
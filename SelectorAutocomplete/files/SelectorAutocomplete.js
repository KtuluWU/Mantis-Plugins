(function SelectorAutocompletePlugin($)
{

	function user_data(select)
	{
		var items = [];

		for (var i = 0; i < select.options.length; i++)
		{
			var option = select.options[i]
			var userid = option.value.substring(option.value.lastIndexOf(';') + 1);
			items.push({
				value: option.value,
				displayLabel: option.text,
				selected: option.selected
			});
		}
		return items;
	}

	function SelectToText(select)
	{
		var $textbox = $('<input type="text" class="SelectToText" id="SelectToText" />');
		var selectedItem = select.options[select.selectedIndex];
		var initialText = '';

		if (selectedItem)
		{
			$textbox.val(selectedItem.text);
			initialText = selectedItem.text;
		}

		$textbox.focus(function ()
		{
			if ($textbox.val() == initialText)
			{
				$textbox.val('');
			}
		});

		$textbox.insertAfter(select);
		$(select).hide()
		
		return { $textbox: $textbox };
	}

	function highlight(value, search)
	{
		return value.replace(new RegExp('(' + search + ')', 'gi'), '<strong>$1</strong>');
	}

	function changeSelectValue(select, value, raiseChange)
	{
		$(select).val(value);

		if (raiseChange && $(select).change)
		{
			$(select).change();
		}
	}

	$.fn.SelectorAutocomplete = function SelectorAutocomplete()
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
			var select = this;
			var selector = SelectToText(select);
			var $textbox = selector.$textbox;
			var selectValue = $(select).val();
			var dataSource = user_data(select);
			
			var $auto = $textbox.autocomplete({
				
				minLength: 0,
				source: function( request, response ) {
					var matcher = new RegExp($.ui.autocomplete.escapeRegex( request.term), "i");
					response ($.grep(dataSource, function(value) {
						value = value.displayLabel || value.value || value;
						return matcher.test(value) || matcher.test(normalize(value));
					}));
				},
				delay: 0,
				minLength: 0,
				select: function (event, ui)
				{
					changeSelectValue(select, ui.item.value, true);
					$textbox.val(ui.item.displayLabel);
					window.setTimeout(function ()
					{
						$textbox.val(ui.item.displayLabel);
					}, 5);
				},
				change: function (event, ui)
				{
					if (ui.item == null)
					{
						changeSelectValue(select, selectValue, true);
					}
					else
					{
						$textbox.val(ui.item.displayLabel);
						changeSelectValue(select, ui.item.value, true);
					}
				}
			}).data('uiAutocomplete');

			$auto._renderMenu = function( ul, items ) {
			  	var that = this;
			  	$.each( items, function( index, item ) {
			    	that._renderItemData( ul, item );
			  	});
			  	$( ul ).addClass( "SelectorAutocompleteMenu" );
			}

			$auto._renderItem = function ( ul, item )
			{
				var pos = $('li', ul).size();
				var search = $textbox.val();
				var html = ['<a class="SelectorAutocompleteItem']

				html.push('">');
				html.push('<span class="SelectorAutocomplete">');
				html.push(highlight(item.displayLabel, search));
				html.push('</span>');
				html.push('</a>');

				return $("<li></li>")
						.data("item.autocomplete", item)
						.append(html.join(''))
						.appendTo(ul);

			};
			

			//$textbox.focus(function () { if ($textbox.val() == ''){ $textbox.val(''); } });
			$textbox.focus(function () { $auto.search(); });

		});
	}

	$.fn.textClear = function textClear() {
		$(this).on({
			'keypress' : function(e) {
				$(this).addClass('crossClear');
			},
			'mouseover' : function(e) {
				$(this).addClass('crossClear');
			},
			'focusout' : function() {
				$(this).removeClass('crossClear');
			},
			'mouseout' : function() {
				$(this).removeClass('crossClear');
			},
			'click' : function(e) {
				if (($(this).hasClass('crossClear'))) {
					var mousePosInElement = e.pageX - $(this).position().left;
					if (mousePosInElement > $(this).width()) {
						$(this).removeClass('crossClear');
						$(this).val('');
					}
				}
			}
		});
	}
})(jQuery);

(function ($)
{
	$(document).ready(function ()
	{
		$('select').not('select[name=project_id]').SelectorAutocomplete();
		$('.SelectToText').textClear();
	});

})(jQuery);
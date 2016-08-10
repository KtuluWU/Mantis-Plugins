function getMarkdownGuide()
{
	return JSON.parse($("input[name=markdown_guide]").val());
}

$(document).ready(function(){
  $("textarea[name=additional_info], textarea[name=bugnote_text]").after(function(n){
  	  var markdownGuide = getMarkdownGuide();
      return "<a href=\"" + markdownGuide.url + "\" name=\"markdownguide\" target=\"_blank\" >"+ 
      		 markdownGuide.text + "</a>";
  });
});
